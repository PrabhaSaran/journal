<?php
session_start();
require("PHPMailer_5.2.4/class.phpmailer.php");
if(isset($_POST['submit']))
{
	
		if(($_SESSION['code'] != $_POST['captcha']))
	{
		
	 echo ("<script>alert('captcha not matched'); window.history.go(-1);</script>");	
	 	}
		else
		{	
	$name=$_POST['author'];
	$email=$_POST['mail'];
	$phone=$_POST['number'];
	$desination=$_POST['comment'];
	
	
	$body="Name :".$name."
   Email :".$email."<br>
   Phone Number :".$phone."<br>
   Comment :".$desination;
	
	
	
	$message = "Dear Researcher, Thanks for Contacting Us.\n
			Our Coordinator will Contact you to 24-48 hours.\n Regards,\n Team TJAF.\n";

$mail=new PHPMailer(true);
try
{
	$mail->SMTPAuth=true;
	$mail->SMTPDebug=1;
	$mail->IsSMTP();
	
	$mail->Host="smtp.gmail.com";
	$mail->Port=465;
	$mail->Username="editor@ijanp.com";
	$mail->Password="galaxy_star@123";
	$mail->SMTPSecure="ssl";
	
	$mail->SetFrom("editor@ijanp.com",$name);
	$mail->AddAddress("editor@ijanp.com");
	$mail->IsHTML(true);
	$mail->Subject="Contact Us";
	$mail->Body=$body;
	
	if($mail->Send())
	{
		$mail->ClearAllRecipients();
		$mail->ClearAttachments();
		$mail->SetFrom("editor@ijanp.com");
		$mail->AddAddress($email);
		$mail->IsHTML(true);
		$mail->Body=$message;
		$mail->Send();

		
	}
	echo"<script>alert('Successfully Submitted');window.location.href='https://ijanp.com/contact.php';</script>";
	
}
catch(Exception $e)
{
	
	echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	
}


	
	
	
}
}
?>