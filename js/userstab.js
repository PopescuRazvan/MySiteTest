$(document).ready(function(){
	$('#buttonprofile').on('click',function(){
		window.open("userprofile.php","_self")

	});	
	$('#buttonadd').on('click',function(){
		window.open("adduser.php","_self")

	});	
	$('#buttonedit').on('click',function(){
		window.open("edituser.php","_self")
	});	
	$('#buttonview').on('click',function(){
		window.open("viewusers.php","_self")
	});	
});	