<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a26 = $_POST['a26'];
    $at26=$_POST['at26'];
    $str="UPDATE answer1 SET a26='$a26',at26='$at26' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q27.php");
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
    </style>
    <script type="text/javascript">
      var formInitializationTime = new Date();
      function submitDuration() {
        document.temp.at26.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 26</h1>
      <h2>Colour of 9</h2>
      <img src="image/47.jpg" alt="imgbox" height=250px width=500px>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q26.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a26" value="Violet" class="form-control:focus" required />Violet<br>
                <input type="radio" name="a26" value="Silver" class="form-control:focus" required />Silver<br>
                <input type="radio" name="a26" value="Pink" class="form-control:focus" required />Pink<br>
                <input type="radio" name="a26" value="Blue" class="form-control:focus" required />Blue 
              </div>
              <input type="hidden" name="at26" value="0" />
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