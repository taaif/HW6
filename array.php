
<form action="array.php" method="GET">
    <input type="text" name="xname">
    <input type="submit">
</form>


<?php
$xname = $_GET["xname"];


$family = [
    "Nour" => ["90","A"],
    "Majed" => ["80", "C"],
    "Anas" => ["40", "F"]
];

echo "Score: " . $family["$xname"][0];
echo "<br>";
echo "Grade: " . $family["$xname"][1];

?>