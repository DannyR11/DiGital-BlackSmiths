//our username 
var connectedUser;
//person we want to call
var callToUsername; 

//connecting to our signaling server
var conn = new WebSocket('ws://localhost:9090');
  
conn.onopen = function () { 
   console.log("Connected to the signaling server"); 
};
  
//when we got a message from a signaling server 
conn.onmessage = function (msg) { 
	console.log("Got message", msg.data);
	
	var data = JSON.parse(msg.data); 
	switch(data.type) { 
		case "login": 
			handleLogin(data.success); 
			break; 
		//when somebody wants to call us and send a canvas and video 
		case "videoOffer": 
			handleVideoOffer(data.offer); 
			break;
		case "canvasOffer": 
			handleCanvasOffer(data.offer); 
			break;			 
		case "videoCandidate": 
			handleVideoCandidate(data.candidate); 
			break; 
		case "canvasCandidate": 
			handleCanvasCandidate(data.candidate); 
			break; 	
		case "leave": 
		//when the other peer(student) has ended the call
			handleLeave(); 
			break; 
		default: 
			break; 
	}
};
  
conn.onerror = function (err) { 
   console.log("Got error", err); 
};
  
//alias for sending JSON encoded messages 
function send(message) { 
   //attach our name and the other peer username(who to send message) to our messages 
   if (connectedUser) { 
		message.name = connectedUser;
		message.target = callToUsername;
   } 
	
   conn.send(JSON.stringify(message)); 
};
  
//****** 
//UI selectors block 
//******
 
var loginPage = document.querySelector('#loginPage'); 
var usernameInput = document.querySelector('#usernameInput'); 
var loginBtn = document.querySelector('#loginBtn'); 

var callPage = document.querySelector('#callPage'); 
var callToUsernameInput = document.querySelector('#callToUsernameInput');
var callBtn = document.querySelector('#callBtn'); 

var hangUpBtn = document.querySelector('#hangUpBtn');
  
var remoteVideo = document.querySelector('#remoteVideo'); 
var remoteCanvas = document.querySelector('#remoteCanvas');
remoteCanvas.width = 500;
remoteCanvas.height = 500;

var yourConn; 
var vidConn;
var vidStream;
var stream;
  
callPage.style.display = "none";
//set up stun servers
var configuration = { 
	"iceServers": [{ "url": "stun:stun2.1.google.com:19302" }]
}; 
// Login when the user clicks the button 
loginBtn.addEventListener("click", function (event) { 
   connectedUser = usernameInput.value;
	
   if (connectedUser.length > 0) { 
      send({ 
			type: "login", 
			name: connectedUser 
      }); 
   }
   else{
	   alert('Please enter a name before signing in');
   }
	
});

function handleLogin(success) { 
	if (success === false) { 
		alert("Ooops...try a different username"); 
	} else { 
		loginPage.style.display = "none"; 
		callPage.style.display = "block";
		//create our peer objects for receiving streams
		createCanvasPeerObject();
		createVideoPeerObject();
   } 
};
  
function createVideoPeerObject(){
	
	vidConn = new RTCPeerConnection(configuration);
	vidConn.onicecandidate = function (event) { 
        if(event.candidate) { 
			send({ 
				type: "videoCandidate", 
				candidate: event.candidate 
			});
			console.log('Sent video Candidate');
        } 
    };
		 
	vidConn.ontrack = function (e) { 
		if(remoteVideo.srcObject !== e.streams[0]) {
			remoteVideo.srcObject = e.streams[0];
			console.log('Received remote video stream');
		}				
    };
	
}

function createCanvasPeerObject(){
	
	yourConn = new RTCPeerConnection(configuration);
	yourConn.onicecandidate = function (event) {
		console.log('Inside');
		if (event.candidate) { 
			send({ 
				type: "canvasCandidate", 
				candidate: event.candidate 
            });
			;			
        } 
    };

	yourConn.ontrack = function (e) { 
		if (remoteCanvas.srcObject !== e.streams[0]) {
			remoteCanvas.srcObject = e.streams[0];
			console.log('Received remote canvas stream');
		}				
    };
}
//when somebody sends us an offer 
function handleCanvasOffer(offer){
	yourConn.setRemoteDescription(new RTCSessionDescription(offer));
	
	//create an answer to an offer 
	if(!yourConn){
		console.log('Connection dead');
	}
	yourConn.createAnswer(function (answer) { 

		yourConn.setLocalDescription(answer); 
		
		send({ 
			type: "canvasAnswer", 
			answer: answer 
		}); 
	}, function (error) { 
		alert("Error when creating canvas answer: ", error); 
	}); 
};

function handleVideoOffer(offer) { 

	vidConn.setRemoteDescription(new RTCSessionDescription(offer));
	//create an answer to an offer 
	vidConn.createAnswer(function (answer) { 
		vidConn.setLocalDescription(answer); 		
		send({ 
			type: "videoAnswer", 
			answer: answer 
		}); 
	}, function (error) { 
	console.log("Error when creating video answer: ", error);
		alert("Error when creating video answer: ", error); 
	}); 
};
  
//when we got an answer from a remote user
function handleVideoAnswer(answer) { 
	vidConn.setRemoteDescription(new RTCSessionDescription(answer)); 
};

//when we got an answer from a remote user
function handleCanvasAnswer(answer) { 
	yourConn.setRemoteDescription(new RTCSessionDescription(answer)); 
};
  
//when we got an ice candidate from a remote user 
function handleVideoCandidate(candidate) { 
	vidConn.addIceCandidate(new RTCIceCandidate(candidate)); 
};

//when we got an ice candidate from a remote user 
function handleCanvasCandidate(candidate) { 
	yourConn.addIceCandidate(new RTCIceCandidate(candidate)); 
};

callBtn.addEventListener("click", function () { 
   callToUsername = callToUsernameInput.value;
	
   if (callToUsername.length > 0) { 
		//if name is valid, send message to ask peer(teacher) to call us
		sendPleaseCallMe();
	} 
});
 
 
function sendPleaseCallMe(){
	//send a please call me. Note!! Send will attach user name, and name of the target
	send({
		type: "pleaseCallMe"
	});
}

//hang up 
hangUpBtn.addEventListener("click", function () {
	//tell remote user we want to end call
	send({ 
		type: "studentLeft" 
	});  
	//clear our objects
	handleLeave(); 
});
  
function handleLeave() { 
	
	connectedUser = null; 
	callToUsername = null;
	yourConn.close(); 
	yourConn.onicecandidate = null; 
	yourConn.ontrack = null; 
   
    vidConn.close(); 
	vidConn.onicecandidate = null; 
	vidConn.ontrack = null;
	remoteCanvas.srcObject = null;
	remoteVideo.srcObject = null;
};