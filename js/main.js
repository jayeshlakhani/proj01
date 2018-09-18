$(document).ready(function(){
	$("#submit_btn").on("click",function(){
		$('#through_ajax').val('true');
		var pass_1 = $("#password_1").val();
		var pass_2 = $("#password_2").val();
		/*if ((pass_1 != pass_2)) {
			alert('Password Does Not Match!!');
			return false;
		}else{*/
			var DOMAIN = "http://localhost/proj01/";
			jQuery.ajax({
				url : DOMAIN + "database/connect.php",
				method : "POST",
				data : $("#register_form").serialize(),
				datatype:'json',
				success : function(data){
					var res = JSON.parse(data);
    				if(res.status == 'false'){
    					if(res.fieldname == 'username'){

    					}
    					return false;
    				}else{

    				}				}
			})
		//}
		$('#through_ajax').val('false');

	});
	
})

// $("#reg_fail").html('<div class="alert alert-warning"><strong>Warning!</strong> Indicates a warning that might need attention.</div>')