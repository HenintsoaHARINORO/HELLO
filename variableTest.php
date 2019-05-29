<?php
define("PI", "3.14");
$numb1=19;
$numb2=35;
$bool=true;
$char="Hello";
$numb="4";
$test=array("white","yellow","red");
if(is_integer($numb1)&&is_integer($numb2)){
	$res=$numb1+$numb2;
	echo $numb1."+".$numb2."=".$res;
}else{
	echo "they are not integers";
}
echo "<hr>";
echo $numb.' is a character not a number'.'<br>';
$num=(integer)($numb);
$res1=$numb+$numb2;
echo $numb.'+'.$numb2.'='.$res1;
echo"<br>";
echo "tha value of PI is ". PI;
?>