$('#send').click(function(){
	sendMessage();
});
$(document).keypress(function(e){
	if(e.keyCode == 13){
		if(ok==true){
			sendMessage();
		}
	}
});
var ok = false;
$("#message").focusin(function(){
	ok = true;
})
$("#message").focusout(function(){
	ok = false;
})
setInterval(getMessages,2000);
function getMessages(){
	$.ajax({
		type: "post",
		url: 'get.php'
	}).done(function(res){
		$('main').html(res);
	})
}
function sendMessage(){
	var msg = $('#message').val();
	msg=msg.trim();
	if(msg!=""){
	var p = $.ajax({
		type: "post",
		url: "send.php",
		data: {info: msg}
	}).done(function(res){
		if(res=='ok'){
			$('#message').val("");
		}
	}).fail(function(){
		alert('fail');
	});
	}
}