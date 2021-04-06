<?php
    include('dbconfig.php');
    session_start();
    if(!(isset($_SESSION['name'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Welcome</title>
<link rel="stylesheet" href="css/app.css" />
<link rel="stylesheet" href="css/well.css" />
</head>
<body>
    <div class="header">
        <h3>ESDDML</h3>
    </div>

    <div class="topnav">
        <a href="#">Home</a>
        <a href="#">Check Your Result</a>
        <a href="logout.php">Logout</a>
      </div>

    <div class="row">
        <div class="column">
            <h3 align="center">Disclaimer</h3>
            <iframe src="FYP.pdf#toolbar=0" width="100%" height="500px">
            </iframe>
        </div>
        <div class="column">
            <div id="home" class="flex-center flex-column">
                <h1> Please Give the Quiz Only Once</h1> 
                <h3>If you agree than click on start button</h3>
                <a class="btn" href="Q1.php">Start</a>
              </div>
        </div>
      </div>
</body>
</html>

    