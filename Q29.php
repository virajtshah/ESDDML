<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a29 = $_POST['a29'];
    $at29=$_POST['at29'];
    $str="UPDATE answer1 SET a29='$a29',at29='$at29' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q30.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Quiz</title>
    <link rel="stylesheet" href="css/Ques.css" />
    <link rel="stylesheet" href="css/form.css" />
    <style type="text/css">
      body { width: 100%; height: 100%; overflow: hidden; background-color:rgba(55, 0, 255, 0.397);}
    </style>
    <script type="text/javascript">
      var formInitializationTime = new Date();
      function submitDuration() {
        document.temp.at29.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 29</h1>
      <h2>Red is mixture of which two colours</h2>
      <img src="image/54.jpg" alt="imgbox" height=250px width=500px>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q29.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a29" value="Blue + yellow" class="form-control:focus" required />Blue + yellow<br>
                <input type="radio" name="a29" value="Blue + Purple" class="form-control:focus" required />Blue + Purple <br>
                <input type="radio" name="a29" value="Purple + orange" class="form-control:focus" required />Purple + orange <br>
                <input type="radio" name="a29" value="Yellow + orange" class="form-control:focus" required />Yellow + orange
              </div>
              <input type="hidden" name="at29" value="0" />
              <div id="home" class="flex-center flex-column">
                <button class="btn btn-primary btn-block" id="submit" name="submit" onclick=submitDuration() style="color:white">Next</button>
              </div>
            </form>
          </div>
        </div>
			</div>
		</section>
  </body>
</html>