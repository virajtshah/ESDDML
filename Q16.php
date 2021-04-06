<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a16 = $_POST['a16'];
    $at16=$_POST['at16'];
    $str="UPDATE answer1 SET a16='$a16',at16='$at16' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q17.php");
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
        document.temp.at16.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 16</h1>
      <h2>Write M in place of W and W in place of M: MMWMWMWW</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q16.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a16" value="WWMWWWMM" class="form-control:focus" required />&nbsp WWMWWWMM <br>
                <input type="radio" name="a16" value="WWMWMWWM" class="form-control:focus" required />&nbsp WWMWMWWM <br>
                <input type="radio" name="a16" value="WWMWMWMW" class="form-control:focus" required />&nbsp WWMWMWMW <br>
                <input type="radio" name="a16" value="WWMWMWMM" class="form-control:focus" required />&nbsp WWMWMWMM
              </div>
              <input type="hidden" name="at16" value="0" />
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