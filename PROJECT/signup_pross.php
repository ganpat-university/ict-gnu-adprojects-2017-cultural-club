<?php
			$conn=mysqli_connect("localhost","root","","club");
			$en=$_POST['enno'];
			$na=$_POST['name'];
			$em=$_POST['email'];
			$pw=$_POST['psw'];
			$bd=$_POST['bday'];
			$cn=$_POST['cono'];
			//$sql="SELECT EnrollNo FROM enro where EnrollNo='$en'";
			//$res1=mysqli_query($conn,$sql);
			
			
				$query="INSERT INTO signData(EnNo,Name,Email,Password,DOB,Contact) VALUES('$en','$na','$em','$pw','$bd','$cn')";
				$res=mysqli_query($conn,$query); //create a connection with DB	
				if($res == TRUE)
				{	
					//echo "<script>alert('$msg');</script>";
					header("location:/PROJECT/Login.php");
				}
				else
				{
					$_SESSION['message']="User Could Not Adder To The DB";
					echo "Problem";
				}
			
		
		
	
?>