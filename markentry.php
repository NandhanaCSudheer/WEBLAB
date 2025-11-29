<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <center><h2>Student Mark Entry Page</h2></center>
   <form method="post">
    <label>Rollno:</label><input type="text" name="rollno"><br><br>
    <label>Science:</label><input type="text" name="m1" id="m1"><br><br>
    <label>Maths:</label><input type="text" name="m2" id="m2"><br><br>
     <label>English:</label><input type="text" name="m3" id="m3"><br><br>
    <label>Total Marks:</label><input type="text" name="total" id="total"><br><br>
    <input type="button" onclick="calc()" value="Calculate total Marks">
  <input type="submit" name="submit"><br><br>
</form>

    <script>
        function calc(){
        let x=parseFloat(document.getElementById("m1").value)||0;
        let y=parseFloat(document.getElementById("m2").value)||0;
        let z=parseFloat(document.getElementById("m3").value)||0;
        document.getElementById("total").value=x+y+z;
        }
        </script>
    


</body>
</html>
<?php
if(isset($_POST["submit"])){
     $con=mysqli_connect('localhost','root','','student');
    if(!$con){
        die("connection failed".mysqli_connect_error());
    }
$rollno=$_POST["rollno"];
$m1=$_POST["m1"];
$m2=$_POST["m2"];
$m3=$_POST["m3"];
$total=$_POST["total"];

$sq="insert into markentry value('$rollno','$m1','$m2','$m3','$total')";
    if(mysqli_query($con,$sq)){
        echo "<script>alert('student mark entered successfully ');</script>";
    }
    else{
        echo "<script>alert('Mark entry failed')</script>";
    }
}