//our username 
var callToUsername; 
var connectedUser;
 var user;
//connecting to our signaling server
var conn = new WebSocket('ws://localhost:9090');
  
conn.onopen = function () { 
   console.log("Connected to the signaling server"); 
};
  
//when we got a message from a signaling server 
conn.onmessage = function (msg) { 
	console.log("Got message", msg.data);
	
	var data = JSON.parse(msg.data); 
	user = data.name;
	switch(data.type) { 
		case "login": 
			handleLogin(data.success); 
			break; 
		//when somebody wants to call us 
		case "videoOffer": 
			//console.log('Hanfling video offer');
			handleVideoOffer(data.offer); 
			break;
		case "canvasOffer": 
			handleCanvasOffer(data.offer); 
			break;			
		case "videoAnswer": 
			handleVideoAnswer(data.answer); 
			break; 
		case "canvasAnswer": 
			handleCanvasAnswer(data.answer); 
			break;  
		case "videoCandidate": 
			console.log('Handling ice candidate');
			handleVideoCandidate(data.candidate); 
			break; 
		case "canvasCandidate": 
			handleCanvasCandidate(data.candidate); 
			break; 	
		case "leave": 
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
   //attach the other peer username to our messages 
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
	
});

function handleLogin(success) { 
	if (success === false) { 
		alert("Ooops...try a different username"); 
	} else { 
		loginPage.style.display = "none"; 
		callPage.style.display = "block";
		console.log('Here we are');
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
	console.log('Here')
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
			//remoteCanvas.backgroundColor = 'blue';
			console.log('Received remote canvas stream');
		}				
    };
}
//when somebody sends us an offer 
function handleCanvasOffer(offer){
	//connectedUser = name; 
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
		console.log('Send canvas answer');
	}, function (error) { 
		alert("Error when creating canvas answer: ", error); 
	}); 
};

function handleVideoOffer(offer) { 
	//connectedUser = name;
	vidConn.setRemoteDescription(new RTCSessionDescription(offer));
	
	//create an answer to an offer 
	vidConn.createAnswer(function (answer) { 
		vidConn.setLocalDescription(answer); 
		
		send({ 
			type: "videoAnswer", 
			answer: answer 
		}); 
		console.log('Sent video Answer');
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
	console.log('Handled vid candidate');
	vidConn.addIceCandidate(new RTCIceCandidate(candidate)); 
};

//when we got an ice candidate from a remote user 
function handleCanvasCandidate(candidate) { 
	yourConn.addIceCandidate(new RTCIceCandidate(candidate)); 
};

//create an offer to get a video
function createVideoOffer(){
	vidConn.createOffer(function(offer){
		send({type:"videoOffer", offer: offer});
		vidConn.setLocalDescription(offer); 
		console.log('Sent video offer to teacher');
	}, function(error){
		alert("Error when creating video offer to teacher");
	});
} 
function createCanvasOffer(){
	yourConn.createOffer(function (offer) { 
		send({ type: "canvasOffer", offer: offer }); 
			yourConn.setLocalDescription(offer); 
			//console.log('Sent canvas offer to ws');
		}, function (error) { 
			alert("Error when creating canvas offer to teacher"); 
	});
}

callBtn.addEventListener("click", function () { 
   callToUsername = callToUsernameInput.value;
	
   if (callToUsername.length > 0) { 	
		//name = callToUsername;
		//ask teacher to call you
		console.log('Sending callback to: ', callToUsername);
		sendPleaseCallMe();
		
	} 
});
 
 
function sendPleaseCallMe(){
	send({
		type: "pleaseCallMe"
	});
}

//hang up 
hangUpBtn.addEventListener("click", function () { 
	send({ 
		type: "studentLeft" 
	});  
	
	handleLeave(); 
});
  
function handleLeave() { 
	connectedUser = null; 
	// remoteCanvas.src = null; 
		
	yourConn.close(); 
	yourConn.onicecandidate = null; 
	yourConn.ontrack = null; 
   
    vidConn.close(); 
	vidConn.onicecandidate = null; 
	vidConn.ontrack = null; 
};