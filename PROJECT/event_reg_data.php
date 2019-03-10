<?php
			$conn=mysqli_connect("localhost","root","","club");
			$enl=$_POST['enno'];
			$nm=$_POST['name'];
			$em=$_POST['email'];
			$ena=$_POST['evname'];
			$br=$_POST['branch'];
			$sem=$_POST['sem'];
			$mo=$_POST['cono'];
			//$sql="SELECT EnrollNo FROM enro where EnrollNo='$en'";
			//$res1=mysqli_query($conn,$sql);
			
			if($ena == 'dance' or $ena == 'Dance' or $ena == 'DANCE')
			{	$ena=$_POST['evname'];
				$query="INSERT INTO dance(Enroll_No,Name,Email,EventName,Branch,Semester,Mo) VALUES('$enl','$nm','$em','$ena','$br','$sem','$mo')";
				$res=mysqli_query($conn,$query); //create a connection with DB	
				if($res == TRUE)
				{	
					//echo "<script>alert('$msg');</script>";
					header("location:/PROJECT/events.php");
				}
				else
				{
					$_SESSION['message']="User Could Not Adder To The DB";
					echo "Problem";
				}
			}
			elseif($ena == 'party' or $ena == 'Party' or $ena == 'PARTY' )
			{
				$ena=$_POST['evname'];
				$query1="INSERT INTO party(Enroll_No,Name,Email,EventName,Branch,Semester,Mo) VALUES('$enl','$nm','$em','$ena','$br','$sem','$mo')";
				$res1=mysqli_query($conn,$query1); //create a connection with DB	
				if($res1 == TRUE)
				{	
					//echo "<script>alert('$msg');</script>";
					header("location:/PROJECT/events.php");
				}
				else
				{
					$_SESSION['message']="User Could Not Adder To The DB";
					echo "Problem1";
				}
		
			}
			else{
				echo "aaa";
			}
?>