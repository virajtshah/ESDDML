<?php
	require('dbconfig.php');
	session_start();
	if(isset($_POST['submit']))
	{	
		$name = $_POST['name'];
		$password = $_POST['password'];
		$name = stripslashes($name);
		$name = addslashes($name);
		$password = stripslashes($password); 
		$password = addslashes($password);
		$name = mysqli_real_escape_string($con,$name);
		$password = mysqli_real_escape_string($con,$password);					
		$str = "SELECT * FROM users WHERE name='$name' and password='$password'";
		$result = mysqli_query($con,$str);
		if((mysqli_num_rows($result))!=1) 
		{
			echo "<center><h3><script>alert('Sorry.. Wrong User Name (or) Password');</script></h3></center>";
			header("refresh:0;url=login.php");
		}
		else
		{
			setcookie("name",$name,time()+86400);
			$_SESSION['name']=$name;
			echo "<script type=\"text/javascript\"> alert(\"Hello\");window.localStorage.setItem(\"name\", $name);</script>";
			$row=mysqli_fetch_array($result);
			header('location: welcome.php'); 					
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
            body { width: 100%; height: 100%; overflow: hidden; background-color:rgba(55, 0, 255, 0.397);}
          </style>
	</head>

	<body>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
						<center> <h5 style="font-family: Noto Sans;">Login to </h5><h4 style="font-family: Noto Sans;">Dyslexia Data Collection</h4></center><br>
						<form method="post" action="login.php" enctype="multipart/form-data">
								<div class="form-group">
									<label>Enter Your User name:</label>
									<input id="username" type="text" name="name" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw">Enter Your Password:
										<a href="javascript:void(0)" class="pull-right">Forgot Password?</a>
									</label>
									<input type="password" name="password" class="form-control">
								</div> 
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" onclick="onSubmit()" name="submit">Login</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Don't have an account?</span> <a href="register.php">Register</a> Here..
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="js/jquery.js"></script>
		<script>
			function onSubmit() {
				let username = document.getElementById("username").value;
				window.localStorage.setItem("username", username);
			}
		</script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
	</body>
</html>