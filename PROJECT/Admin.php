<html>
<head>
	<title>Admin Login</title>
	<meta name="viewport" content="width=device-width,intial-scale=1">
	<link href="css/sign.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<body>
	<div id="sideNav" class="sideNav">
	<a href="" class="clsbtn" onclick="closeNav()">&times;</a>
	<a href="main.php">Home</a>
	</div>
	
	<div class="list">
	<span  style="font-size:36px;cursor:pointer"  onclick="openNav()">&#9776;</span>
	<span class="log">Admin Login</span>
	</div>	
		<div class="pre">
			<a href="main.php" class="close">&times;</a>
		</div>	
		<div class="lo_acc" >
			<center><h1>Login</h1></center>
			<form action="Admin_Login_pross.php" method="POST">
			<div class="input-container">
			<i class="fa fa-envelope icon"></i>
			<input class="input-field" type="email" placeholder="Email" name="email1">
		  </div>

		  <div class="input-container">
			<i class="fa fa-key icon"></i>
			<input class="input-field" type="password" placeholder="Password" name="pwd">
		  </div>
		  
		  <button type="submit" class="btn">Login</button>
			</form>
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