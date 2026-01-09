<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS</title>
</head>
<body>
    <center><form method="POST">
    Q1. What is CSS?<br>
<input type="radio" name="d" id="d1">Cascading Style Sheet<br>
<input type="radio" name="d" id="d2">Computer Style Sheet<br>
<input type="radio" name="d" id="d3">Compiler Style Structure<br><br>

Q2. What is extension of javascript?<br>
<input type="radio" name="e" id="e1">jv<br>
<input type="radio" name="e" id="e2">js<br>
<input type="radio" name="e" id="e3">jp<br>
<input type="radio" name="e" id="e4">jpt<br><br>

Q3. What is port number of HTTP?<br>
<input type="radio" name="f" id="f1">50<br>
<input type="radio" name="f" id="f2">62<br>
<input type="radio" name="f" id="f3">70<br>
<input type="radio" name="f" id="f4">144<br><br>
<input type="button" id="but" name="but" value="Calculate Marks" onclick="cal2()"><input type="text" id="c" name="c"><br>
            <input type="submit" name="sub" id="sub" value="SUBMIT">

    </center></form>
    <a href=".php">PREV</a>
    <script>
        function cal2(){
            c=0;
            if(document.getElementById("d1").checked){
                c++;
            }
            if(document.getElementById("e2").checked){
                c++;
            }
            if(document.getElementById("f1").checked){
                c++;
            }
            document.getElementById("c").value=c;
        }
        </script>
</body>
</html>
<?php
if(isset($_POST["sub"])){
    $m=$_SESSION["m"];
    $c=$_POST["c"];
    $t=$m+$c;
    echo "<center>Marks in Maths : ".$m."<br>Marks in CS: ".$c."<br>Total Marks: ".$t."</center>";
}
?>