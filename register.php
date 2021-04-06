<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	
		$name = $_POST['name'];
		$name = stripslashes($name);
		$name = addslashes($name);

		$age = $_POST['age'];
		$age = stripslashes($age);
		$age = addslashes($age);

		$password = $_POST['password'];
		$password = stripslashes($password);
		$password = addslashes($password);

		$sex = $_POST['sex'];
		$sex = stripslashes($sex);
		$sex = addslashes($sex);
		$str="SELECT name from users WHERE name='$name'";
		$result=mysqli_query($con,$str);
		
		if((mysqli_num_rows($result))>0)	
		{
            echo "<center><h3><script>alert('Sorry.. This User Name is already registered !!');</script></h3></center>";
            header("refresh:0;url=login.php");
        }
		else
		{
            $str="insert into users set name='$name',age='$age',password='$password',sex='$sex'";
			if($result=mysqli_query($con,$str))
				echo "<center><h3><script>alert('Congrats.. You have successfully registered !!');</script></h3></center>";
				setcookie("name",$name,time()+86400);
				$_SESSION['name']=$name;
				header("location:welcome.php");
		}
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Register</title>
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
							<center> <h5 style="font-family: Noto Sans;">Register to </h5><h4 style="font-family: Noto Sans;">Dyslexia Data Collection</h4></center><br>
							<form method="post" action="register.php" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label>Enter Your User Name:</label>
                                    <input  type="text" name="name" class="form-control" required />
                                </div>
								<div class="form-group">
									<label>Enter Your Password:</label>
									<input type="password" name="password" class="form-control" required />
                                </div>
								<div class="form-group">
									<label>Enter Your Age</label>
									<input type="number" name="age" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Select Your Sex:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
									<input type="radio" name="sex" value="Male" class="form-control:focus" required />Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                                    <input type="radio" name="sex" value="Female"class="form-control:focus" required />Female
								</div>
                                
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Register</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Already have an account! </span> <a href="login.php">Login </a> Here..
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
	</body>
</html>