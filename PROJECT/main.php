<html>
<head>
	<title>HOME</title>
	<meta name="viewport" content="width=device-width,intial-scale=1">
	<link href="css/l.css" rel="stylesheet" type="text/css">
</head>
	<body>
	<div id="sideNav" class="sideNav">
	<a href="" class="clsbtn" onclick="closeNav()">&times;</a>
	<a href="signup.php">Signup</a>
	<a href="Login.php">Login</a>
	<a href="Admin.php">Admin</a>
	</div>
	
	<div class="list">
	<span  style="font-size:36px;cursor:pointer"  onclick="openNav()">&#9776;</span>
	<span class="log">Wel-Come To Our Club</span>
	</div>
	<!-- Section About Us!-->
	<div style="text-align:center">
		<h2>About Us</h2>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="column-66">
			  <p>Cultural Club is a community that connects culturally minded colleges.Our events are intended to bring together art,music,and film aficionados of diverse nationalities at inspiring events in the colleges.</p>
			  <button class="button">join here</button>
			</div>
		</div>
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
