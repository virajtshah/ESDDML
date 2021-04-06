<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a32 = $_POST['a32'];
    $at32=$_POST['at32'];
    $str="UPDATE answer1 SET a32='$a32',at32='$at32' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q33.php");
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
        document.temp.at32.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 32</h1>
      <h2>Colour of balloon at 3-B</h2>
      <img src="image/61.jpg" alt="imgbox" height=250px width=500px>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q32.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a32" value="White" class="form-control:focus" required />White<br>
                <input type="radio" name="a32" value="Black" class="form-control:focus" required />Black<br>
                <input type="radio" name="a32" value="Yellow" class="form-control:focus" required />Yellow <br>
                <input type="radio" name="a32" value="Green" class="form-control:focus" required />Green
              </div>
              <input type="hidden" name="at32" value="0" />
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