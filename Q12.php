<?php
	include("dbconfig.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	    
    $name = $_COOKIE["name"];
    $a12 = $_POST['a12'];
    $at12=$_POST['at12'];
    $str="UPDATE answer1 SET a12='$a12',at12='$at12' WHERE name='$name' ";
    $result=mysqli_query($con,$str);
    header("location:Q13.php");
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
        document.temp.at12.value=(new Date() - formInitializationTime)}
    </script>
  </head>
  <body >
    <section class="login first grey">
			<div class="container">
      <h1>Question 12</h1>
      <h2>Can you tell Highest four digit number? (in numeric)</h2>
      <div class="box-wrapper">				
        <div class="box box-border">
          <div class="box-body">
            <form method="post" name="temp" action="Q12.php" enctype="multipart/form-data" onsubmit="submitDuration();">
              <div class="form-group">
                <input type="radio" name="a12" value="8888" class="form-control:focus" required />&nbsp 8888 <br>
                <input type="radio" name="a12" value="9999" class="form-control:focus" required />&nbsp 9999 <br>
                <input type="radio" name="a12" value="1111" class="form-control:focus" required />&nbsp 1111 <br>
                <input type="radio" name="a12" value="5555" class="form-control:focus" required />&nbsp 5555 
              </div>
              <input type="hidden" name="at12" value="0" />
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