
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
	  
	  if (isset($_POST["Submit"]))
      {
       
          $name=$_POST['name'];
          $dob=$_POST['dob'];
          $dod=$_POST['cdob'];
          $cod=$_POST['causeofdeath'];
          $md=$_POST['medical history'];
          $gender=$_POST['gender'];
		  $addr=$_POST['location'];
		  $addr1=$_POST['location1'];
		  $occupation=$_POST['occupation'];
		 $religion=$_POST['religion'];
		  $contact=$_POST['phone'];
		  
          
         
            $sql="INSERT INTO user(Demisedname,Dob,Dod,Cause_of_death,Medical_history,Gender,Address,Location_of_death,Occupation,Religion,Contact_number) 
			VALUES('$name','$dob','$dod','$cod','$md','$gender','$addr','$addr1','$occuppation','$religion','$contact')";
            $result=mysqli_query($db,$sql);
            if($result){
              echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Successfully Registered...Now Enroll for Services')
	window.location.href='registered_demise.php';
    
    </SCRIPT>");

            }
            else{
              echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to register!!!') </SCRIPT>");
            }
	  }
			?>
            
       


 





<html>  
<head>  
<title> Afterlife.com</title>  

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link href='https://fonts.googleapis.com/css?family=Pacifico:400,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
  
  

	<style>
	
 
body {
	width:100%;
	height: 100%;


	font-family: 'Josefin Sans', sans-serif;
	-webkit-font-smoothing: antialiased;
	font-smoothing: antialiased;
	
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}

.card-signin {
 width:150%;
 height:150%
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 2.1rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
  height:150%
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: 50px;
  border-radius: 2rem;
  
}
.form-label-group file {
  height: 40px;
  border-radius: 2rem;
}
.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;

  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

 
</style>

<body >
 

 <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand" style="margin-left:10px;font-family: 'PAcifico' ;font-size:40px;"><b>AfterLife</b></a>
    

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav" style="margin-left:150px;font-family: 'PAcifico';font-size:26px; ">
            <a href="regi1.php" class="nav-item nav-link active">Home</a>
           &nbsp;&nbsp;<a href="ourservices.php" class="nav-item nav-link">Our Services</a>
		   &nbsp;&nbsp;<a href="contactus.php" class="nav-item nav-link">Contact Us</a>
            &nbsp;&nbsp;<a href="review.php" class="nav-item nav-link">Reviews</a>
			 &nbsp;&nbsp;<a href="corders.php" class="nav-item nav-link">Bookings</a>
			 &nbsp;&nbsp;<a href="Logout.php " class="nav-item nav-link" >Logout</a>
           
        </div>
        
    </div>
</nav>
<br>

<img src="img1.gif"  style="width:100%;  height:550px ;">  

<div class="carousel-caption" style="margin-left:20px;" >
              <h1 style="font-family: 'Pacifico';"><b>We are there for you....<br />
                         when you need us....</b></h1>
						 <br><br>
			<h4 style="margin-left:60px;font-family: 'Dancing Script';"><b>Death brings pain that time can only heal.<br />
                        In this difficult phase of yours we help you ensure <br/>
						that the departed soul rests in peace with the rites and honours.</b></h4>
						<br>
						<input type="button" value="Register For Services" class="btn site-btn1 px-4 py-3 mr-4 btn-light" data-toggle="modal" data-target="#exampleModal">
            </div>

          </img>
					   
					
					<br><br>  
					   
					   <h1 style=" font-family: 'Pacifico' ; margin-left:200px;">Main Moto</h1>
					   <br>
					   
                 <img src="feature.jpg" width="80%" height="70%"style="margin-left:10%"></img>

<br><br>
			   
					   <h1 style=" font-family: 'Pacifico' ; margin-left:200px;">Our Process</h1>
					   <br>
		<img src="process.jpg" width="90%" height="70%"style="margin-left:10%;" ></img>
		
		<br><br>
		  <h1 style=" font-family: 'Pacifico' ; margin-left:200px;">Our Service Area</h1>
		
		
		<div class="map" style="margin-left:10%;">
		<img src="map.jpg" width="40%" height="50%" align="left" HSPACE="50" VSPACE="50"/>&nbsp;&nbsp;
		
		<p style="font-size:20px ;font-family: 'Pacifico' ;">
		<br/><br/>We are the state’s leading provider of cremation services currently serving<b> Mumbai,Pune,Thane,Nashik </b>.
