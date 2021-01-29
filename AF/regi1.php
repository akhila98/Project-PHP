  
<?php
session_start();
include("db.php");

   
   if(isset($_POST["submit"])) {
      // username and password sent from form 
      
      
      $name = $_POST['name'];
      $mobile =$_POST['phone']; 
      
      $sql = "select regiid from regi  where fname ='$name' and contact='$mobile'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['name'] = $name;
		
		 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Login Successfull.Welcome ".$_SESSION['name']." ');
	window.location.href='demisedregi.php';
   
    </SCRIPT>");
		 
		
		
		  
      }else {
         echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Oops!!Invalid credentials.Try again!')
   
    </SCRIPT>");
		// header("location: loginn.php");
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
  height: 40px;
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
        <div class="navbar-nav" style="margin-left:250px;font-family: 'PAcifico';font-size:26px; ">
            <a href="index.php" class="nav-item nav-link active">Home</a>
           &nbsp;&nbsp;<a href="ourservices.php" class="nav-item nav-link">Our Services</a>
		   &nbsp;&nbsp;<a href="contactus.php" class="nav-item nav-link">Contact Us</a>
            &nbsp;&nbsp;<a href="review.php" class="nav-item nav-link">Reviews</a>
			 &nbsp;&nbsp;<a href=" " class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal1">Login</a>
           
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
						<input type="button" value="Register For Services" class="btn site-btn1 px-4 py-3 mr-4 btn-light" disabled>
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
					
					
					<!-- Modal --->
					<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="background: #007bff;background: linear-gradient(to right, #0062E6, #33AEFF); ">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px ;font-family: 'Pacifico' ;">Login/Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
					<div class="modal-footer-center" style="height:90px">
					<h5 style="font-size:20px ;font-family: 'Pacifico' ;">Login if registered</h5>
					
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal2">LOGIN</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">REGISTRATION</button></center>
      </div>
	 
		</div>			
  </div>
  </div>
  
  <!-- Modal login--->
  
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="background: #007bff;background: linear-gradient(to right, #0062E6, #33AEFF); " >
      <div class="modal-header text-center">
         <div class="container" >
    <div class="row">

        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center" style="font-size:40px ;font-family: 'Pacifico' ;"><b>Login</b><button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></h5>
            <form class="form-signin" method="post">
			 <div class="form-label-group">
                <input type="name" name="name" class="form-control" placeholder="Enter Name" required >
                <label for="inputEmail">Name</label>
              </div>
              <div class="form-label-group">
                <input type="password" name="phone" class="form-control"  placeholder="Mobile Number" required >
                <label for="inputpassword">Enter Mobile Number</label>
              </div>
				
               
			  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"  name="submit">LOGIN</button>
			  <!--<span id="otp2"   class="btn btn-lg btn-primary btn-block text-uppercase" ></span>-->
			  <br>
              <hr class="my-4">
              <a href="www.gmail.com" ><button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button></a>
              <a href="www.facebook.com" ><button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button></a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
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
            <p class="card-title text-center" style="font-size:40px ;font-family: 'Pacifico' ;"><b>Register</b></p>
			<p class="card-title text-center" style="font-family: 'Josefin Sans', sans-serif;font-size:15px"><b>All fields are mandatory*.</b><p>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
       <br>
           
           <form method="post">
			<div class="form-label-group">
                <input type="name" id="name"  name="name" class="form-control"  required />
                <label for="inputText" style="font-size:15px;color:black;">FirstName</label>
              </div>
			  <div class="form-label-group">
                <input type="name" id="lname"  name="lname" class="form-control"  required />
                <label for="inputText" style="font-size:15px;color:black;">LastName</label>
              </div>
			  <div class="form-label-group">
                 <input type="text" id="rd" name="rd" class="md-textarea form-control" rows="3" required />
                <label for="inputText" style="font-size:15px;color:black;">Relationship with demised</label>
				<span id="statusAdd1" class="statusAdd1"></span>
              </div>
              
			  <div class="form-label-group">
			  <label for="inputaddress"><b>Home Address</b></label><br/>
                 <textarea type="text" id="homeaddress" name="homeaddress"class="md-textarea form-control" rows="3"  ></textarea>
                
				
              </div>
			  
				<div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control"  required />
                <label for="inputEmail" style="font-size:15px;color:black;">Email address</label>
              </div>
			  <div class="form-label-group">
                <input type="phonenumber" id="phone" name="phone" class="form-control"   required />
                <label for="inputText" style="font-size:15px;color:black;">Phone Number</label>
				<span id="message" class="message"></span>
              </div>
				
			   
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="Submit"   >Register</button>
			 

					
           </form>
            
          </div>
        </div>
      </div>
       </div>
    </div>
  </div>
</div>
</div>






 <?php
	
	  //session_start();
      if (isset($_POST["Submit"]))
      {
       
          $fname=$_POST['name'];
          $lname=$_POST['lname'];
          $rd=$_POST['rd'];
          $addr=$_POST['homeaddress'];
          $email=$_POST['email'];
          $contact=$_POST['phone'];
          
         //$_SESSION['name']=$name;
            $sql="INSERT INTO regi(fname,lname,rd,addr,email,contact) VALUES('$fname','$lname','$rd','$addr','$email','$contact')";
            $result=mysqli_query($db,$sql);
            if($result){
              echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Successfully registered,Now Login!!!');
	  
    </SCRIPT>");

            }
            else{
              echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to register!!!') </SCRIPT>");
            }
	  }
			?>
  </body>
</html>

 