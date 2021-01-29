<html>
<head>
<title>How to Implement OTP SMS Mobile Verification in PHP with TextLocal</title>

<style>

body {
    font-size: 0.9em;
    color: #212121;
    font-family: Arial;
}
.container{
	width: 350px;
    margin: 50px auto;
    box-sizing: border-box;
}

#frm-mobile-verification {
    border: #E0E0E0 1px solid;
    border-radius: 3px;
    padding: 30px;
    text-align: center;
}

.form-heading {
    font-size: 1.5em;
    margin-bottom: 30px;
}

.form-row {
    margin-bottom: 30px;
}

.form-input {
    padding: 10px 20px;
    width: 100%;
    box-sizing: border-box;
    border-radius: 3px;
    border: #E0E0E0 1px solid;
}

.btnSubmit {
    background: #4cb7ff;
    padding: 8px 20px;
    border: #47abef 1px solid;
    border-radius: 3px;
    width: 100%;
    color: #FFF;
}


.error {
    color: #483333;
    padding: 10px;
    background: #ffbcbc;
    border: #efb0b0 1px solid;
    border-radius: 3px;
    margin: 0 auto;
    margin-bottom: 20px;
    width: 350px;
    display:none;
    box-sizing: border-box;
}

.success {
    color: #483333;
    padding: 10px 20px;
    background: #cff9b5;
    border: #bce4a3 1px solid;
    border-radius: 3px;
    margin: 0 auto;
    margin-bottom: 20px;
    width: 350px;
    display:none;
    box-sizing: border-box;
}

.btnVerify {
    background: #4CAF50;
    padding: 8px 20px;
    border: #449e48 1px solid;
    border-radius: 3px;
    width: 100%;
    color: #FFF;
}
</style>

</head>
<body>
<div class="error"></div>
<div class="success"></div>
<form id="frm-mobile-verification">
	<div class="form-row">
		<label>OTP is sent to Your Mobile Number</label>		
	</div>

	<div class="form-row">
		<input type="number"  id="mobileOtp" class="form-input" placeholder="Enter the OTP">		
	</div>

	<div class="row">
		<input id="verify" type="button" class="btnVerify" value="Verify" onClick="verifyOTP();">		
	</div>
</form>

<script>

</script>

</body>
</html>