<br/><br/>
AfterLife believes that Direct Cremation should be dignified, simple and transparent.<br/><br/>
Our dedicated, local care teams are here for you 24 hours a day, 7 days a week
</p>
</img>
		</div>
					<br><br><br>
					<div class="copyright" style="background-color:rgb(192,192,192); height:80px ">
					 <p style="font-family: 'Josefin Sans', sans-serif;font-size:20px;margin-left:20%;"><br/>© 2020 Copyright:AFTERLIFE,INC.ALL RIGHTS RESERVED</p>
				
					
					</div>
					
					
					

  
  
		
		
		
		
	

  
  
  
  
  <!-- Modal registration--->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background: #007bff;background: linear-gradient(to right, #0062E6, #33AEFF);height:150%;">
      <div class="modal-header text-center">
       
     
      <div class="container" >
    <div class="row">

        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center" style="font-family: 'Josefin Sans', sans-serif;"><b>Register</b>
			<p class="card-title text-center" style="font-family: 'Josefin Sans', sans-serif;font-size:20px"><b>All fields are mandatory*.</b><p>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button></h5>
       <br><br>
           
           <form method="post">
			<div class="form-label-group">
                <input type="name" id="name"  name="name" class="form-control"  required />
                <label for="inputText" style="font-size:15px;color:black;">Name of the Demised</label>
              </div>
			  <div class="form-label-group">
                <input type="date" id="dob" name="dob" class="form-control" placeholder="Date of Birth" required />
                <label for="dob"  style="font-size:15px;color:black;">Date of Birth of Demised</label>
				
              </div>
			   <div class="form-label-group">
                <input type="date" id="cdob" name="cdob" class="form-control" placeholder="Date of Birth" required />
                <label for="dob"  style="font-size:15px;color:black;">Date of Death of Demised</label>
			
              </div>
			  <div class="form-label-group">
                <input type="text" id="causeofdeath"  name="causeofdeath" class="form-control"  required />
                <label for="inputText" style="font-size:15px;color:black;">Cause of Death</label>
              </div>
			   <div class="form-label-group">
                 <textarea type="text" id="medicalhistory" name="medicalhistory" class="md-textarea form-control" rows="3"  ></textarea>
                <label for="inputaddress" style="font-size:15px;color:black;">Please describe medical history of Demised</label>
				
              </div>
			  
			   <div class="form-label-group">
			   <label for="male">Select gender</label><br/>
			<input type="radio" id="male" name="gender" value="male">Male&nbsp;&nbsp;&nbsp;<input type="radio" id="female" name="gender" value="female">Female&nbsp;&nbsp;<input type="radio" id="other" name="gender" value="other">Other
			
				</div>
			  <div class="form-label-group">
                 <textarea type="text" id="location" name="location" class="md-textarea form-control" rows="5" placeholder="Please mention address of Demised" ></textarea>
                <label for="inputaddress"></label>
				
              </div>
				
				<div class="form-label-group">
                 <textarea type="text" id="location1" name="location1" class="md-textarea form-control" rows="5" placeholder="Please mention the address of the location where the demise occured:" ></textarea>
                <label for="inputaddress"></label>
				
              </div>
			  <div class="form-label-group">
                <input type="name" id="occupation"  name="occupation" class="form-control"  required />
                <label for="inputaddress" style="font-size:15px;color:black;">Please mention occupation of the Demised</label>
              </div>
				
				 <div class="form-label-group">
				<label for="Religion">Please mention the religion of the demised</label>
				<br/>
				<select id="religion" name="religion">
					<option value="HINDU">HINDU</option><br/>
					<option value="CHRISTIAN">CHRISTIAN</option><br/>
					<option value="MUSLIM">MUSLIM</option><br/>
					<option value="JAIN">JAIN</option>
					</select>
              <br><br>
			  <div class="form-label-group">
                <input type="phonenumber" id="phone" name="phone" class="form-control"   required />
                <label for="inputEmail"style="font-size:15px;color:black;">Any Contact No</label>
				<span id="message" class="message"></span>
              </div>
			 
			  
				
		
			   
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="Submit" id="Submit"  >Register Demised Details</button>
			 <form>
   </div>
        </div>
      </div>
       </div>
    </div>
  </div>
</div>
</div>
					
           


  </body>
</html>




 