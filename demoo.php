<?php
	//include("email_test.php");	
//$myemail  = 'justin2652@gmail.com' . ', '; 
//$myemail .= 'dennis@mandgworld.com';
//$myemail="kabeer@tauruswebsolutions.com";

	//$email = new email();
	
// $myemail="dhanyakvtaurus@gmail.com";
$name = $_POST['name'];

// $email_address ="helpline.mandg@gmail.com";
// $email=$_POST['email'];
 $dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$qualification = $_POST['qualification'];
 $subject = "Enquiry for Study Abroad Kochi Landing Page";
 $mail_body="Dear Admin,<br><br>";
$mail_body.=" You have received a new message from Aide Overseas Kochi Landing Page<br><br>";
$mail_body.="Name : ".$name."<br>";
$mail_body.="dob : ".$dob."<br>";
$mail_body.="mobile : ".$mobile."<br>";
$mail_body.="qualification : ".$qualification."<br>";
$mail_body.="<br><br>Thank you<br>";
$mail_body.="https://www.aideoverseas.com/landing/<br>";


//$mail_to = "kabeerahamed47@gmail.com";
$mail_to = "chandana.taurus@gmail.com";
$mail_from = "info@aideoverseas.com";
$headers = "From: ".$mail_from."\n";   
$headers .= "Reply-To: ".$mail_to."\n"; // reply to
$headers .= "X-Mailer: PHP/" . phpversion()."\n"; // mailer
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
$mail_status_admin = mail($mail_to,$subject,$mail_body,$headers);

/*$email->set_newline("\r\n");
	$email->from('helpline.mandg@gmail.com','mandgworld.com-Kochi'); // change it to yours
	$email->to('kabeer@tauruswebsolutions.com,justin2652@gmail.com');// change it to yours
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
