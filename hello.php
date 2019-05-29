<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
	<link rel="stylesheet" type="text/css" href="hello.css">
</head>
<body>
	<p>Today is 
        <span id="date"> <?php 
          echo  date('l');
         ?>
         </span>
</p>
<h1>Hello everybody </h1>
<h2>Her name is <label id="nom"><?php include("head.php")?></label></h2>
<hr>
<section>
	<p>Variables testing</p>
	<?php
	include("variableTest.php");
	?>
</section>
<hr>
<section>
	<p>Array</p>
	<?php
	include("array.php");
	?>
</section>
</body>
</html>
