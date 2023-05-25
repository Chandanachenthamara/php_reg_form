<?php

$name = $_POST['name'];


 $dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$qualification = $_POST['qualification'];
 $subject = "message";
 $mail_body="Dear Admin,<br><br>";
$mail_body.=" You have received a new message<br><br>";
$mail_body.="Name : ".$name."<br>";
$mail_body.="dob : ".$dob."<br>";
$mail_body.="mobile : ".$mobile."<br>";
$mail_body.="qualification : ".$qualification."<br>";
$mail_body.="<br><br>Thank you<br>";
$mail_body.="message<br>";


$mail_to = "abc@gmail.com";
$mail_from = "abcd@gmail.com";
$headers = "From: ".$mail_from."\n";   
$headers .= "Reply-To: ".$mail_to."\n"; // reply to
$headers .= "X-Mailer: PHP/" . phpversion()."\n"; // mailer
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
$mail_status_admin = mail($mail_to,$subject,$mail_body,$headers);

/*$email->set_newline("\r\n");
	$email->from('abc@gmail.com'); // change it to yours
	$email->to('abcd');// change it to yours
	$email->subject($subject);
	// $email->attach('ss/email-2.1.0.zip');
	$email->message($mail_body);
	//$email->attach('email-2.1.0.zip');*/
	if($mail_status_admin)	
{
   $response=array('status'=>'success','message'=>'<p style="color:green;font-size:20px;align:center;"><b>Thank you mail has sent successfully<br> We will contact you soon..</b></p>');
}
else
    $response=array('status'=>'fails','message'=>'<p style="color:red;">Message could not be sent.</p>');
echo json_encode($response);
//die();
echo "<p>Thank you for registering!</p>";
?>
