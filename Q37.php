<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a37 = $_POST['a37'];
    $at37=$_POST['at37'];
    $str="UPDATE answer1 SET a37='$a37',at37='$at37' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q38.php");
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
        document.temp.at37.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 37</h1>
      <h2>number for colour white</h2>
      <img src="image/47.jpg" alt="imgbox" height=250px width=500px>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q37.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a37" value="5" class="form-control:focus" required />5<br>
                <input type="radio" name="a37" value="16" class="form-control:focus" required />16 <br>
                <input type="radio" name="a37" value="7" class="form-control:focus" required />7<br>
                <input type="radio" name="a37" value="9" class="form-control:focus" required />9 
              </div>
              <input type="hidden" name="at37" value="0" />
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