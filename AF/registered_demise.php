<?php
session_start();
	  include("db.php");
	  if(!isset($_SESSION['name']))
			{
                header("location: regi.php");
			}
			else{
         $name=$_SESSION['name'];
		 $query=mysqli_query($db,"Select * from regi where fname='$name' ");
		 $row=mysqli_fetch_array($query);//fetches the row n stores in variable
		 //print_r($row);
		/*echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Welcome ".$_SESSION['name']." .Register for required Services!! ');
	window.location.href='demisedregi.php';
   
    </SCRIPT>");*/
		 $id=$row["regiid"];//id is of user table
	  //window.alert ($_SESSION['name']=$name);
			}
if(isset($_POST['submit'])){
	
	$status="Pending";
	
	$location=$_POST['location'];
	$date=$_POST['date'];
	$service=$_POST['chk'];

$query="INSERT INTO order1(r_id,location,date,service,status) VALUES ('$id','$location','$date','$service','$status' )";

$result=mysqli_query($db,$query);
if($result)
{
 echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Successfully Submitted...');
	window.location.href='corders.php';
    
    </SCRIPT>");
	
}
else
{
	 echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to submit');

    
    </SCRIPT>");
}
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Afterlife.com</title>
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
	margin-left:50px;
}
.table-wrapper {
    width: 950px;
    background: #fff;
	margin: 0 auto;
    padding: 20px 30px 5px;
    box-shadow: 0 0 1px 0 rgba(0,0,0,.25);
	
}
.table-title .btn-group {
    float: center;
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
<body>


 <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand" style="margin-left:10px;font-family: 'PAcifico' ;font-size:40px;"><b>AfterLife</b></a>
    

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav" style="margin-left:250px;font-family: 'PAcifico';font-size:26px; ">
            <a href="regi1.php" class="nav-item nav-link active">Home</a>
           &nbsp;&nbsp;<a href="orders.php" class="nav-item nav-link">Bookings</a>
            &nbsp;&nbsp;<a href="review.php" class="nav-item nav-link">Reviews</a>
			 &nbsp;&nbsp;<a href=" " class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal1">Login</a>
          
        </div>
        
    </div>
</nav>
<br>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6"><h2>Details: <b>Select Services Required</b></h2></div>
                    
                </div>
            </div>
    <table class="table table-striped table-hover" >
                <thead>
                    <tr>
                    <td>Name of Registered</td></tr>
                       <!-- <tr><td>Name of Demised Person</td></tr>-->
						
                    
                </thead>
                <tbody>
			<?php

$i=1;
$query="Select fname from regi where regiid='$id'";
//"SELECT regi.fname, user.Demisedname FROM regi CROSS JOIN user WHERE regi.regiid = 4";
$res=mysqli_query($db,$query);
$count=mysqli_num_rows($res);
if($count>0)
{
	while($row=mysqli_fetch_array($res))
	{
		?>

					
                       
						<td><?php echo $row['fname'];?></td>
						</tr>
                      <!--  <td>Name of Demised Person</td><td><a href="#"><?php echo $row['Demisedname'];?></a></td>-->
<tr>
                       <br><br>
						<td><form method="post" >
						<div class="form-label-group">
						<label for="inputText" style="font-size:15px;color:black;">Location for Required Services</label>
                <input type="name" id="location"  name="location" class="form-control"  required />
                
              </div>
			  
			  <div class="form-label-group">
			   <label for="dob"  style="font-size:15px;color:black;">Date to avail Service</label>
                <input type="date" id="date" name="date" class="form-control" placeholder="Date of Birth" required />
               
				
              </div>
			   <label for="dob"  style="font-size:15px;color:black;"><b>Select Services</b></label><br/>
				<input type="radio"  name="chk" value="Catering">Catering Service<br />  
				<input type="radio"  name="chk" value="Ambulance">Ambulance Service<br />  
				<input type="radio" name="chk" value="Doctor">Doctor<br />  
				<input type="radio"  name="chk" value="FreezerBox">FreezerBox Service<br />  
				<input type="radio"  name="chk" value="Prayer meet">Prayer meet Service<br />  
					<br> 
			  </td>
						</tr>
						<tr>
						<td>
						<button type="submit" class="btn btn-primary" name="submit" >Submit</button></td>
						
						
						
                  
                    </tr>
<?php $i++;}}
else{
	echo "No record Found!";
}?>
</form>
      </tbody>
</body>
</html>
