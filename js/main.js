$(document).ready(function(){
	$("#btn_reg").click( function(){
		var status = false;
		var name = $("#username").val();
		var email = $("#email").val();
		var pass_1 = $("#password_1").val();
		var pass_2 = $("#password_2").val();
		var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);

		// Username Validation

		if (name == "") {
			$("#u_error").addClass("border-danger");
			$("#u_error").html('<span class="text-danger">Username can not be emty!</span>');
			status = false;
		}else if (name.length < 6) {
			$("#u_error").addClass("border-danger");
			$("#u_error").html('<span class="text-danger">Username must be more than 6 char.</span>');
			status = false;
		}else{
			$("#u_error").removeClass("border-danger");
			$("#u_error").html('');
			status = true;
		}

		// Email Validation

		if (email == "") {
			$("#e_error").addClass("border-danger");
			$("#e_error").html('<span class="text-danger">Email can not be emty!</span>');
			status = false;
		}else if (!e_patt.test(email)) {
			$("#e_error").addClass("border-danger");
			$("#e_error").html('<span class="text-danger">Enter valid Email Address.</span>');
			status = false;
		}else{
			$("#e_error").removeClass("border-danger");
			$("#e_error").html('');
			status = true;
		}

		// Password Validation

		if (pass_1 == "") {
			$("#p1_error").addClass("border-danger");
			$("#p1_error").html('<span class="text-danger">Password can not be emty!</span>');
			status = false;
		}else if (name.length < 6) {
			$("#p1_error").addClass("border-danger");
			$("#p1_error").html('<span class="text-danger">Password must be more than 6 char.</span>');
			status = false;
		}else{
			$("#p1_error").removeClass("border-danger");
			$("#p1_error").html('');
			status = true;
		}

		if (pass_2 == "") {
			$("#p2_error").addClass("border-danger");
			$("#p2_error").html('<span class="text-danger">Password can not be emty!</span>');
			status = false;
		}else if (name.length < 6) {
			$("#p2_error").addClass("border-danger");
			$("#p2_error").html('<span class="text-danger">Password must be more than 6 char.</span>');
			status = false;
		}else{
			$("#p2_error").removeClass("border-danger");
			$("#p2_error").html('');
			status = true;
		}

		// AJAX

		if (pass_1 === pass_2 && status == true) {
			$.post( $("#form_register").attr("action"),
		    $("#form_register :input").serializeArray(), 
		    function(info){
		        // $("#result").html(info);
		        alert(info); 
		  	});
		 	clearInput();

		 	function clearInput() {
				$("#form_register :input").each( function() {
			   		$(this).val('');
				});
			}
		}
		
	});
});





// AJAX

// $("#btn_reg").click( function() {
// 	 	$.post( $("#form_register").attr("action"),
// 	    $("#form_register :input").serializeArray(), 
// 	    function(info){
// 	        // $("#result").html(info);
// 	        alert(info); 
// 	  	});
// 	 	clearInput();
// 	});

// 	function clearInput() {
// 		$("#form_register :input").each( function() {
// 	   		$(this).val('');
// 		});
// 	}