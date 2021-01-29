function smtp_mailer($to,$subject, $msg){
	require_once("smtp/PHPMailerAutoload.php");
	$mail = new PHPMailer(true); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth=true;
	$mail->SMTPSecure = "tls"; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->Username = "nairakhila44@gmail.com";
	$mail->Password = "Akhila123";
	$mail->SetFrom("nairakhila44@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject = "Your Verification code is:";
	$mail->Body = $msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
	'verify_peer'=>false,
	'verify_peer_name'=>false,
	'allow_self_signed'=>false,
	));
	if(!$mail->send()){
	echo "Mailer Error: " . $mail->ErrorInfo;
	}else{
		echo "Message has been sent";
	}
}