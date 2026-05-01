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
	$title=$_POST['title'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$dept=$_POST['dept'];
	$des=$_POST['des'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	
	$univ=$_POST['univ'];
	$register=$_POST['register'];
	
	
	$attchment_name = $_FILES['file']['name'];
	$attchment_tmp =  $_FILES['file']['tmp_name'];
	$body=" Author  Name : ".$title."".$fname."".$lname."<br>Enter Your Email :".$email."<br>Enter Your Phone Number :".$mobile."<br>Country :".$country."<br><br>Gender :".$gender."<br>Department :".$dept."<br>Designation :".$des."
    <br>Specialization :".$spec."<br>
    <br>Address :".$address."<br>
    <br>City :".$state."<br>
    University/Institution/Organization :".$univ."<br>Register as :".$register;
	
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
	$mail->Subject="JOIN US AN EDITORIAL BOARD MEMBER/REVIEWER";
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
	echo"<script>alert('Successfully Submitted');window.location.href='https://ijanp.com/join-editorial-board-member.php';</script>";
	
}
catch(Exception $e)
{
	
	echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	
}


	
	
	
}
}
?>