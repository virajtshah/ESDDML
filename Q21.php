<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a21 = $_POST['a21'];
    $at21=$_POST['at21'];
    $str="UPDATE answer1 SET a21='$a21',at21='$at21' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q22.php");
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
        document.temp.at21.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 21</h1>
      <h2>Count red colour figure in rectangle box with letter A</h2>
      <img src="image/31.jpg" alt="imgbox" height=250px width=500px>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q21.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a21" value="3" class="form-control:focus" required />3<br>
                <input type="radio" name="a21" value="4" class="form-control:focus" required />4 <br>
                <input type="radio" name="a21" value="2" class="form-control:focus" required />2 <br>
                <input type="radio" name="a21" value="5" class="form-control:focus" required />5 
              </div>
              <input type="hidden" name="at21" value="0" />
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