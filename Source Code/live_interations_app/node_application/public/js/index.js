//our username 
var teacherName; 
//store student peer connection objects
var canvasPeerObjects = {};
var videoPeerObjects = {};
var videoStream;
var canvasStream;
//student that sends a message
var remoteUser;
//connecting to our signaling server
var conn = new WebSocket('wss://137.215.42.239:8443');

conn.onopen = function () { 
   console.log("Connected to the signaling server"); 
};
  
//when we got a message from a signaling server 
conn.onmessage = function (msg) { 
   console.log("Got message", msg.data);
	
	var data = JSON.parse(msg.data);
	//get name of user that sent us a message
	remoteUser = data.name;
	switch(data.type) { 
		case "login": 
			//server returns whether login was successful or not
			handleLogin(data.success);
			break;  
		case "videoAnswer": 
			//when someone replies to our offer for a video
			handleVideoAnswer(data.answer); 
			break;
		case "canvasAnswer":
			handleCanvasAnswer(data.answer);
			break;
		//when a remote peer sends us an ice candidate for a video 
		case "videoCandidate": 
			handleVideoCandidate(data.candidate); 
			break;
		//when a remote peer sends us an ice candidate for a canvas
		case "canvasCandidate": 
			handleCanvasCandidate(data.candidate); 
			break;
		case "pleaseCallMe":
			//when someone sends us a message to call them
			handlePleaseCallMe(); 
			break;
		case "leave":
			//when the other peer(student) has ended the call
			handleLeave(data.name); 
			break; 
		default:
			console.log('Failed to handle message type: ',data.type);
			break; 
   }
};
  
conn.onerror = function (err) { 
   console.log("Got error", err); 
};
  
//alias for sending JSON encoded messages 
function send(message) { 
   //attach our name to all messages sent 
   if (teacherName) { 
      message.name = teacherName; 
   } 
	
   conn.send(JSON.stringify(message)); 
};
  
//*******************
//UI selectors block 
//*******************
 
var loginPage = document.querySelector('#loginPage'); 
var usernameInput = document.querySelector('#usernameInput'); 
var loginBtn = document.querySelector('#loginBtn'); 

var callPage = document.querySelector('#callPage'); 
var hangUpBtn = document.querySelector('#hangUpBtn');
  
var localVideo = document.querySelector('#localVideo'); 
var localCanvas = document.querySelector('#lccanvas2');
var remoteUser;
  
//set a stun server for the peer connections
var configuration = { 
	"iceServers": [{ "url": "stun:stun2.1.google.com:19302" }]
};
//do not display the call page when we start
callPage.style.display = "none";

// Login when the remoteUser clicks the button 
/*loginBtn.addEventListener("click", function (event) {
   teacherName = usernameInput.value;
   
   if (teacherName.length > 0) { 
      send({ 
         type: "login", 
         name: teacherName 
      }); 
   }
   else{
	   alert('Please enter a username for sign in');
   }
});*/
function loadName() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = 
		function() {
			if (this.readyState == 4 && this.status == 200) {
				teacherName = xhttp.responseText;

				window.alert("This is response: " + teacherName);
				teacherName = "teacher";
				if (teacherName.length > 0) {
					send({
						type: "login",
						name: teacherName
					});
				} else {
					alert('Something went wrong with the Ajax call');
				}
			}
		};
	
	xhttp.open("GET", "https://137.215.42.239/moodle/local/testplugin/client/client.php", true);
	xhttp.send();
}
  
  
function handleLogin(success){ 
	if(success === false) { 
		alert("Ooops...try a different username"); 
	}else { 
		loginPage.style.display = "none"; 
		callPage.style.display = "block";
		
		navigator.mediaDevices.getUserMedia({video:true, audio: false})
			.then(function(stream){
				videoStream = stream;
				localVideo.srcObject = videoStream;
			})
			.catch(function(err) {
				console.log('Error: ',err);
			});
		
	};
} 

//capture canvas and send the stream to peer-connection
function captureAndSendCanvas(){	
	canvasPeerObjects[remoteUser] = new RTCPeerConnection(configuration); 
	// Setup ice handling 
	canvasPeerObjects[remoteUser].onicecandidate = function (event) { 
		if (event.candidate) { 
			send({ 
				type: "canvasCandidate", 
				candidate: event.candidate,
				target: remoteUser
			});
			console.log('Sending canvasCandidate from teacher');
		} 
	};
	
	canvasStream = localCanvas.captureStream();
	//localVideo.srcObject = canvasStream;
	console.log('sending canvas streams');
	canvasStream.getTracks().forEach(function(track) {
		canvasPeerObjects[remoteUser].addTrack(track, canvasStream);
	});
}

