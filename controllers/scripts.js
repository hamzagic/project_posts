$(document).ready(function(){

	console.log("loaded");

	$("#toggle").click(function(){

		if ($("#hid").val() == "1") {
		$("#hid").val("0");
		$("#title").html("Login");
		$("#login2").html("Login");
		$("#toggle").html("Sign Up");
		$("#fname").hide();
		$("#lname").hide();
		$("#username").hide();
		$("#fname-label").hide();
		$("#lname-label").hide();
		$("#usr-label").hide();

		} else {

		$("#hid").val("1");
		$("#title").html("Sign Up");
		$("#login2").html("Sign Up");
		$("#toggle").html("Login");
		$("#fname").show();
		$("#lname").show();
		$("#username").show();
		$("#fname-label").show();
		$("#lname-label").show();
		$("#usr-label").show();

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

//signup data
$(document).ready(function(){

	$('#login2').click(function(){

		
		if ($('#hid').val() == '1') {

			console.log('signup process');

			var fname = $('#fname').val();
			var lname = $('#lname').val();
			var username = $('#username').val();
			var email = $('#email').val();
			var pass = $('#pass').val();

			var signupData = {fname: fname, lname: lname, username: username, email: email, pass: pass};

			$.ajax({

				type: "POST",
				url: "models/Users.php?actions=signup",
				data: signupData,
				success: function(data){

					if (data) {

						alert('ok');
						window.location.assign('index.php?page=profile');
						

					} else {

						alert("not 1");
					}



					
				}


			})
		}
	})

})

