<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <center><h2>Student Registration Page</h2></center>
   <form method="post">
    <label>Rollno:</label><input type="text" name="rollno"><br><br>
    <label>Name:</label><input type="text" name="name"><br><br>
    <label>Address:</label><textarea name="addr"></textarea><br><br>
    <label>Phno:</label><input type="number" name="phno"><br><br>
    <label>Username:</label><input type="text" name="uname"><br><br>
    <label>Password:</label><input type="text" name="pass"><br><br>
    <label>Retype-password:</label><input type="text" name="repass"><br><br>
   <input type="submit" name="submit"><br><br>
</form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $con=mysqli_connect('localhost','root','','student');
    if(!$con){
        die("connection failed".mysqli_connect_error());
    }
    $rollno=$_POST["rollno"];
    $name=$_POST["name"];
    $addr=$_POST["addr"];
    $phno=$_POST["phno"];
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];
    $repass=$_POST["repass"];
    if ($pass!=$repass){
        echo "<script>alert('Password doen't match!!!')";
    }
    else{
    $sq="insert into register value('$rollno','$name','$addr','$phno','$uname','$pass')";
    if(mysqli_query($con,$sq)){
        echo "<script>alert('student registered successfully ');</script>";
    }
    else{
        echo "<script>alert('invalid username and password')</script>";
    }
    }
    
}
    ?>
