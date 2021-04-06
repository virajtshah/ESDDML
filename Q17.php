<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a17 = $_POST['a17'];
    $at17=$_POST['at17'];
    $str="UPDATE answer1 SET a17='$a17',at17='$at17' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q18.php");
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
        document.temp.at17.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 17</h1>
      <h2>Total number of digits in 3417151</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q17.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a17" value="5" class="form-control:focus" required />&nbsp 5 <br>
                <input type="radio" name="a17" value="6" class="form-control:focus" required />&nbsp 6 <br>
                <input type="radio" name="a17" value="7" class="form-control:focus" required />&nbsp 7 <br>
                <input type="radio" name="a17" value="8" class="form-control:focus" required />&nbsp 8 
              </div>
              <input type="hidden" name="at17" value="0" />
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