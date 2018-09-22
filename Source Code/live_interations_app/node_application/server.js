/*------------------Handle basic get requests---------------------*/
const express = require('express');

const app = express();
const port = 443;

// Set public folder as root
app.use(express.static('public'));

// Provide access to node_modules folder from the client-side
app.use('/scripts', express.static(`${__dirname}/node_modules/`));
app.use('/client', express.static(`${__dirname}/public/client.html`));
// Redirect all traffic to index.html
app.use((req, res) => res.sendFile(`${__dirname}/public/index.html`));

app.listen(port, () => {
  console.info('listening on %d', port);
});

//hello world!
/*----------------------------Handling web sockets-----------------------------*/
//require our websocket library 
var WebSocketServer = require('ws').Server; 

//creating a websocket server at port 9090 
var wss = new WebSocketServer({port: 9090}); 

//all connected to the server users 
var users = {};
var userCount = 0;
  
//when a user connects to our sever 
wss.on('connection', function(connection) {
  
	console.log("User connected");
	
   //when server gets a message from a connected user 
	connection.on('message', function(message) { 
	
		var data; 
			
		//accepting only JSON messages 
		try { 
			data = JSON.parse(message); 
		} catch (e) { 
			console.log("Invalid JSON"); 
			data = {}; 
		}
		console.log('Server got message type: ', data.type);
		//switching type of the user message 
		switch (data.type) { 
			//when a user tries to login
			case "login": 
				console.log("User logged in", data.name); 
				
				//if anyone is logged in with this username then refuse
				if(users[data.name]){
					sendTo(connection,{ 
						type: "login", 
						success: false,
						name: data.name
					});
				} else{ 
					//save user connection on the server 
					users[data.name] = connection; 
					connection.name = data.name; 
					
					sendTo(connection, { 
						type: "login", 
						success: true,
						name: data.name
					});
					userCount++;
				}
				
				break;	
			case "videoOffer": 
				//for ex. UserA wants to call UserB 
				console.log("Sending video offer to: ", data.target);
					
				//if UserB exists then send him offer details 
				var conn = users[data.target]; 
					
				if(conn != null){
					//setting that UserA connected with UserB 
					connection.otherName = data.name;
					sendTo(conn, {
						type: "videoOffer",
						offer: data.offer,
						name: connection.name
					}); 
				}
				
            break;

			case "canvasOffer": 
				//for ex. UserA wants to call UserB 
				console.log("Sending canvas offer to: ", data.target);	
				//if UserB exists then send him offer details 
				var conn = users[data.target];
				if(conn != null) { 
				   //setting that UserA connected with UserB 
				   connection.otherName = data.name; 
				   sendTo(conn,{
					  type: "canvasOffer",
					  offer: data.offer, 
					  name: connection.name 
				   }); 
				}
				
            break;
						
			case "videoAnswer": 
				console.log("Sending video answer to: ", data.target); 
				//for ex. UserB answers UserA 
				var conn = users[data.target]; 
					
				if(conn != null) { 
				   connection.otherName = data.name; 
				   sendTo(conn, { 
					  type: "videoAnswer", 
					  answer: data.answer,
						name: data.name
				   }); 
				} 
				
			break;
			
			case "canvasAnswer": 
				console.log("Sending canvas answer to: ", data.target); 
				//for ex. UserB answers UserA 
				var conn = users[data.target]; 
					
				if(conn != null) { 
				   connection.otherName = data.name; 
				   sendTo(conn, { 
					  type: "canvasAnswer", 
					  answer: data.answer,
					  name: data.name
				   }); 
				}
			
            break; 
				
			case "videoCandidate": 
				console.log("Sending video candidate to:",data.target); 
				var conn = users[data.target];
					
				if(conn != null) { 
				   sendTo(conn, { 
					  type: "videoCandidate", 
					  candidate: data.candidate,
						name: data.name
				   }); 
				} 
					
            break;
			
			case "canvasCandidate": 
				console.log("Sending canvas candidate to:",data.target); 
				var conn = users[data.target];
					
				if(conn != null) { 
				   sendTo(conn, { 
					  type: "canvasCandidate", 
					  candidate: data.candidate,
					  name: data.name
				   }); 
				} 
					
            break;
			
			case "teacherLeft": 
				console.log("Disconnecting from", data.name); 
				var conn = users[data.name];
				users[data.name] = null;
				conn.otherName = null; 
					
				//If all calls ended, Notify teacher that the other user so he can disconnect his peer connection 
				if(conn != null) {
				   sendTo(conn, { 
					  type: "leave" 
				  }); 
				}
					
            break;
			
			case "studentLeft": 
				console.log("Disconnecting from studentLeft", data.name); 
				/*var conn = users[data.name]; 
				users[data.name] = null;
				//conn.otherName = null; 
					
				//If student ends call, Notify teacher only if last student left so that they can disconnect their peer connection 
				/*if(allCallsEnded()){
					if(conn != null) {
					   sendTo(conn, { 
						  type: "leave" 
					  }); 
					}
				}*/					
            break;
			
			case "pleaseCallMe": 
				//for ex. UserA wants to call UserB 
				
					
				//if UserB exists then send him the callback
				var conn = users[data.target]; 
					
				if(conn != null){
					connection.otherName = data.name; 
							
					sendTo(conn, { 
						type: "pleaseCallMe", 
						name: data.name 
					});
					console.log("Sent callback to: ", data.target);					
				}
				else{
					console.log('Error sending callback to: ', data.target);
				}
            break;
				
			default: 
				sendTo(connection, { 
				   type: "error", 
				   message: "Command not found: " + data.type 
				}); 
					
            break; 
		}
		
	}); 
	
	//when user exits, for example closes a browser window 
	//this may help if we are still in "offer","answer" or "candidate" state 
	connection.on("close", function() {
		if(connection.name) {
			delete users[connection.name];
			if(connection.otherName){
				console.log("Disconnecting from ", connection.otherName); 
				var conn = users[connection.otherName]; 
				//conn.otherName = null;
				
				if(conn != null) { 
					sendTo(conn,{ 
						type: "leave"
					});
				}
			}
		}
		
	});  
	
	connection.send("Hello world");  
});
  
function sendTo(connection, message) { 
   connection.send(JSON.stringify(message)); 
}

function allCallsEnded(){
	if(userCount <= 0)
		return true;
	else
		return false
}