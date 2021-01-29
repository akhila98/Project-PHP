<!DOCTYPE html>
<html>
  <head>
    <title>AfterLife.com</title>
	
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link href='https://fonts.googleapis.com/css?family=Pacifico:400,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<style>

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
  margin-left:300px;
  
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  top: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}





/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
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




</head>



<body>

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand" style="margin-left:10px;font-family: 'PAcifico' ;font-size:40px;"><b>AfterLife</b></a>
    

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav" style="margin-left:250px;font-family: 'PAcifico';font-size:26px; ">
            <a href="index.php" class="nav-item nav-link">Home</a>
           &nbsp;&nbsp;<a href="ourservices.php" class="nav-item nav-link active">Our Services</a>
		   &nbsp;&nbsp;<a href="contactus.php" class="nav-item nav-link">Contact Us</a>
            &nbsp;&nbsp;<a href="review.php" class="nav-item nav-link">Reviews</a>
			 &nbsp;&nbsp;<a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal1">Login</a>
           
        </div>
        
    </div>
</nav>
<br>

<img src="image1.jpg"  style="width:90%; height:600px ; margin-left:100px"/>  

<div class="carousel-caption" style="margin-left:50%;" ><h1 style="font-family: 'Pacifico';color:black"><b>Our Service</b></h1>
						 <br>
			<h3 style="margin-left:20%;font-family: 'Dancing Script';color:black"><b>We provide a simple, affordable direct cremation servive that you can arrange online or over phone <br/>
						
					</h3>
						
            </div>

          </img>
		  
		  <br><br><br><br>
		  <div class="d1"  style="margin-left:15%">
		  
		 <h1 style="font-family: 'Pacifico';"><b>What is direct Cremation?</b></h1>
		  <br><br>
		  <h4 style="margin-left:60px;font-family: 'Dancing Script';color:black;">
		  Direct cremation is the simplest funeral option, where the cremation takes place in the days immediately following the passing, <br/>and without a viewing or funeral service beforehand.
<br><br>Many families hold a memorial or celebration of life service at a later date - with a direct cremation you’re able to <br/>arrange a much more personalized service, without the time and cost-pressure of a traditional funeral home.
<br><br>Whether you need our services now, or you’re planning for the future, AfterLife promises a simple process, transparent prices,<br/> and 24/7 best-in-class care. We’re here when you need us the most.
		  
		  </h4>
		  
		  </div>
<br>

<h1 style="font-family: 'Pacifico';margin-left:15%;"><b>Everything you need in one package</b></h1>
<br><br><br>
<div class="slideshow-container" >

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="prayermeet.png" style="width:800px ;height:500px">
  <div class="text">Prayer meet</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="medical services.png" style="width:800px;height:500px">
  <div class="text">Medical Services</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="catering.png" style="width:800px;height:500px">
  <div class="text">Catering</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="documents.png" style="width:800px;height:500px">
  <div class="text">Paper Work</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="memorial.jpg" style="width:800px;height:500px">
  <div class="text">Memorial Service</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="customercare.png" style="width:800px;height:500px">
  <div class="text">Customer Care</div>
</div>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
   <span class="dot" onclick="currentSlide(6)"></span>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>



<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<div class="copyright" style="background-color:rgb(192,192,192); height:80px ">
					 <p style="font-family: 'Josefin Sans', sans-serif;font-size:20px;margin-left:20%;"><br/>© 2020 Copyright:AFTERLIFE,INC.ALL RIGHTS RESERVED</p>
				
					
					</div>


