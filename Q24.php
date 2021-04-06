<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a24 = $_POST['a24'];
    $at24=$_POST['at24'];
    $str="UPDATE answer1 SET a24='$a24',at24='$at24' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q25.php");
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
        document.temp.at24.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 24</h1>
      <h2>where is mongoose standing</h2>
      <img src="image/45.jpg" alt="imgbox" height=250px width=500px>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q24.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a24" value="Kingdom Plantae" class="form-control:focus"required/>Kingdom Plantae<br>
                <input type="radio" name="a24" value="Kingdom Fungi" class="form-control:focus" required />Kingdom Fungi <br>
                <input type="radio" name="a24" value="Kingdom Monera" class="form-control:focus" required />Kingdom Monera <br>
                <input type="radio" name="a24" value="Kingdom Animalia" class="form-control:focus" required />Kingdom Animalia
              </div>
              <input type="hidden" name="at24" value="0" />
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