<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <center><h2>Login Page</h2></center>
    <form action="", method="post">
        <table border="1" align="center"><tr><td>
        <center><label>Username:</label></td><td><input type="text" name="uname"><br></center><br><br></td></tr>
        <tr><td><center><label>Password:</label></td><td><input type="text" name="pass"><br></center></td></tr>
       <tr><td> <center><input type="submit" name="submit"><br></center><td><tr></table></form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $con=mysqli_connect('localhost','root','','student');
    if(!$con){
        die("connection failed".mysqli_connect_error());
    }

    $uname=$_POST["uname"];
    $pass=$_POST["pass"];
    $sq="select username,password from login where username='$uname' AND password='$pass'";
    $result=mysqli_query($con,$sq);
    if(mysqli_num_rows($result)==1){
        echo "<script>alert('login successfully');window.location.href='reg.html'</script>";
    }
    else{
        echo "<script>alert('invalid username and password')</script>";
    }
    }
    ?>