<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a9 = $_POST['a9'];
    $at9=$_POST['at9'];
    $str="UPDATE answer1 SET a9='$a9',at9='$at9' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q10.php");
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
        document.temp.at9.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 9</h1>
      <h2>It's ____ in the night</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q9.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a9" value="Black" class="form-control:focus" required />&nbsp Black <br>
                <input type="radio" name="a9" value="Darker " class="form-control:focus" required />&nbsp Darker  <br>
                <input type="radio" name="a9" value="Dark" class="form-control:focus" required />&nbsp Dark <br>
                <input type="radio" name="a9" value="Darkest " class="form-control:focus" required />&nbsp Darkest  
              </div>
              <input type="hidden" name="at9" value="0" />
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