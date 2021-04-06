<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a14 = $_POST['a14'];
    $at14=$_POST['at14'];
    $str="UPDATE answer1 SET a14='$a14',at14='$at14' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q15.php");
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
        document.temp.at14.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 14</h1>
      <h2>In which season you get to have mango?</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q14.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a14" value="Summer" class="form-control:focus" required />&nbsp Summer <br>
                <input type="radio" name="a14" value="Sommer" class="form-control:focus" required />&nbsp Sommer <br>
                <input type="radio" name="a14" value="Sumer" class="form-control:focus" required />&nbsp Sumer <br>
                <input type="radio" name="a14" value="Summmer" class="form-control:focus" required />&nbsp Summmer 
              </div>
              <input type="hidden" name="at14" value="0" />
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