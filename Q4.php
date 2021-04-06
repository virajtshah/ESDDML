<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a4 = $_POST['a4'];
    $at4=$_POST['at4'];
    $str="UPDATE answer1 SET a4='$a4',at4='$at4' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q5.php");
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
        document.temp.at4.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 4</h1>
      <h2>A collection of maps and geographic information</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q4.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a4" value="Almanac " class="form-control:focus" required />&nbsp Almanac  <br>
                <input type="radio" name="a4" value="Atlas " class="form-control:focus" required />&nbsp Atlas  <br>
                <input type="radio" name="a4" value="Dictionary " class="form-control:focus" required />&nbsp Dictionary  <br>
                <input type="radio" name="a4" value="Geographic dictionary" class="form-control:focus" required />&nbsp Geographic dictionary 
              </div>
              <input type="hidden" name="at4" value="0" />
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