<!-- Modal --->
					<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="background: #007bff;background: linear-gradient(to right, #0062E6, #33AEFF); ">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login/Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
					<div class="modal-footer-center" style="height:90px">
					
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
            <h5 class="card-title text-center" style="font-family: 'Josefin Sans', sans-serif;"><b>Login</b><button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></h5>
            <form class="form-signin" method="post">
              <div class="form-label-group">
                <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Mobile Number</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
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
            <h5 class="card-title text-center" style="font-family: 'Josefin Sans', sans-serif;"><b>Register</b>
			<p class="card-title text-center" style="font-family: 'Josefin Sans', sans-serif;font-size:20px"><b>All fields are mandatory*.</b><p>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button></h5>
       <br><br>
           
            <form class="form-signin">
			<div class="form-label-group">
                <input type="name" id="name" class="form-control"  required />
                <label for="inputEmail" style="font-size:15px;color:black;">Name</label>
              </div>
              <div class="form-label-group">
                <input type="email" id="email" class="form-control"  required />
                <label for="inputEmail" style="font-size:15px;color:black;">Email address</label>
              </div>
			  <div class="form-label-group">
                <input type="phonenumber" id="phone" class="form-control"  pattern="^\d{4}-\d{3}-\d{4}$" required />
                <label for="inputEmail"style="font-size:15px;color:black;">Phone Number</label>
				<span id="message" class="message"></span>
              </div>
			  <div class="form-label-group">
                 <textarea type="text" id="homeaddress" class="md-textarea form-control" rows="3"  onkeyup="add_validate()"></textarea>
                <label for="inputaddress">Home Address</label>
				<span id="statusAdd" class="statusAdd"></span>
              </div>
				<div class="form-label-group">
                 <textarea type="text" id="officeaddress" class="md-textarea form-control" rows="3"  onkeyup="add_validate1()" ></textarea>
                <label for="inputaddress">Office Address</label>
				<span id="statusAdd1" class="statusAdd1"></span>
              </div>
				<div class="form-label-group">
                <input type="dob" id="dob" class="form-control" placeholder="Date of Birth" onkeyup="dob_validate()" required />
                <label for="dob">Date of Birth</label>
				<span id="statusDOB" class="statusDOB"></span>
              </div>
			  <div class="checkbox">
				<label><b>Select Occupation</b><br/><br/><input type="checkbox" value="" >&nbsp;Doctor</center></label>
				</div>
				<div class="checkbox">
				<center><label><input type="checkbox" value="">&nbsp;Ambulance service</center></label>
					</div>
					<div class="checkbox">
				<center><label><input type="checkbox" value="">&nbsp;Freezer box service</center></label>
					</div>
					<div class="checkbox">
				<center><label><input type="checkbox" value="">&nbsp;Catering</center></label>
					</div>
					<div class="checkbox">
				<center><label><input type="checkbox" value="">&nbsp;Hall service</center></label>
					</div>
			
				<div class="form-label-group">
                <input type="phonenumber" id="gst" class="form-control"  pattern="^\d{4}-\d{3}-\d{4}$" required />
                <label for="inputEmail" style="font-size:15px;color:black;">GST number</label>
				<span id="message" class="message"></span>
              </div>
			  <br>
				<div class="form-label-group">
                <input type="phonenumber" id="license" class="form-control"  pattern="^\d{4}-\d{3}-\d{4}$" required />
                <label for="inputEmail"style="font-size:15px;color:black;">License number</label>
				<span id="message" class="message"></span>
              </div>
				
				<br>
				<div class="form-group">
				<label for="exampleFormControlFile1"><b>Upload Experience documents</b></label>
            <br>&nbsp;&nbsp;<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>
			
				
				<!---
              <div class="form-label-group">
                <input type="password" id="pass1" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
			  <div class="form-label-group">
                <input type="password" id="pass2" class="form-control" placeholder="Confirm Password" onkeyup="checkPass()" required >
                <label for="inputConfirmPassword">ConfirmPassword</label>
				<span id="confirmMessage" class="confirmMessage"></span>
              </div>
				--->
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" >Accept All Terms and condition</label>
				
              </div>
			   
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
              
            </form>
          </div>
        </div>
      </div>
       </div>
    </div>
  </div>
</div>
</div>
					
				<script>


// validate email
function email_validate(email)
{
var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

    if(regMail.test(email) == false)
    {
    document.getElementById("status").innerHTML    = "<span class='warning'>Email address is not valid yet.</span>";
    }
    else
    {
    document.getElementById("status").innerHTML	= "<span class='valid'>Thanks, you have entered a valid Email address!</span>";	
    }
}






</script>		
</body>
</html> 
