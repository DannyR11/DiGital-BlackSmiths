/*------------------Handle basic get requests---------------------*/
const express = require('express');
var fs = require('fs');
var https = require('https');
var privateKey  = fs.readFileSync('https/privateKey.key', 'utf8');
var certificate = fs.readFileSync('https/certificate.crt', 'utf8');

const app = express();
const httpsPort = 8443;
var credentials = {key: privateKey, cert: certificate};

var httpsServer = https.createServer(credentials, app);

//httpServer.listen(httpPort);
httpsServer.listen(httpsPort, () => {
	console.info('listening on port %d', httpsPort);
});


// Set public folder as root
app.use(express.static('public'));

// Provide access to node_modules folder from the client-side
app.use('/scripts', express.static(`${__dirname}/node_modules/`));
app.use('/client', express.static(`${__dirname}/public/client.html`));
app.use(express.static(__dirname + '/public'));

/*----------------------------Handling web sockets-----------------------------*/
//require our websocket library 
var WebSocketServer = require('ws').Server; 

//creating a websocket server at port 9090 
var wss = new WebSocketServer({server: httpsServer}); 

//all connected to the server users 
var users = {};
var userCount = 0;

/*test require
result: fails due to the use of a self signed certificate
var request = require('request');
request('https://137.215.42.239/js/test.php', function(error, response, body) {
		console.log('error: ', error);
		console.log('statusCode: ', response && response.statusCode);
		console.log('body: ', body);
});
*/

//test require 2
process.env.NODE_TLS_REJECT_UNAUTHORIZED = "0";
var request = require('request');
request('https://137.215.42.239/moodle/local/testplugin/client/client.txt', function(error, response, body) {
		console.log('error: ', error);
		console.log('statusCode: ', response && response.statusCode);
		console.log('body: ', body);
});

//when a user connects to our sever 
wss.on('connection', function(connection) {
  	
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
		//switching type of the user message 
		switch (data.type) { 
			//when a user tries to login
			case "login": 
			
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
				/* for ex. ifUserA wants to call UserB 
				if UserB exists then send him offer details */
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
				var conn;
				//teacher has left class, notify all students to end their sessions
				for(let user of Object.keys(users)){
					conn = users[user];
					if(data.name != user){ //if user is not the teacher, because they take out their own garbage
						users[user] = null; 
						if(conn != null) {
							sendTo(conn, { 
								type: "leave"
							}); 
						}
					}
				}
					
            break;
			
			case "studentLeft": 
				var conn = users[data.name]; 
				users[data.name] = null;					
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
				}
				else{

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
	
	connection.send("wss connection live!");  
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