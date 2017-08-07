$(document).ready(function(){

	console.log("loaded");

	$("#toggle").click(function(){

		if ($("#hid").val() == "1") {
		$("#hid").val("0");
		$("#title").html("Login");
		$("#login2").html("Login");
		$("#toggle").html("Sign Up");
		} else {

		$("#hid").val("1");
		$("#title").html("Sign Up");
		$("#login2").html("Sign Up");
		$("#toggle").html("Login");


		}

	})

	
})