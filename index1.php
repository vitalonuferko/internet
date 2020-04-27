<?php
header('Content-Type: text/html; charset=utf-8');


// Читання з файлу і збереження вмісту у вигляді масиву в
$fileContent = file('log.txt');
// Проходження циклом по масиву $fileContent і вивід кожного рядка
foreach ($fileContent as $oneLine) {
 echo $oneLine ."<br>";
}


?>
