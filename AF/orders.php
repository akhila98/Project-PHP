<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Orders</title>
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link href='https://fonts.googleapis.com/css?family=Pacifico:400,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
   
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    width: 950px;
    background: #fff;
	margin: 0 auto;
    padding: 20px 30px 5px;
    box-shadow: 0 0 1px 0 rgba(0,0,0,.25);
}
.table-title .btn-group {
    float: right;
}
.table-title .btn {
    min-width: 50px;
    border-radius: 2px;
    border: none;
    padding: 6px 12px;
    font-size: 95%;
    outline: none !important;
    height: 30px;
}
.table-title {
    min-width: 100%;
    border-bottom: 1px solid #e9e9e9;
    padding-bottom: 15px;
    margin-bottom: 5px;
    background: rgb(0, 50, 74);
    margin: -20px -31px 10px;
    padding: 15px 30px;
    color: #fff;
}
.table-title h2 {
    margin: 2px 0 0;
    font-size: 24px;
}
table.table {
    min-width: 100%;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 40px;
}
table.table tr th:last-child {
    width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table td a {
    color: #2196f3;
}
table.table td .btn.manage {
    padding: 2px 10px;
    background: #37BC9B;
    color: #fff;
    border-radius: 2px;
}
table.table td .btn.manage:hover {
    background: #2e9c81;		
}
</style>
<script>

</script>
</head>
<body>

<?php
include('db.php');
if(isset($_POST['accept']))
{
	$status= "Approved";
	$comment=$_POST['comment'];
	$id=$_POST['id'];
	$email=$_POST['email'];
	$name=$_POST['name'];
	
	
	
	$query="Update order1 set status='$status' ,comment='$comment' where r_id='$id'";
	$res=mysqli_query($db,$query);
	if($res){
	("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Accepted')    </SCRIPT>");
	//echo $email;
	
	
	$html="<table><tr><td>Customer Name:</td><td>$name</td></tr>
	<tr><td>Status:</td><td>$status</td></tr>
	<tr><td>Comment:</td><td>$comment</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Post=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="nairakhila44@gmail.com";
	$mail->Password="Akhila123";
	$mail->SetFrom("nairakhila44@gmail.com");
	$mail->addAddress($email);
	$mail->IsHTML(true);
	$mail->Subject="Your Bookings are Accepted by the Service Provider.Please Proceed For Payment";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
	'verify_peer'=>false,
	'verify_peer_name'=>false,
	'allow_self_signed'=>false
	));
	if($mail->send()){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Status Updated.Email Sent!!')    </SCRIPT>");
}
else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Error occured!!')    </SCRIPT>");
}

	}
else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Click button')    </SCRIPT>");
}

}


if(isset($_POST['reject'])){
	
	$status= "Rejected";
	$comment=$_POST['comment'];
	$id=$_POST['id'];
	$query="Update order1 set status='$status'  ,comment='$comment' where r_id='$id'";
$res=mysqli_query($db,$query);
if($res){
	echo"Rejected";
}
else{
	echo"Row not updated";
}


}

?>

 <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand" style="margin-left:10px;font-family: 'PAcifico' ;font-size:40px;"><b>AfterLife</b></a>
    

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav" style="margin-left:250px;font-family: 'PAcifico';font-size:26px; ">
            <a href="index.php" class="nav-item nav-link active">Home</a>
           &nbsp;&nbsp;<a href="orders.php" class="nav-item nav-link">Bookings</a>
            &nbsp;&nbsp;<a href="review.php" class="nav-item nav-link">Reviews</a>
			 &nbsp;&nbsp;<a href="index.php" class="nav-item nav-link" >Logout</a>
          
        </div>
        
    </div>
</nav>
<br>
 <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6"><h2>Manage <b>Domains</b></h2></div>
                    <div class="col-sm-6">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-danger active">
								 <a href="orders.php" target="_parent" style="color:white">  <input type="radio" name="status" value="all" checked="checked">Pending</a>
                            </label>
                            <label class="btn btn-warning">
                             <a href="active.php" target="_parent" style="color:White">   <input type="radio" name="status" value="active"> Active</a>
                            </label>
                            
                            <label class="btn btn-success">
                              <a href="expired.php" target="_parent" style="color:Yellow">  <input type="radio" name="status" value="expired"> Expired</a>
                            </label>							
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      
                        <th>Registered Customer</th>
                        <th>Service required</th>
						<th>Required on</th>
                        <th>Status</th>
                        <th>Location</th>
						<th>Comment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

<?php

$i=1;
$query="Select t1.service,t1.date,t1.status,t1.location,t2.fname,t1.r_id ,t2.email from order1 t1 join regi t2 on t1.r_id=t2.regiid where status='Pending' ";
$res=mysqli_query($db,$query);
$count=mysqli_num_rows($res);
if($count>0)
{
	while($row=mysqli_fetch_array($res))
	{
		?>

						
                       
						<td><?php echo $row['fname'];?></td>
						
                        <td><a href="#"><?php echo $row['service'];?></a></td>
                        <td><?php echo $row['date'];?></td>
                        
                        <td style="color:green"><?php echo $row['status'];?></td>
						<td><?php echo $row['location'];?></td>
						<td><form method="post" action="">
						<textarea name="comment" ></textarea></td>
						<input type="hidden" name="id" value="<?php echo $row['r_id'];?>">
						<input type="hidden" name="email" value="<?php echo $row['email'];?>">
						<input type="hidden" name="name" value="<?php echo $row['fname'];?>">
						<td>
						<button type="submit" class="btn btn-primary" name="accept">Accept</button></td>
						<td><button type="submit"  class="btn btn-primary" name="reject">Reject</button></form></td>
						
						
               
                    </tr>
<?php $i++;}}
else{
	echo "No record Found!";
}?>
      </tbody>
            </table>
        </div> 
    </div>   
</div> 

</body>
</html>                                		