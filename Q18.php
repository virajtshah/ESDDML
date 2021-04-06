<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a18 = $_POST['a18'];
    $at18=$_POST['at18'];
    $str="UPDATE answer1 SET a18='$a18',at18='$at18' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q19.php");
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
        document.temp.at18.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 18</h1>
      <h2>Count W in place of M in MMWMWMWWMMWWMM</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q18.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a18" value="8" class="form-control:focus" required />&nbsp  8<br>
                <input type="radio" name="a18" value="9" class="form-control:focus" required />&nbsp 9 <br>
                <input type="radio" name="a18" value="10" class="form-control:focus" required />&nbsp 10 <br>
                <input type="radio" name="a18" value="11" class="form-control:focus" required />&nbsp  11
              </div>
              <input type="hidden" name="at18" value="0" />
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