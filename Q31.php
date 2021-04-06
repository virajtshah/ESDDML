<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a31 = $_POST['a31'];
    $at31=$_POST['at31'];
    $str="UPDATE answer1 SET a31='$a31',at31='$at31' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q32.php");
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
        document.temp.at31.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 31</h1>
      <h2>Pink is mixture of</h2>
      <img src="image/57.jpg" alt="imgbox" height=250px width=500px>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q31.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a31" value="R + G" class="form-control:focus" required />R + G<br>
                <input type="radio" name="a31" value="G + B" class="form-control:focus" required />G + B<br>
                <input type="radio" name="a31" value="R + G + B" class="form-control:focus" required />	R + G + B <br>
                <input type="radio" name="a31" value="R + B " class="form-control:focus" required />R + B 
              </div>
              <input type="hidden" name="at31" value="0" />
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