
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



$user = new SignLogin();
if (isset($_POST['submit'])) {
	$user->signUp();
}


?>