<?php
session_start();
require("PHPMailer_5.2.4/class.phpmailer.php");
$captchaResult = $_POST["captchaResult"];
$firstNumber = $_POST["firstNumber"];
$secondNumber = $_POST["secondNumber"];
$checkTotal = $firstNumber + $secondNumber;
if($captchaResult == $checkTotal)
{
$str="0123456789";
$str=substr($str,0,5);
$str=str_shuffle($str);
$title=$_POST['title'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$dept=$_POST['dept'];
$des=$_POST['des'];
$spec=$_POST['spec'];
$univ=$_POST['univ'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$state=$_POST['state'];
$country=$_POST['country'];
$register=$_POST['register'];
$attachment=$_FILES['attachment']['name'];
	$atachmenttemp=$_FILES['attachment']['tmp_name'];

 $body="Join us an editorial board member :"." editorial board member".$str."<br>
   
    

    Name :".$title." ".$fname."".$lname."<br>
   Email :".$email."<br>
   Gender :".$gender."<br>
    Mobile:".$mobile."<br>
   Department :".$dept."<br>
   Designation :".$des."<br>
   Specialization :".$spec."<br>
  
    Country :".$country."<br>
    Department :".$dept."<br>
    Specialization :".$spec."<br>
   University/Institution/Organization :".$univ."<br>
    State/Provinceh :".$state."<br>
	Address :".$address."<br>
    State/Provinceh :".$state."<br>
    
    Register :".$register;
	
    $message="Dear Professor,

Greetings from IFERP!!

Thank you for showing your interest for being an editor/reviewer for the “Transaction on Biomedical Engineering Applications and Healthcare” journal.

Our editorial board will contact you regarding the same at the earliest.

 

Thanks & Regards

Editorial Board,

TBEAH.";
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
	$mail->AddAttachment($atachmenttemp,$attachment);
	$mail->Subject="Join Us an Editorial Board Member/Reviewer form ";
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