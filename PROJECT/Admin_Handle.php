<!DOCTYPE html>

<html>
<head>
<title>Admin Department</title>
<link rel="stylesheet" href="css/sign.css">
<link rel="stylesheet" href="css/events.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="sideNav" class="sidenav">
	<a href="" class="clsbtn" onclick="closeNav()">&times;</a>
	<a href="Admin_insert.php">Insert</a>
	<a href="#">Update</a>
	<a href="#">Delete</a>
	<a href="#">Logout</a>
</div>

<div class="list">
	<span  style="font-size:36px;cursor:pointer"  onclick="openNav()">&#9776;</span>
	<span class="log">Admin Department</span>
</div>

<!-- Registration Form!-->
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