<!DOCTYPE html>

<html>
<head>
<title>Events Registration</title>
<link rel="stylesheet" href="css/sign.css" type="text/css">
<link rel="stylesheet" href="css/events.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="sideNav" class="sidenav">
	<a href="" class="clsbtn" onclick="closeNav()">&times;</a>
	<a onclick="document.getElementById('profile').style.display='block'" style="cursor:pointer;">Profile</a>
	<a href="#">Logout</a>
</div>

<div class="list">
	<span  style="font-size:36px;cursor:pointer"  onclick="openNav()">&#9776;</span>
	<span class="log">Rgistration Events</span>
</div>
		<div class="pre">
			<a href="#" class="close">&times;</a>
		</div>
<div class="gal">
	<div class="container">
	  <img src="image/g3.jpg" align="left" alt="Snow" style="width:500px;padding-left:5px;margin:20px;">
	  <a href="User_Event_Reg.php"><button class="btn1">Dance</button></a>
	  <img src="image/g6.jpg" align="left" alt="Snow" style="width:390px;padding-left:5px;margin:20px;">
	  <a href="User_Event_Reg.php"><button class="btn2">Party</button></a>
	  <img src="image/banner2.jpg" align="left" alt="Snow" style="width:330px;height:260px;padding-left:5px;margin:20px;">
	  <a href="User_Event_Reg.php"><button class="btn3">Moj</button></a>
	  <img src="image/g3.jpg" align="left" alt="Snow" style="width:500px;padding-left:5px;margin:20px;">
	  <a href="User_Event_Reg.php"><button class="btn4">Dance</button></a>
	  <img src="image/g6.jpg" align="left" alt="Snow" style="width:390px;padding-left:5px;margin:20px;">
	  <a href="User_Event_Reg.php"><button class="btn5">Party</button></a>
	  <img src="image/banner2.jpg" align="left" alt="Snow" style="width:330px;height:260px;padding-left:5px;margin:20px;">
	  <a href="User_Event_Reg.php"><button class="btn6">Moj</button></a>
	</div>
</div>


	

<!---End Registration Form!-->
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