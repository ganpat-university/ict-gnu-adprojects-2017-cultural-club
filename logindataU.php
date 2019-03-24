<?php

	function ConnectData()
	{
	require 'config.php';
	
	$Enrollment = $_POST['enroll'];
	$Password = $_POST['pass'];	
	$empq = "select * from login where Enrollment=? and Password=?";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$empq)){
		header("Location:index.php?error=sqlerror");
		exit();
	}
	else {
		mysqli_stmt_bind_param($stmt,"ss",$Enrollment,$Password);
		mysqli_stmt_execute($stmt);
		//echo '<script>alert("'.mysqli_stmt_execute($stmt).'")</script>';
		
		if($row = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt)))
		{		
			if($Password != $row['Password'])
			{
				echo('<script>
			   window.alert("Please Enter Correct Passowrd!!!");
			   window.location="login.php";
			   </script>');
			}
			else if($Password == $row['Password'] )
			{
				session_start();
				$_SESSION['enroll'] = $row['Enrollment'];
				$_SESSION['pass'] = $row['Password'];
				$_SESSION['fname']=$row['FirstName'];
				$_SESSION['mname']=$row['MiddleName'];
				$_SESSION['lname']=$row['LastName'];
				$_SESSION['email']=$row['Email'];
				$_SESSION['dt']=$row['BirthDate'];
				$_SESSION['mob']=$row['Mobile'];
				$_SESSION['seme']=$row['Semester'];
				$_SESSION['bran']=$row['Branch'];
				//Employee Database
				//header("Location:index.php");
				echo "<script>window.open('index.php','_self')</script>";
				//exit();
			}
			else {
				echo '<span style="color: Red">Passowrd is Wrong</span>';
				exit();
			}
		}
		else
		{
			echo('<script>
			   window.alert("User & Passowrd Is wrong!!!Please Try Again...");
			   window.location="login.php";
			   </script>');
		}
	}
	}
	if(isset($_POST['submit'])){
		//echo '<script>alert("in script")</script>';
		ConnectData();
		//InsertMsg();
	}
	
	function UpdateData()
	{
		session_start();
		include 'config.php';

		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$bdate=$_POST['birthdate'];
		$semester=$_SESSION['seme'];
		$branch=$_SESSION['bran'];
		$number=$_POST['no'];
		$email=$_SESSION['email'];
		$pass=$_POST['pass'];
		$id=$_SESSION['enroll']
		;
		/*echo $fname."<br>".$mname."<br>".$lname."<br>".$bdate."<br>".$number."<br>".$email."<br>".
		$address."<br>".$since."<br>".$idate."<br>".$regnumber."<br>".$pass."<br>".$type;*/


		$query="UPDATE login SET FirstName='$fname', MiddleName='$mname', LastName='$lname', Email='$email',
		 Mobile='$number', BirthDate='$bdate', Semester='$semester', Password='$pass',Branch='$branch' WHERE Enrollment='$id'";

		if($res=mysqli_query($conn,$query))
		{
			
				$_SESSION['pass'] = $pass;
				$_SESSION['fname']=$fname;
				$_SESSION['mname']=$mname;
				$_SESSION['lname']=$lname;
				$_SESSION['dt']=$bdate;
				$_SESSION['mob']=$number;
				
		echo('<script>
			   window.alert("Your Data Updated Sucessfully");
			   window.location="Profile.php";
			   </script>');
		}
		else
		{
			echo('<script>
				   window.alert("Not Done, Try after some time");
				   window.location="index.php";
				   </script>');
		} 
	}
	if(isset($_POST['submit1'])){
		//echo '<script>alert("in script")</script>';
		UpdateData();
	}
	
	function InsertData()
	{
		session_start();
		include 'config.php';

		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$bdate=$_POST['birthdate'];
		$semester=$_POST['semester'];
		$number=$_POST['no'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$enroll=$_POST['enroll'];
		$bn=$_POST['branch'];
		/*echo $fname."<br>".$mname."<br>".$lname."<br>".$bdate."<br>".$number."<br>".$email."<br>".
		$address."<br>".$since."<br>".$idate."<br>".$regnumber."<br>".$pass."<br>".$type;*/
		$sql="SELECT * FROM login where  Enrollment='$enroll'";
			$res1=mysqli_query($conn,$sql);
			$result=mysqli_num_rows($res1);
			if($result>0)
			{
				echo('<script>
				   window.alert("This  Enrollment Already Exist! Please Enter New Email");
				   window.location="UserRegistration.php";
				   </script>');
			}
			else
			{
				$sql1="SELECT * FROM login where  Email='$email'";
				$res11=mysqli_query($conn,$sql1);
				$result1=mysqli_num_rows($res11);
				if($result1>0)
				{
					echo('<script>
				   window.alert("This Email  Already Exist! Please Enter New Email");
				   window.location="UserRegistration.php";
				   </script>');
				}
				else{
					
					$query="insert into login(FirstName,MiddleName,LastName,Email,Enrollment,Password,Mobile,BirthDate,Semester,Branch) values('$fname','$mname','$lname','$email','$enroll','$pass','$number','$bdate','$semester','$bn')";
					if($res=mysqli_query($conn,$query))
					{
					echo('<script>
						   window.alert("Your Data Inserted Sucessfully");
						   window.location="login.php";
						   </script>');
					}
					else
					{
						echo('<script>
							   window.alert("Not Done, Try after some time");
							   window.location="login.php";
							   </script>');
					} 
				}
		
	}
	}
	
	if(isset($_POST['submit2'])){
		//echo '<script>alert("in script")</script>';
		InsertData();
		//InsertMsg();
	}
	
	function ForgotPassword()
	{
		session_start();
		include 'config.php';
			$email=$_POST['email'];
			$passw=$_POST['pass'];
			$pass=$_POST['cpass'];
			$en=$_POST['enroll'];
			if($passw==$pass)
			{				
					$query="update login set Password='$passw' where Email='$email' and Enrollment='$en'";
					$res=mysqli_query($conn,$query);
					if($res==TRUE)
					{
					echo('<script>
				   window.alert("Passowrd Sucessfully Changed!!!");
				   window.location="login.php";
				   </script>');
					}
					else
					{
						echo('<script>
				   window.alert("Something Went Wrong!!Please try Again!!!");
				   window.location="login.php";
				   </script>');
					}
			}
			else
			{
				echo('<script>
				   window.alert("Please Check Passowrd,Confirm Passowrd,Email And Enrollment!!!");
				   window.location="ForgotPassword.php";
				   </script>');
			}
			
	}
			
	
	if(isset($_POST['submit3'])){
		//echo '<script>alert("in script")</script>';
		ForgotPassword();
	}
	
	function EventData()
	{
			session_start();
			include 'config.php';
			$enroll=$_SESSION['enroll'];
			$mname=$_SESSION['mname'];
			$branch=$_SESSION['bran'];
			$seme=$_SESSION['seme'];
			$no=$_SESSION['mob'];
			$email=$_SESSION['email'];
			$sevent=$_POST['sevent'];
			$cevent=$_POST['cevent'];

			$query="INSERT INTO events(Enrollment,Name,Branch,Semester,Email,Mobile,StageEvents,CampusEvents) VALUES ('$enroll','$mname','$branch','$seme','$email','$no','$sevent','$cevent')";
			if($res=mysqli_query($conn,$query))
			{
			echo('<script>
				   window.alert("Your Data Submited Sucessfully");
				   window.location="index.php";
				   </script>');
			}
			else
			{
			echo('<script>
				   window.alert("Not Done, Try after some time");
				   window.location="registration.php";
				   </script>');
			} 
	}
	
	if(isset($_POST['submit4'])){
		//echo '<script>alert("in script")</script>';
		EventData();
	}
	
?>
