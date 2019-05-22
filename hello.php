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
</body>
</html>
