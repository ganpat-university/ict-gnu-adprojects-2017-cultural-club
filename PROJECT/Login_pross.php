<?php
			
			$conn=mysqli_connect("localhost","root","","club");
			$email=$_POST['email1'];
			$passw=$_POST['pwd'];
			$query="SELECT Email,Password FROM signData where Email='$email' AND Password='$passw'";
			$res=mysqli_query($conn,$query);
			if($rows=mysqli_num_rows($res)==1)
			{					
					header("location:/PROJECT/events.php");
			}
			else
			{
				echo "<script> alert('Oops...Email & Password was wrong ')</script>";
			}
			
?>