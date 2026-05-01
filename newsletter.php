<?php
session_start();
require("PHPMailer_5.2.4/class.phpmailer.php");
if(isset($_POST['submit']))
{
	
	

	$email=$_POST['email'];
	
	
	
	$body="Email :".$email;
   
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
	$mail->Username="editor@technoarete.org";
		$mail->Password="journaltech@_123";
	$mail->SMTPSecure="ssl";
	
	$mail->SetFrom("editor@technoarete.org",$email);
	$mail->AddAddress("editor@technoarete.org");
	$mail->IsHTML(true);
	$mail->Subject="Contact Us";
	$mail->Body=$body;
	
	if($mail->Send())
	{
		$mail->ClearAllRecipients();
		$mail->ClearAttachments();
		$mail->SetFrom("editor@technoarete.org");
		$mail->AddAddress($email);
		$mail->IsHTML(true);
		$mail->Body=$message;
		$mail->Send();

		
	}
	echo"<script>alert('Successfully Submitted');window.location.href='https://technoaretepublication.org/accounting-and-finance/';</script>";
	
}
catch(Exception $e)
{
	
	echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	
}

}
?>