<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a7 = $_POST['a7'];
    $at7=$_POST['at7'];
    $str="UPDATE answer1 SET a7='$a7',at7='$at7' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q8.php");
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
        document.temp.at7.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 7</h1>
      <h2>Eating food in the morning is called ?</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q7.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a7" value="Breakfast" class="form-control:focus" required />&nbsp Breakfast <br>
                <input type="radio" name="a7" value="Brokefast" class="form-control:focus" required />&nbsp Brokefast <br>
                <input type="radio" name="a7" value="Breekfast" class="form-control:focus" required />&nbsp Breekfast <br>
                <input type="radio" name="a7" value="Breakfost" class="form-control:focus" required />&nbsp Breakfost
              </div>
              <input type="hidden" name="at7" value="0" />
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