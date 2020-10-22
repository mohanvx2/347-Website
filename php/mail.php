<?php

$webmaster_email = "schaf2ja@dukes.jmu.edu";


$feedback_page = "../index.html";
$error_page = "../index.html";
$thankyou_page = "../index.html";


$email_address = $_REQUEST['email_address'] ;
$comments = $_REQUEST['comments'] ;
$first_name = $_REQUEST['first_name'] ;
$msg = 
"First Name: " . $first_name . "\r\n" . 
"Email: " . $email_address . "\r\n" . 
"Comments: " . $comments ;

//Redirect them to the feedback form,
if (!isset($_REQUEST['email_address'])) {
header( "Location: $feedback_page" );
}

// Redirect to the error page.
elseif (empty($first_name) || empty($email_address)) {
header( "Location: $error_page" );
}



// Error check and send email
else {
	mail( "$webmaster_email", "Feedback Form Results", $msg );
	header( "Location: $thankyou_page" );
}
?>