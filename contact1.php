<?php
if (isset($_POST["email"])) {

$first_name     = $_POST['first_name'];
$last_name     = $_POST['last_name'];
$email    = $_POST['email'];
$phone   = $_POST['phone'];

$comments = $_POST['comments'];

// mail("","My subject",$msg);

$address = "support@detectiveagencyindore.com";



// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
// mail("bakulmehra8@gmail.com","My subject",$msg);

$e_subject = 'You\'ve been contacted by ' . $first_name . '.' ;

$e_body = "You have been contacted by $first_name via Website. Their additional message is as follows." . PHP_EOL . PHP_EOL;
$e_content = "\"$comments\"" . PHP_EOL . PHP_EOL;
$e_reply = "You can contact $first_name via email, $email or via phone $phone";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

// $msg = 'concern of ' . $first_name . ' is ' . $comments . '.';

$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
// $mailheader  .= 'MIME-Version: 1.0' . "\r\n";
// $mailheader .= 'charset=utf-8' . "\r\n";

// echo $first_name;
// echo $last_name;
// echo $email;
// echo $phone;
// echo $msg;
if(mail($address, $e_subject, $msg, $mailheader)) {

// 	// Email has sent successfully, echo a success page.

	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h1>Email Sent Successfully.</h1>";
	echo "<p>Thank you <strong>$first_name</strong>, your message has been submitted to us.</p>";
	echo "<h3><a href='index.html' >Click here to Redirecting to home</a></h3>";
	echo "</div>";
	echo "</fieldset>";

	

} else {

	echo 'ERROR!';
	// header("Location: about-us.html");

}
// header("Location: index.html");
// sleep(3);

	// header("Location: index.html");
}