<?php
$username = "Taaif";
$email = "ta@gmail.com";

if ($username === "Taaif" && $email === "ta@gmail.com") {
    echo "Welcom Admin";
}


echo "<br>";


$number1 = 20;
$number2 = 1;

if ($number1 > $number2) {
    echo "الرقم أكبر";

    if ($number1 == 20) {
        echo "<br>";
        echo "الرقم الاول عشرون";
    }
}elseif ($number1 < $number2) {
    echo "الرقم أضغر";
}else{
    echo "الرقم متساوي";
}


?>
