<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths</title>
</head>
<body>
    <center><form method="POST">
        <h2>Q1. What is 2+2?</h2><br>
        A.<input type="radio" id="a1" name="a">1<BR>
        B.<input type="radio" id="a2" name="a">2<BR>
        C.<input type="radio" id="a3" name="a">4<BR>
        D.<input type="radio" id="a4" name="a">3<BR><BR>
    
    <h2>Q2. What is 25%of 100?</h2><br>
        A.<input type="radio" id="b1" name="b">50<BR>
        B.<input type="radio" id="b2" name="b">25<BR>
        C.<input type="radio" id="b3" name="b">30<BR>
        D.<input type="radio" id="b4" name="b">40<BR><BR>

    <h2>Q3. What is 4!?</h2><br>
        A.<input type="radio" id="c1" name="c">6<BR>
        B.<input type="radio" id="c2" name="c">4<BR>
        C.<input type="radio" id="c3 " name="c">16<BR>
        D.<input type="radio" id="c4" name="c">24<BR><BR>
        <input type="button" id="but" name="but" value="Calculate Marks" onclick="cal1()"><input type="text" id="m" name="m"><br>
            <input type="submit" name="submit" id="submit" value="SUBMIT">

    </center></form>
    <a href="next.php">NEXT</a>
    <script>
        function cal1(){
            m=0;
            if(document.getElementById("a3").checked){
                m++;
            }
            if(document.getElementById("b2").checked){
                m++;
            }
            if(document.getElementById("c4").checked){
                m++;
            }
            document.getElementById("m").value=m;
        }
        </script>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $_SESSION["m"]=$_POST["m"];
}
?>