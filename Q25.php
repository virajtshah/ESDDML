<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a25 = $_POST['a25'];
    $at25=$_POST['at25'];
    $str="UPDATE answer1 SET a25='$a25',at25='$at25' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q26.php");
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
        document.temp.at25.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 25</h1>
      <h2>which story is piggy Mumma telling</h2>
      <img src="image/46.jpg" alt="imgbox" height=250px width=500px>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q25.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a25" value="Piggy Daddy" class="form-control:focus" required />Piggy Daddy<br>
                <input type="radio" name="a25" value="Sport" class="form-control:focus" required />Sport <br>
                <input type="radio" name="a25" value="Duck" class="form-control:focus" required />Duck <br>
                <input type="radio" name="a25" value="Flower" class="form-control:focus" required />Flower 
              </div>
              <input type="hidden" name="at25" value="0" />
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