<html>
<head>
	<title>User SignUP</title>
	<meta name="viewport" content="width=device-width,intial-scale=1">
	<link href="css/sign.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<body>
	<div id="sideNav" class="sideNav">
	<a href="" class="clsbtn" onclick="closeNav()">&times;</a>
	<a href="main.php">Home</a>
	<a href="Login.php">Login</a>
	</div>
	<div class="list">
	<span  style="font-size:35px;cursor:pointer"  onclick="openNav()">&#9776;</span>
	<span class="log">SignUp Form</span>
	</div>
		<div class="pre">
			<a href="main.php" class="close">&times;</a>
		</div>	
	<div class="cr_acc">
		
		<center><h1>SignUp</h1></center>
		<form method="POST" action="signup_pross.php" onsubmit="return checkform(this);">
		 
		   <div class="input-container">
			<i class="fa fa-flag icon"></i>
			<input class="input-field" type="text" placeholder="Enrollment Number" name="enno" required>
		  </div>
		  
		  <div class="input-container">
			<i class="fa fa-user icon"></i>
			<input class="input-field" type="text" placeholder="Name" name="name" required>
		  </div>

		  <div class="input-container">
			<i class="fa fa-envelope icon"></i>
			<input class="input-field" type="email" placeholder="Email" name="email" required>
		  </div>

		  <div class="input-container">
			<i class="fa fa-key icon"></i>
			<input class="input-field" type="password" placeholder="Password" name="psw" required>
		  </div>
		  
		  <div class="input-container">
			<i class="fa fa-th icon"></i>
			<input class="input-field" type="date" placeholder="Birth Date" name="bday" required>
		  </div>
		  
		   <div class="input-container">
			<i class="fa fa-phone icon"></i>
			<input class="input-field" type="text" placeholder="Contact Number" name="cono">
		  </div>
			<div class="capbox">
				<div id="CaptchaDiv"></div>
					<div class="capbox-inner">
						Type the above number:<br>
						<input type="hidden" id="txtCaptcha">
						<input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>
					</div>
			</div>
			
		  <button type="submit" class="btn">Register</button>
		  
		  
		</form>
		<script type="text/javascript">
		function checkform(form){
var why = "";

if(form.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(form.CaptchaInput.value != ""){
if(ValidCaptcha(form.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>
	</div>
	<script>
	function openNav()
	{
		 document.getElementById("sideNav").style.width = "100%";
	}
	function closeNav() {
		 document.getElementById("sideNav").style.width = "0";
    }
	</script>
	</body>
</html>