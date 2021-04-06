<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a20 = $_POST['a20'];
    $at20=$_POST['at20'];
    $str="UPDATE answer1 SET a20='$a20',at20='$at20' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q21.php");
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
        document.temp.at20.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 20</h1>
      <h2>Add 5rd digit and 9th digit of 1212121212122112121 (From left)</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q20.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a20" value="3" class="form-control:focus" required />&nbsp 3 <br>
                <input type="radio" name="a20" value="4" class="form-control:focus" required />&nbsp 4 <br>
                <input type="radio" name="a20" value="2" class="form-control:focus" required />&nbsp 2 <br>
                <input type="radio" name="a20" value="1" class="form-control:focus" required />&nbsp  1
              </div>
              <input type="hidden" name="at20" value="0" />
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