function sendVideoStreams(){
	console.log('Creating peer objects for: ', remoteUser);
	videoPeerObjects[remoteUser] = new RTCPeerConnection(configuration);
	videoPeerObjects[remoteUser].onicecandidate = function (event) { 
		if (event.candidate) { 
			send({ 
				type: "videoCandidate", 
				candidate: event.candidate,
				target: remoteUser
			});
			console.log('Sending videoCandidate from teacher');			
		} 
	};
	console.log('sending video streams');
	videoStream.getTracks().forEach(function(track) {
		videoPeerObjects[remoteUser].addTrack(track, videoStream);
	});
}
 
function handlePleaseCallMe() { 
	
	sendVideoStreams();
	captureAndSendCanvas();
	//if the user has a valid name
	if (remoteUser.length > 0) { 	
		//create offer for video streams
		createVideoOffer();
		
		// create an offer for canvas streams 
		canvasPeerObjects[remoteUser].createOffer(function (offer) { 
			send({
				type: "canvasOffer",
				offer: offer,
				target: remoteUser
			}); 
			canvasPeerObjects[remoteUser].setLocalDescription(offer); 
			console.log('Sent offers to: ', remoteUser);
		}, function (error) { 
			alert("Error when creating canvas an offer"); 
		});
		
	}
	else{
		console.log('Remote username not valid!');
	}
};
 
function createVideoOffer(){
	
	videoPeerObjects[remoteUser].createOffer(function(offer){
		
		send({
			type:"videoOffer",
			offer: offer,
			target: remoteUser
		});
		videoPeerObjects[remoteUser].setLocalDescription(offer); 
		console.log('Sent video offer to ws');
	}, function(error){
		alert("Error when creating video offer");
	});
}  
  
//when we got an answer(for canvas) from a remote user
function handleCanvasAnswer(answer) {
	if(canvasPeerObjects[remoteUser] != null){
		canvasPeerObjects[remoteUser].setRemoteDescription(new RTCSessionDescription(answer));
	}
	else{
		console.log('Error handling canvas answer');
	}
};

//when we got an answer(for video) from a remote remoteUser
function handleVideoAnswer(answer) { 
	if(videoPeerObjects[remoteUser] != null){
		videoPeerObjects[remoteUser].setRemoteDescription(new RTCSessionDescription(answer));
	}
	else{
		console.log('Error handling video answer');
	} 
};
 
//when we got a canvas ice candidate from a remote remoteUser 
function handleCanvasCandidate(candidate) { 
   canvasPeerObjects[remoteUser].addIceCandidate(new RTCIceCandidate(candidate)); 
};

//when we got an ice candidate from a remote remoteUser 
function handleVideoCandidate(candidate) { 
	console.log("Setting video ice candidate: ", remoteUser);
	videoPeerObjects[remoteUser].addIceCandidate(new RTCIceCandidate(candidate)); 
};
   
//We want to end our call! 
hangUpBtn.addEventListener("click", function () { 

   send({ 
      type: "teacherLeft"
   });  
	
   handleLeave(teacherName); 
});
 
function handleLeave(leaver) { 
	if(leaver === teacherNamename){
		//for each canvas peer object, set it to null and close connection
		for(let obj of canvasPeerObjects){
			obj.close();
			obj.onicecandidate = null;
			obj.ontrack = null;
		}
		canvasPeerObjects = null;
		//for each canvas peer object, set it to null and close connection
		for(let obj of videoPeerObjects){
			obj.close();
			obj.onicecandidate = null;
			obj.ontrack = null;
		}
		videoPeerObjects = null;
	}
	else{
		canvasPeerObjects[remoteUser].close(); 
		canvasPeerObjects[remoteUser].onicecandidate = null; 
		canvasPeerObjects[remoteUser].ontrack = null;
		videoPeerObjects[remoteUser].close(); 
		videoPeerObjects[remoteUser].onicecandidate = null; 
		videoPeerObjects[remoteUser].ontrack = null;
	}
	   
};
