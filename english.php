<?php
session_start();
$_SESSION["cs"] = $_POST["cs"];
?>
<!DOCTYPE html>
<html>
<head>
<title>Online Test - English</title>
</head>
<body>

<center><h1>Online Test</h1></center>
<h2>English</h2>

<form action="result.php" method="POST" onsubmit="return cal3()">

Q1. What is rhyming word for night?<br>
<input type="radio" name="q1" id="g">light<br>
<input type="radio" name="q1">style<br>
<input type="radio" name="q1">nest<br><br>

Q2. Anu ___ playing hockey?<br>
<input type="radio" name="q2">are<br>
<input type="radio" name="q2" id="h">has<br>
<input type="radio" name="q2">is<br>
<input type="radio" name="q2">were<br><br>

<input type="hidden" name="english" id="english">
<input type="submit" value="VIEW RESULT">

</form>

<script>
function cal3(){
    let t = 0;
    if(g.checked) t++;
    if(h.checked) t++;

    document.getElementById("english").value = t;
    return true;
}
</script>

</body>
</html>
