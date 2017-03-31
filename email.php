<?php
$subject = $_REQUEST['subject'] . ' Ajax HTML Contact Form : Demo'; // Subject of your email
$to = 'henry@lonw.com';  //Recipient's E-mail

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['email'] . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message .= 'Name: ' . $_REQUEST['name'] . "<br>";
$message .= $_REQUEST['message'];

if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo'<h4 class="bg-success" style="color:green;" align="center">&nbsp;提交成功 - Success</h4>';
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	echo'<h4 class="bg-success" style="color:green;" align="center">&nbsp;提交成功 - Success</h4>';
die();
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>