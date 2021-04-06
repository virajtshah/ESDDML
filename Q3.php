<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a3 = $_POST['a3'];
    $at3=$_POST['at3'];
    $str="UPDATE answer1 SET a3='$a3',at3='$at3' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q4.php");
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
        document.temp.at3.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 3</h1>
      <h2>Which is a room where you can surf the internet? </h2>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q3.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a3" value="Art room " class="form-control:focus" required />Art room  <br>
                <input type="radio" name="a3" value="Music room " class="form-control:focus" required />Music room  <br>
                <input type="radio" name="a3" value=" Playground " class="form-control:focus" required /> Playground  <br>
                <input type="radio" name="a3" value="Computer room" class="form-control:focus" required />Computer room 
              </div>
              <input type="hidden" name="at3" value="0" />
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