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

$(document).ready(function(){

	$("#bt-post").click(function(){

		console.log ("button clicked");

		var username = $("#usr").val();
		var msg = $("#msg").val();
		var btn = $("#post").val();

		var pData = {usr: username, msg: msg, btn: btn};


		$.ajax({

			type: "POST",
			url: "models/Users.php?action=posted",
			data: pData,
			success: function(data){

				if (data == "1") {

					window.location.assign('index.php?page=feed');
				}	
			}
		})



	})


})

$(document).ready(function(){

	$("#prof").click(function(){

	alert ("Done");
	})

})

