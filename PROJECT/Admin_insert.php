<html>
<head>
	<title>Admin Insert</title>
	<meta name="viewport" content="width=device-width,intial-scale=1">
	<link href="css/sign.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<body>
	<div id="sideNav" class="sideNav">
	<a href="" class="clsbtn" onclick="closeNav()">&times;</a>
	<a href="Admin_Handle.php">Admin Department</a>
	</div>
	<div class="list">
	<span  style="font-size:35px;cursor:pointer"  onclick="openNav()">&#9776;</span>
	<span class="log">Admin Insert</span>
	</div>
	<div class="pre">
			<a href="Admin_Handle.php" class="close">&times;</a>
		</div>
	<div class="cr_acc">
		
		<center><h1>Insert New Data</h1></center>
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
			<i class="fa fa-fire icon"></i>
			<input class="input-field" type="text" placeholder="EventName" name="evname" required>
		  </div>
		  
		  <div class="input-container">
			<i class="fa fa-book icon"></i>
			<input class="input-field" type="text" placeholder="Branch" name="branch" required>
		  </div>
		  
		  <div class="input-container">
			<i class="fa fa-asterisk icon"></i>
			<input class="input-field" type="text" placeholder="Semester" name="sem" required>
		  </div>
		  
		   <div class="input-container">
			<i class="fa fa-phone icon"></i>
			<input class="input-field" type="text" placeholder="Contact Number" name="cono">
		  </div>			
		  <button type="submit" class="btn">Insert</button>
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