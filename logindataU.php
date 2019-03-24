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
		//ConnectData();
		InsertMsg();
	}
	
	function UpdateData()
	{
		session_start();
		include 'config.php';

		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$bdate=$_POST['birthdate'];
		$semester=$_POST['semester'];
		$branch=$_POST['branch'];
		$number=$_POST['no'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$id=$_SESSION['enroll'];
		/*echo $fname."<br>".$mname."<br>".$lname."<br>".$bdate."<br>".$number."<br>".$email."<br>".
		$address."<br>".$since."<br>".$idate."<br>".$regnumber."<br>".$pass."<br>".$type;*/


		$query="UPDATE login SET FirstName='$fname', MiddleName='$mname', LastName='$lname', Email='$email',
		 Mobile='$number', BirthDate='$bdate', Semester='$semester', Password='$pass',Branch='$branch' WHERE Enrollment='$id'";

		if($res=mysqli_query($conn,$query))
		{
		echo('<script>
			   window.alert("Your Data Updated Sucessfully");
			   window.location="login.php";
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
		$sql="SELECT * FROM login where Email='$email'";
			$res1=mysqli_query($conn,$sql);
			$result=mysqli_num_rows($res1);

			if($result>0)
			{
				
				echo('<script>
				   window.alert("This Email Already Exist! Please Enter New Email");
				   window.location="UserRegistration.php";
				   </script>');
			}
			else
			{
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
	function InsertMsg()
	{
			require 'PHPMailer-master/src/Exception.php';
			require 'PHPMailer-master/src/PHPMailer.php';
			require 'PHPMailer-master/src/SMTP.php';
			// require 'vendor/autoload.php';

			$mail = new PHPMailer\PHPMailer\PHPMailer(true);                              // Passing `true` enables exceptions
			try {
				//Server settings
				$mail->SMTPDebug = 0;                                 // Enable verbose debug output
				$mail->isSMTP();        
				$mail->SMTPKeepAlive = true;   
				$mail->Mailer ="smtp";                               // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = "patelvaghesh2313@gmail.com";                 // SMTP username
				$mail->Password = "347676747926vir";                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to

				$pemail=$_GET['pemail'];

				// prepare email message
				$email_message = "<b>Random Code details below.</b>\n\n"."<br>"."<br>";

				function clean_string($string)
				{
					$bad = array("content-type", "bcc:", "to:", "cc:", "href");
					return str_replace($bad, "", $string);
				}

				/*$email_message = new Mail_mime();*/
				$email_message .= "<b>sne send mail to vaghesh : </b>Your data Sucessfully register<br>"."<br>";
				

				$receive='snepatel2000@gmail.com';
				//Recipients
				$mail->setFrom('patelvaghesh2313@gmail.com', 'Mailer');
				$mail->addAddress($receive);     // Add a recipient
				
				
				$subject="Code Details";
				//Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = $subject;
				$mail->Body    = $email_message;
				

				$mail->send();

				echo('<script>window.alert("Your Data Submited Sucessfully");
				   window.location="index.php";
				   </script>');

			} catch (Exception $e) {
				echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
				
			}

	}
	if(isset($_POST['submit2'])){
		//echo '<script>alert("in script")</script>';
		//InsertData();
		InsertMsg();
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
			$enroll=$_POST['enroll'];
			$mname=$_POST['mname'];
			$branch=$_POST['branch'];
			$seme=$_POST['semester'];
			$no=$_POST['no'];
			$email=$_POST['email'];
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