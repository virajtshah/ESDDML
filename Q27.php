<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a27 = $_POST['a27'];
    $at27=$_POST['at27'];
    $str="UPDATE answer1 SET a27='$a27',at27='$at27' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q28.php");
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
        document.temp.at27.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 27</h1>
      <h2>More number of shapes are of</h2>
      <img src="image/52.jpg" alt="imgbox" height=250px width=500px>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q27.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a27" value="Circle" class="form-control:focus" required />Circle<br>
                <input type="radio" name="a27" value="Hearts" class="form-control:focus" required />Hearts<br>
                <input type="radio" name="a27" value="Rectangle" class="form-control:focus" required />Rectangle<br>
                <input type="radio" name="a27" value="Pentagon" class="form-control:focus" required />Pentagon 
              </div>
              <input type="hidden" name="at27" value="0" />
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