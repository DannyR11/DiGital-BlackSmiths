//our username 
var name; 
var connectedUser;
  
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
		//when somebody wants to call us 
		case "videoOffer":
			handleVideoOffer(data.offer, data.name); 
			break; 
		case "videoAnswer": 
			handleVideoAnswer(data.answer); 
			break;
		case "canvasOffer": 
			handleCanvasOffer(data.offer, data.name); 
			break; 
		case "canvasAnswer":
			handleCanvasAnswer(data.answer);
			break;
		//when a remote peer sends an ice candidate to us 
		case "videoCandidate": 
			handleVideoCandidate(data.candidate); 
			break;
		case "canvasCandidate": 
			handleCanvasCandidate(data.candidate); 
			break;			
		case "leave": 
			handleLeave(); 
			break; 
		default:
			console.log('Failed to make offer: ',data.type);
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
  
var localVideo = document.querySelector('#localVideo'); 
var localCanvas = document.querySelector('#lccanvas2');

var canvasConn; //peer connection for transmitting canvas streams
var videoConn;	//peer connection for transmitting local video(and audio) streams
var canvasStream; //canvas streams
var videoStream; //video streams
  
callPage.style.display = "none";

// Login when the user clicks the button 
loginBtn.addEventListener("click", function (event) { 
   name = usernameInput.value;
	
   if (name.length > 0) { 
      send({ 
         type: "login", 
         name: name 
      }); 
   }
	
});

//check if the browser supports the WebRTC
function hasUserMedia() {  
	return !!(navigator.getUserMedia || navigator.webkitGetUserMedia || 
		navigator.mozGetUserMedia); 
} 
  
  
function handleLogin(success) { 
	if(success === false) { 
		alert("Ooops...try a different username"); 
	}else { 
		loginPage.style.display = "none"; 
		callPage.style.display = "block";
		
		//set a stun server for the peer connections
		var configuration = { 
			"iceServers": [{ "url": "stun:stun2.1.google.com:19302" }]
		}; 
		//get local(users) video stream
		navigator.mediaDevices.getUserMedia({video:true, audio: false})
			.then(function(stream){
				/* display stream on local video */
				videoStream = stream;
				localVideo.srcObject = videoStream;
				//*****************************************
				//Create a peer connection for local video
				//*****************************************
				
				videoConn = new RTCPeerConnection(configuration);
				videoConn.onicecandidate = function (event) { 
					if (event.candidate) { 
						send({ 
							type: "videoCandidate", 
							candidate: event.candidate 
						}); 
					} 
				};
				
				sendVideoStreams(videoConn);
			})
			.catch(function(err) {
				/* handle the error */
				console.log('Error: ',err);
			});
		
		//**************************************
		//Create a peer connection for canvas
		//**************************************
		canvasConn = new RTCPeerConnection(configuration); 
		// Setup ice handling 
		canvasConn.onicecandidate = function (event) { 
			if (event.candidate) { 
				send({ 
					type: "canvasCandidate", 
					candidate: event.candidate 
				}); 
			} 
		};
		
		

		//add capturedStream to canvas
		captureAndSendCanvas(canvasConn);
	};
} 

//capture canvas and send the stream to peer-connection
function captureAndSendCanvas(connect){
	canvasStream = localCanvas.captureStream();
	//localVideo.srcObject = stream;
	canvasStream.getTracks().forEach(function(track) {
		canvasConn.addTrack(track, canvasStream);
	});
}

function sendVideoStreams(connect){
	videoStream.getTracks().forEach(function(track) {
		videoConn.addTrack(track, videoStream);
	});
}
//initiating a call 
callBtn.addEventListener("click", function () { 
   var callToUsername = callToUsernameInput.value;
	
   if (callToUsername.length > 0) { 	
		connectedUser = callToUsername;
		//create offer for video streams
		createVideoOffer();
		
		// create an offer for canvas streams 
		canvasConn.createOffer(function (offer) { 
			send({ type: "canvasOffer", offer: offer }); 
			canvasConn.setLocalDescription(offer); 
			console.log('Sent canvas offer to ws');
		}, function (error) { 
			alert("Error when creating canvas an offer"); 
		});
		
	} 
});
  
function createVideoOffer(){
	videoConn.createOffer(function(offer){
		send({type:"videoOffer", offer: offer});
		videoConn.setLocalDescription(offer); 
		console.log('Sent video offer to ws');
	}, function(error){
		alert("Error when creating video offer");
	});
}  
  
//when somebody sends us an offer 
function handleCanvasOffer(offer, name) { 
   connectedUser = name; 
   canvasConn.setRemoteDescription(new RTCSessionDescription(offer));
   //create an answer to an offer 
   canvasConn.createAnswer(function (answer) { 
      canvasConn.setLocalDescription(answer); 
		
      send({ 
         type: "answer", 
         answer: answer 
      }); 
		
   }, function (error) { 
      alert("Error when creating an answer"); 
   }); 
};
  
function handleVideoOffer(offer, name) { 
   connectedUser = name; 
   videoConn.setRemoteDescription(new RTCSessionDescription(offer));
   //create an answer to an offer 
   videoConn.createAnswer(function (answer) { 
		videoConn.setLocalDescription(answer); 	
		send({type: "videoAnswer",answer: answer }); 
   }, function (error) { 
      alert("Error when answering local video offer"); 
   }); 
};

//when we got an answer(for canvas) from a remote user
function handleCanvasAnswer(answer) {
	if(canvasConn != null){
		canvasConn.setRemoteDescription(new RTCSessionDescription(answer));
	}
	else{
		console.log('canvasConn is null');
	}
};

//when we got an answer(for video) from a remote user
function handleVideoAnswer(answer) { 
	videoConn.setRemoteDescription(new RTCSessionDescription(answer)); 
};
  
//when we got a canvas ice candidate from a remote user 
function handleCanvasCandidate(candidate) { 
   canvasConn.addIceCandidate(new RTCIceCandidate(candidate)); 
};

//when we got an ice candidate from a remote user 
function handleVideoCandidate(candidate) { 
	console.log("setting ice candidate");
   videoConn.addIceCandidate(new RTCIceCandidate(candidate)); 
};
   
//hang up 
hangUpBtn.addEventListener("click", function () { 

   send({ 
      type: "leave" 
   });  
	
   handleLeave(); 
});
  
function handleLeave() { 
   connectedUser = null; 
   canvasConn.close(); 
   canvasConn.onicecandidate = null; 
   canvasConn.ontrack = null;
   videoConn.close(); 
   videoConn.onicecandidate = null; 
   videoConn.ontrack = null;   
};
