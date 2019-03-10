<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.container .btn1 {
	  position: absolute;
	  top: 40%;
	  left: 10%;
	  float:left;
	  transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	  background-color: #555;
	  color: white;
	  font-size: 16px;
	  padding: 12px 24px;
	  border: none;
	  cursor: pointer;
	  border-radius: 5px;
	  text-align: center;
	}
	.container .btn2 {
	  position: absolute;
	  top: 40%;
	  left: 50%;
	  float:left;
	  transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	  background-color: #555;
	  color: white;
	  font-size: 16px;
	  padding: 12px 24px;
	  border: none;
	  cursor: pointer;
	  border-radius: 5px;
	  text-align: center;
	}
	.container .btn3 {
	  position: absolute;
	  top: 40%;
	  left: 80%;
	  float:left;
	  transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	  background-color: #555;
	  color: white;
	  font-size: 16px;
	  padding: 12px 24px;
	  border: none;
	  cursor: pointer;
	  border-radius: 5px;
	  text-align: center;
	}

</style>
</head>
<body>

<h2>Button on Image</h2>
<p>Add a button to an image:</p>
<?php include 'test1.php';
		echo "$n";
?>
<div class="container" >

  <img src="image/g3.jpg" align="left" style="width:400px;padding-left:55px;" alt="Snow" >
  <button class="btn1">Button</button>
  <img src="image/g6.jpg" align="left" style="width:377px;padding-left:55px;" alt="Snow" >
  <button class="btn2">Button</button>
  <img src="image/banner2.jpg" align="left" style="width:400px;padding-left:35px;" alt="Snow" >
  <button class="btn3">Button</button>
</div>

</body>
</html>
