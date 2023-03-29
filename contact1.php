<?php


// $first_name     = $_POST['first_name'];
// $last_name     = $_POST['last_name'];
// $email    = $_POST['email'];
// $phone   = $_POST['phone'];

// $comments = $_POST['comments'];

// mail("","My subject",$msg);

$address = "Bakulmehra8@gmail.com";

$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
// mail("bakulmehra8@gmail.com","My subject",$msg);

$e_subject = 'You\'ve been contacted by ' . $first_name . '.';



if(mail($address, $e_subject, $msg)) {

// 	// Email has sent successfully, echo a success page.

	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h1>Email Sent Successfully.</h1>";
	echo "<p>Thank you <strong>$first_name</strong>, your message has been submitted to us.</p>";
	echo "<h3>Redirecting to home</h3>";
	echo "</div>";
	echo "</fieldset>";

	

} else {

	echo 'ERROR!';
	header("Location: about-us.html");

}
// header("Location: index.html");
// sleep(3);

	// header("Location: index.html");