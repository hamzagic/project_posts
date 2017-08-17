
<?php

//include 'models/Database.php';
include 'models/Users.php';
include 'views/header.php';

include 'views/footer.php';

if (isset($_GET['page'])) {
	if ($_GET['page']=="posts") {
		include 'views/posts.php';
	}
}

if (isset($_GET['page'])) {
	if ($_GET['page']=='profile') {
		include 'views/profile.php';
	}
} else {

	include 'views/body.php';

}


//<?php
//if (isset($_GET['action'])) {
	//if ($_GET['action'] == 'signup') {

	    //echo "signup echoed";
	    
	    $signup = new SignLogin();
	    $signup->signUp2();
	    echo "hey";
	//}
//}




/*$user = new SignLogin();
if (isset($_POST['submit'])) {
	$user->signUp();
}
*/

?>