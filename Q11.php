<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a11 = $_POST['a11'];
    $at11=$_POST['at11'];
    $str="UPDATE answer1 SET a11='$a11',at11='$at11' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q12.php");
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
        document.temp.at11.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 11</h1>
      <h2>Can you reverse this number 78451</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q11.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a11" value="15478" class="form-control:focus" required />&nbsp 15478 <br>
                <input type="radio" name="a11" value="15847" class="form-control:focus" required />&nbsp 15847 <br>
                <input type="radio" name="a11" value="15487" class="form-control:focus" required />&nbsp 15487<br>
                <input type="radio" name="a11" value="17854" class="form-control:focus" required />&nbsp 17854
              </div>
              <input type="hidden" name="at11" value="0" />
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