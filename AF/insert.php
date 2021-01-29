<?php


include ("db.php");  
 
if (isset($_POST["occupation"]))
{  

//$check=mysqli_num_rows(mysqli_query($db,"Select * from service_provider where s_emailid='".$_POST['email']."'"));

//if($check>0)
//{
//	echo ("window.alert('Email id already exists')");
//}
//else{

$query="INSERT INTO service_provider(s_name,s_emailid,s_contactno,s_homeaddress,s_workaddress,s_dob,s_gstno,s_licenseno,s_occupation) VALUES ('".$_POST['name']."',
'".$_POST['email']."',
'".$_POST['phone']."',
'".$_POST['homeaddress']."',
'".$_POST['officeaddress']."',
'".$_POST['dob']."',
'".$_POST['gstno']."',
'".$_POST['licenseno']."',

'".$_POST["occupation"]."')";  
$result=mysqli_query($db,$query);
if($result)
{
echo ("Done");
	
}
else
{
	echo "Not done";
}
}

?>