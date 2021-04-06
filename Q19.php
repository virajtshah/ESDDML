<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a19 = $_POST['a19'];
    $at19=$_POST['at19'];
    $str="UPDATE answer1 SET a19='$a19',at19='$at19' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q20.php");
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
        document.temp.at19.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 19</h1>
      <h2>Count 6 in 96966996669669669696</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q19.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a19" value="12" class="form-control:focus" required />&nbsp 12 <br>
                <input type="radio" name="a19" value="11" class="form-control:focus" required />&nbsp 11 <br>
                <input type="radio" name="a19" value="10" class="form-control:focus" required />&nbsp  10<br>
                <input type="radio" name="a19" value="9" class="form-control:focus" required />&nbsp  9
              </div>
              <input type="hidden" name="at19" value="0" />
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