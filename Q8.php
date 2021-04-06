<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a8 = $_POST['a8'];
    $at8=$_POST['at8'];
    $str="UPDATE answer1 SET a8='$a8',at8='$at8' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q9.php");
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
        document.temp.at8.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 8</h1>
      <h2>An apple a day keeps a ______ away.</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q8.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a8" value="Docter" class="form-control:focus" required />&nbsp Docter <br>
                <input type="radio" name="a8" value="Dcotor" class="form-control:focus" required />&nbsp Dcotor <br>
                <input type="radio" name="a8" value="Doctor" class="form-control:focus" required />&nbsp Doctor<br>
                <input type="radio" name="a8" value="Dactar" class="form-control:focus" required />&nbsp Dactar 
              </div>
              <input type="hidden" name="at8" value="0" />
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