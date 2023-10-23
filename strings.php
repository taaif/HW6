<?php
$string = "Taaif Ayaad";
echo $string;
echo "<br>";
//lowercase
echo strtolower($string);
echo "<br>";
//uppercase
echo strtoupper($string);
echo "<br>";
//string length
echo strlen($string);
echo "<br>";
$string[5] = "n";
echo $string;
echo "<br>";
//string replace
echo str_replace("Taaif", "Samar", $string);
echo "<br>";
echo substr($string, 4);



?>