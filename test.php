<?php
$to = 'sebastian.gates@dkit.ie';
$subject = 'Test Email';
$from = 'paul.scollon@dkit.ie';
 
// Optional: To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Recommended: Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Now Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">It Works!</h1>';
$message .= '<p style="color:#080;font-size:18px;">Now have a look at test.php in that script directory</p>';
$message .= '</body></html>';
 
// Sending email, output the result
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully. Please check your inbox....';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
