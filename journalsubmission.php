<?php
session_start();
require("PHPMailer_5.2.4/class.phpmailer.php");
if(isset($_POST['submit']))
{
	if(($_SESSION['code'] != $_POST['captcha']))
	{
		
	 echo ("<script LANGUAGE='JavaScript'> window.alert('Captcha Not Matched'); window.history.go(-1);</script>");	
	
		
	}else{
	
	$str="0123456789";
	$code = substr(str_shuffle($str),0,6);
	$currentDateTime = date('dm');
	$title=$_POST['title'];
	$aname=$_POST['first'];
	$coname=$_POST['last'];
	$email=$_POST['email'];
	$phone=$_POST['number'];
	$conf=$_POST['univer'];
	$$country=$_POST['country'];
	$ins=$_POST['message'];
	$abstract=$_POST['abstract'];
	
	$attchment_name = $_FILES['file']['name'];
	$attchment_tmp =  $_FILES['file']['tmp_name'];
	$body="Abstraction Id : "."<b>TJAFJOURNAL_".$currentDateTime.".".$code."</b><br>Title of Manuscript :".$aname."<br>Author First Name :".$aname."<br>Author Last Name :".$coname."<br>Enter Your Email :".$email."<br>Enter Your Phone Number :".$phone."<br>Country :".$country."<br>University/Institute/Organization :".$conf."<br>Additional Authors if any :".$ins."<br>Abstract :".$abstract;
	
	$rmessage = "Dear <b>".$aname."</b>,<br>, Thanks for submitting your article.We have received your article and sent the same for peer-review.\n
Your paper ID is: <b>TJAFJOURNAL_".$currentDateTime.".".$code."</b> and here after the same shall be used for all further communications regarding your article. You will get notified about the status of your article with 24-48 hours.\n
Thanks for your patience.\n Regards,\n Team TJAF.\n";
$mail=new PHPMailer(true);
try
{
	$mail->SMTPDebug=1;
	$mail->SMTPAuth=true; 
	$mail->IsSMTP();
	
	$mail->Host="smtp.gmail.com";
	$mail->Port=465;
	$mail->Username="editor@ijanp.com";
	$mail->Password="galaxy_star@123";
	$mail->SMTPSecure="ssl";
	
	$mail->SetFrom("editor@ijanp.com",$name);
	$mail->addAddress("editor@ijanp.com");
	$mail->IsHTML(true);
	$mail->addAttachment($attchment_tmp,$attchment_name);
	$mail->Subject="Manuscript Received";
	$mail->Body=$body;
	
	if($mail->Send())
	{
		$mail->ClearAttachments();
		$mail->ClearAllRecipients();
		$mail->SetFrom("editor@ijanp.com", 'TJAF JOURNAL');
		$mail->AddAddress($email);
		$mail->IsHTML(true);
		$mail->Body=$rmessage;
		$mail->Send();
		
	}
	echo"<script>alert('Successfully Submitted');window.location.href='https://ijanp.com/online-paper-submission.php';</script>";
}
catch(Exception $e)
{
	echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

	
}	
}



}
?>