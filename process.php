<?php
@session_start();

foreach ($_POST as $item => $value){
					@setcookie ('hdw_'.$item, (is_array($value)?implode(",",$value):str_replace("\'","'",$value)), 0, '/');
								}
			foreach ($_COOKIE as $item => $value){
								if (substr($item,0,4) == 'hdw_' && $_GET[substr($item,4)] == '' && $_POST[substr($item,4)] == ''){
														@setcookie ($item, '', 0, '/');
																		}
											}

if ((empty($_POST['hdcaptcha']) || $_POST['hdcaptcha'] == '' || strtolower($_POST['hdcaptcha']) != strtolower($_SESSION['rand_code']))){
		header('Location:submit-fail.html');exit;
}
	
	// Grab the form vars
	$name = (isset($_POST['name'])) ? $_POST['name'] : '' ;
	$city = (isset($_POST['city'])) ? $_POST['city'] : '' ;
	$phone = (isset($_POST['phone'])) ? $_POST['phone'] : '' ;
	$email = (isset($_POST['email'])) ? $_POST['email'] : '' ;
	$comments = (isset($_POST['comments'])) ? $_POST['comments'] : '' ;
	$arrayVals = "";
	foreach($_POST as $key => $val){
		$arrayVals .= $key . " " . $val . "\n";
	}
	file_put_contents("./tate_testing.txt", $arrayVals, FILE_APPEND);

	// Check for email injection
	if (has_emailheaders($email)) {
		die("Possible email injection occuring");
	}

	$autoMailOriginator = "auto-mailer@smithsmith-law.com";
	$autoMailWarning = "------------\nThis is an automated email generated from the contact form on smithsmith-law.com.\nPlease do not reply directly to this email.\n------------";

	mail("sej@smithsmith-law.com","Contact Form Submitted from smithsmith-law.com",
	"Name: $name\nCity: $city\nEmail: $email\nPhone: $phone\nComment: $comments\n$autoMailWarning",
    "From: $autoMailOriginator");
	
function has_emailheaders($text) {
	return preg_match("/(%0A|%0D|\n+|\r+)(content-type:|to:|cc:|bcc:)/i", $text);
}

header('Location:thankyou.html');
?>
