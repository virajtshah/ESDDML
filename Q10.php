<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a10 = $_POST['a10'];
    $at10=$_POST['at10'];
    $str="UPDATE answer1 SET a10='$a10',at10='$at10' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q11.php");
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
        document.temp.at10.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 10</h1>
      <h2>What language you hear when someone says Good morning ?</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q10.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a10" value="Hindi" class="form-control:focus" required />&nbsp Hindi <br>
                <input type="radio" name="a10" value="English" class="form-control:focus" required />&nbsp English <br>
                <input type="radio" name="a10" value="Tamil" class="form-control:focus" required />&nbsp Tamil <br>
                <input type="radio" name="a10" value="Telugu" class="form-control:focus" required />&nbsp Telugu
              </div>
              <input type="hidden" name="at10" value="0" />
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