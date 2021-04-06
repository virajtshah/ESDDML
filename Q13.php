<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a13 = $_POST['a13'];
    $at13=$_POST['at13'];
    $str="UPDATE answer1 SET a13='$a13',at13='$at13' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q14.php");
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
        document.temp.at13.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 13</h1>
      <h2>What is the sum of adding odd and even digit of 256981</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q13.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a13" value="29" class="form-control:focus" required />&nbsp 29 <br>
                <input type="radio" name="a13" value="30" class="form-control:focus" required />&nbsp 30<br>
                <input type="radio" name="a13" value="32" class="form-control:focus" required />&nbsp 32 <br>
                <input type="radio" name="a13" value="31" class="form-control:focus" required />&nbsp 31
              </div>
              <input type="hidden" name="at13" value="0" />
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