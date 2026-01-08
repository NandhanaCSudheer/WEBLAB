<?php
session_start();

$_SESSION["english"] = $_POST["english"];

$maths = $_SESSION["maths"];
$cs = $_SESSION["cs"];
$english = $_SESSION["english"];

$total = $maths + $cs + $english;

echo "<h2>RESULT</h2>";
echo "Marks in Maths: $maths <br>";
echo "Marks in CS: $cs <br>";
echo "Marks in English: $english <br>";
echo "<b>Total Marks: $total</b>";
?>
