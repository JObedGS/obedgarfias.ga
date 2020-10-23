<?php
$to = 'designer.obedgarfias@gmail.com'; // Put in your email address here

// User info (DO NOT EDIT!)
$fname = stripslashes($_REQUEST['fname']); // sender's name
$email 	= stripslashes($_REQUEST['email']); // sender's email
$subject = stripslashes($_REQUEST['subject']);
$message = stripslashes($_REQUEST['message']);

// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg = "First Name:" . $fname . "\r\n\n"; // add sender's name to the message
$msg .= "E-mail:" . $email . "\r\n\n"; // add sender's email to the message
$msg .= "Subject:" . $subject . "\r\n\n"; // add sender's phone to the message
$msg .= "Messages:" . $message . "\r\n\n"; // add sender's checkboxes to the message
$msg .= "\r\n\n";

$mail = @mail($to, $subject, $msg, "From:" .$email); // This command sends the e-mail to the e-mail address contained in the $to variable

echo 'OK';

?>