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
$add=$_POST['add'];

$univ=$_POST['univ'];
$mobile=$_POST['mobile'];
$abstract=$_POST['abstract'];

$country=$_POST['country'];

$attachment=$_FILES['attachment']['name'];
	$atachmenttemp=$_FILES['attachment']['tmp_name'];
$name=$fname." ".$lname;
 $body="Join us an editorial board member :"." editorial board member".$str."<br>
   
    
Title of Manuscript :".$title."<br>
    Name : ".$name."<br>
   Email :".$email."<br>
  
    Mobile:".$mobile."<br>
   
  
    Country :".$country."<br>
    Additional Authors if any :".$add."<br>
   
   University/Institution/Organization :".$univ."<br>
   
	
    
    Abstract :".$abstract;
	
    $message="Dear Researcher,

Greetings from TBEAH!!

Thank you for submitting your research article for the “Transaction on Biomedical Engineering Applications and Healthcare” journal. Our editorial board will contact you at the earliest.

 ";
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
	$mail->Subject="Online Paper submission ";
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
	
	
	echo"<script>alert('Successfully Submitted');window.location.href='http://tbeah.org/online-paper-submission.php';</script>";
}
catch(Exception $e)
{
	echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		
}

}else{


	echo ("<script>alert('captcha not matched'); window.history.go(-1);</script>");	
}
?>