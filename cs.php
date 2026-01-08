<?php
session_start();
$_SESSION["maths"] = $_POST["maths"];
?>
<!DOCTYPE html>
<html>
<head>
<title>Online Test - CS</title>
</head>
<body>

<center><h1>Online Test</h1></center>
<h2>CS</h2>

<form action="english.php" method="POST" onsubmit="return cal2()">

Q1. What is CSS?<br>
<input type="radio" name="q1" id="d">Cascading Style Sheet<br>
<input type="radio" name="q1">Computer Style Sheet<br>
<input type="radio" name="q1">Compiler Style Structure<br><br>

Q2. What is extension of javascript?<br>
<input type="radio" name="q2">jv<br>
<input type="radio" name="q2" id="e">js<br>
<input type="radio" name="q2">jp<br>
<input type="radio" name="q2">jpt<br><br>

Q3. What is port number of HTTP?<br>
<input type="radio" name="q3" id="f">50<br>
<input type="radio" name="q3">62<br>
<input type="radio" name="q3">70<br>
<input type="radio" name="q3">144<br><br>

<input type="hidden" name="cs" id="cs">
<input type="submit" value="NEXT">

</form>

<script>
function cal2(){
    let s = 0;
    if(d.checked) s++;
    if(e.checked) s++;
    if(f.checked) s++;

    document.getElementById("cs").value = s;
    return true;
}
</script>

</body>
</html>
