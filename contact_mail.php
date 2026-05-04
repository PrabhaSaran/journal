<?php
session_start();
require("PHPMailer_5.2.4/class.phpmailer.php");
$captchaResult = $_POST["captchaResult"];
$firstNumber = $_POST["firstNumber"];
$secondNumber = $_POST["secondNumber"];
$checkTotal = $firstNumber + $secondNumber;
if($captchaResult == $checkTotal)
{

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

$subject=$_POST['subject'];
$cms=$_POST['cms'];

$body="
 Name :".$fname."".$lname."<br>
	
   Email :".$email."<br>
   
	
	
	subject :".$subject."<br>
    comment :".$cms;
    $message="Dear Researcher,

Greetings from TBEAH!!

Thank for showing your interest in TBEAH journal. Our Scientific Relationship Executive will contact you at the earliest.";
	$mail=new PHPMailer(true);
	
try
{
	$mail->SMTPDebug=1;
	$mail->SMTPAuth=true;
	//$mail->IsSMTP();
	
	$mail->Host="smtp.gmail.com";
	$mail->Port=465;
	$mail->Username="editor@tbeah.org";
	$mail->Password="5822Glogxy_world@7722";
	$mail->SMTPSecure="ssl";
	
	$mail->SetFrom("editor@tbeah.org",$name);
	$mail->addAddress("editor@tbeah.org");
    $mail->IsHTML(true);
	$mail->Subject="Contact Recieved-TBEAH ";
    $mail->Body=$body;
	if($mail->Send())
	{
		$mail->ClearAllRecipients();
		$mail->SetFrom("editor@tbeah.org", ' TBEAH');
		$mail->AddAddress($email);
		$mail->IsHTML(true);
		$mail->Body=$message;
		$mail->Send();
		
	}
	
	
	echo"<script>alert('Successfully Submitted');window.location.href='http://tbeah.org/contact-us.php';</script>";
}
catch(Exception $e)
{
	echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		
}

}else{


	echo ("<script>alert('captcha not matched'); window.history.go(-1);</script>");	
}
?>