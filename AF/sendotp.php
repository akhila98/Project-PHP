<?php

session_start();
include('db.php');
$phone=$_POST['phone'];
if((isset($_POST['phone']))&& (strlen($phone)!=10))
{
    echo "plz enter the valid mobile number";
}

else
{
	/*$res=mysqli_query($db,"Select s_contactno from service_provider where s_contactno='$phone'");
	$count=mysqli_num_rows($res);
	if($count>0){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert(' Registered no')
    
    </SCRIPT>");*/
		$otp = rand(1000,9999);
		//echo "otp has been send to ".$phone." successfully". $otp;
	 // target number; includes ISD
	$api_key = 'ef1acbd0-0e45-11eb-9fa5-0200cd936042'; // API Key
	
  
	//$req = "https://2factor.in/API/V1/".$api_key."/".$msg./".$phone."/".$otp;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://2factor.in/API/V1/".$api_key."/SMS/".$phone."/".$otp,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
}

/*else{
	echo  ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert(' Not Registered no')
    
    </SCRIPT>");
}
}*/
?>