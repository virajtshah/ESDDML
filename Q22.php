<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a22 = $_POST['a22'];
    $at22=$_POST['at22'];
    $str="UPDATE answer1 SET a22='$a22',at22='$at22' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q23.php");
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
        document.temp.at22.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 22</h1>
      <h2>Count the rectangle</h2>
      <img src="image/34.jpg" alt="imgbox" height=250px width=500px>
				<div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q22.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a22" value="13" class="form-control:focus" required />13<br>
                <input type="radio" name="a22" value="16" class="form-control:focus" required />16 <br>
                <input type="radio" name="a22" value="15" class="form-control:focus" required />15 <br>
                <input type="radio" name="a22" value="14" class="form-control:focus" required />14 
              </div>
              <input type="hidden" name="at22" value="0" />
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