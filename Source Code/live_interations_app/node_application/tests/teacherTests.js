var chino = require('mocha');
var tea = require('chai');

var assert = require('assert');

//testing onmessage function
describe('onMessage', function() {
  function onMessage (msg) {
	  
		try{
			if(msg == null)
				throw "error: null";
			var data = msg;
			
		}
		catch(error){
			//console.log('Error parsing message data');
			return "parseError";
		}
		
		try{
			switch(data.type) { 
				case "login": 
					return "login";
					break;  
				case "videoAnswer": 
					return "videoAnswer";
					break;
				case "canvasAnswer":
					return "canvasAnswer";
					break;
				case "videoCandidate": 
					return "videoCandidate"; 
					break;
				case "canvasCandidate": 
					return "canvasCandidate";
					break;
				case "pleaseCallMe":
					return "pleaseCallMe"; 
					break;
				case "leave":
					return "leave"; 
					break; 
				default:
					return "default";
					break; 
		   }
		}
		catch(err){
			//console.log('Switch error');
			return "switchError";
		}
  }
	//onMessage test 1
	it('It should return a parse error', function() {
		var data  = null;
		assert.equal(onMessage(data), "parseError");

	});
	it('It should return a videoAnswer', function() {
		var data  = null;
		data = {type: "videoAnswer"};
		assert.equal(onMessage(data), "videoAnswer");
	});
	
	it('It should return a canvasAnswer', function() {
		var data  = null;
		data = {type: "canvasAnswer"};
		assert.equal(onMessage(data), "canvasAnswer");
	});
	
	it('It should return a videoCandidate', function() {
		var data  = null;
		data = {type: "videoCandidate"};
		assert.equal(onMessage(data), "videoCandidate");
	});
	
	it('It should return a canvasCandidate', function() {
		var data  = null;
		data = {type: "canvasCandidate"};
		assert.equal(onMessage(data), "canvasCandidate");
	});
	
	it('It should return a login', function() {
		var data  = null;
		data = {type: "login"};
		assert.equal(onMessage(data), "login");
	});
	
	it('It should return a pleaseCallMe', function() {
		var data  = null;
		data = {type: "pleaseCallMe"};
		assert.equal(onMessage(data), "pleaseCallMe");
	});
	
	
	it('It should return a leave', function() {
		var data  = null;
		data = {type: "leave"};
		assert.equal(onMessage(data), "leave");
	});
	
	
	it('It should return a default', function() {
		var data  = null;
		data = {type: "Hey there"};
		assert.equal(onMessage(data), "default");
	});
	
	
	it('It should return a switchError', function() {
		var data  = null;
		data = {name: "switchError"};
		assert.equal(onMessage(data), "switchError");
	});
	
});


describe('allCallsEnded', function() {
	
	function allCallsEnded(userCount){
		if(userCount <= 0)
			return true;
		else
			return false
	}

	
	it('Returns false', function() {
		var userCount  = null;
		assert.equal(allCallsEnded(userCount), false);
	});

	it('Returns true', function() {
		var userCount  = 2;
		assert.equal(allCallsEnded(userCount), false);
	});	

	it('Returns false', function() {
		var userCount  = "";
		assert.equal(allCallsEnded(userCount), false);
	});

	it('Returns false', function() {
		var userCount  = "10000";
		assert.equal(allCallsEnded(userCount), false);
	});

	it('Returns false', function() {
		var userCount  = 0;
		assert.equal(allCallsEnded(userCount), true);
	});
	it('Returns false', function() {
		var userCount  = -1;
		assert.equal(allCallsEnded(userCount), true);
	});
	it('Returns false', function() {
		var userCount  = 1;
		assert.equal(allCallsEnded(userCount), false);
	});
	
});
