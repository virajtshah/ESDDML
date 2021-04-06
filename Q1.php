<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a1 = $_POST['a1'];
    $at1=$_POST['at1'];
    $str="INSERT INTO answer1 "."(name,a1,at1) "."VALUES ('$name','$a1','$at1')";
    $result=mysqli_query($con,$str);
    header("location:Q2.php");
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
        document.temp.at1.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 1</h1>
      <h2>Choose the word that is spelled correctly.</h2>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q1.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a1" value="Acepted" class="form-control:focus" required />Acepted<br>
                <input type="radio" name="a1" value="Acceppted " class="form-control:focus" required />Acceppted <br>
                <input type="radio" name="a1" value="Axcepted " class="form-control:focus" required />Axcepted <br>
                <input type="radio" name="a1" value="Accepted" class="form-control:focus" required />Accepted 
              </div>
              <input type="hidden" name="at1" value="0" />
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