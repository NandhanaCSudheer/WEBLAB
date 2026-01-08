<!DOCTYPE html>
<html>
<head>
<title>Online Test - Maths</title>
</head>
<body>

<center><h1>Online Test</h1></center>
<h2>Maths</h2>

<form action="cs.php" method="POST" onsubmit="return cal1()">

Q1. What is 35% of 100?<br>
<input type="radio" name="q1">25<br>
<input type="radio" name="q1">35.666<br>
<input type="radio" name="q1">36<br>
<input type="radio" name="q1" id="a">35<br><br>

Q2. What is 5^3?<br>
<input type="radio" name="q2" id="b">125<br>
<input type="radio" name="q2">625<br>
<input type="radio" name="q2">256<br>
<input type="radio" name="q2">500<br><br>

Q3. What is 2*3?<br>
<input type="radio" name="q3" id="c">6<br>
<input type="radio" name="q3">5<br>
<input type="radio" name="q3">2<br>
<input type="radio" name="q3">9<br><br>

<input type="hidden" name="maths" id="maths">
<input type="submit" value="NEXT">

</form>

<script>
function cal1(){
    let r = 0;
    if(a.checked) r++;
    if(b.checked) r++;
    if(c.checked) r++;

    document.getElementById("maths").value = r;
    return true;
}
</script>

</body>
</html>
