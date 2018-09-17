$(document).ready(function(){
	$("#form_register").on("submit",function(){
		var pass_1 = $("#password_1").val();
		var pass_2 = $("#password_2").val();
		if (!(pass_1 === pass_2)) {
			alert('Password Does Not Match!!');
			return false;
		}
	})
	
})

// $("#reg_fail").html('<div class="alert alert-warning"><strong>Warning!</strong> Indicates a warning that might need attention.</div>')