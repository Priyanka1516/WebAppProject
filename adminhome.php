<?php

session_start();





if(!isset($_SESSION["username"]))

{

	header("location:login.php");

}



?>



<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>



<h1>This page belongs to Admin</h1><?php echo $_SESSION["username"] ?>

<a href="logout.php">Logout</a>

<br>


<div class="row">
	<div class="column">

      <img src="1.jpg" alt="flower" style="width:20%"> 
    
    </div>

    <div class="column">

      <img src="2.jpg" alt="snow" style="width:20%"> 
    
    </div>

    <div class="column">

      <img src="3.jpg" alt="sun" style="width:20%"> 
    
    </div>
 </div>




</body>

</html>