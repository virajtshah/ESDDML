<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a15 = $_POST['a15'];
    $at15=$_POST['at15'];
    $str="UPDATE answer1 SET a15='$a15',at15='$at15' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q16.php");
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
      btn {font- color:white}
    </style>
    <script type="text/javascript">
      var formInitializationTime = new Date();
      function submitDuration() {
        document.temp.at15.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 15</h1>
      <h2>Write M in place of 1 in 34171511</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q15.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a15" value="34M7M5WM" class="form-control:focus" required />&nbsp 34M7M5WM <br>
                <input type="radio" name="a15" value="34M7W5MM" class="form-control:focus" required />&nbsp 34M7W5MM <br>
                <input type="radio" name="a15" value="34M7M5MM" class="form-control:focus" required />&nbsp 34M7M5MM <br>
                <input type="radio" name="a15" value="34M7MM5M" class="form-control:focus" required />&nbsp 34M7MM5M 
              </div>
              <input type="hidden" name="at15" value="0" />
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