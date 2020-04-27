<?php
header('Content-Type: text/html; charset=utf-8');
$x= $_GET['x'];
$y= $_GET['y'];
echo "При x=$x,<br>y=$y<br>";
$z=sin($x)-sqrt($x*$y);
echo "Результат становить $z";

$file = fopen("log.txt", 'a');

fwrite($file, "$z\n");

fclose($file);

?>
