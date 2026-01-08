<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
     <center><h1>Login Page</h1></center>
    <form name="myform" method="POST" onsubmit="return validateadmin()">
        <table align="center" border="2">
            <tr>
                <td>User Name: </td><td><input type="text" name="uname" id="uname"></td></tr>
                <tr>
                <td>Password: </td><td><input type="password" name="upass" id="upass"></td></tr>
                <tr><td><input type="reset" name="reset" id="reset" value="RESET"></td>
                <td><input type="submit" name="submit" id="submit" value="SUBMIT"></td></tr></tr>
    </table>
</form>
<script>
    function validateadmin(){
        let u=document.getElementById("uname").value;
        let p=document.getElementById("upass").value;
        if(u===""||!isNan(u)){
            alert("Name can't be empty and must be a string");
            return false;
        }
        else if(p===""){
            alert("Password can't be empty");
            return false;
        }
        else if(p.length<6){
            alert("Password must contain atleast 6 characters");
    }return true;
}
</script>
</body>
</html>
<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
        $con=mysqli_connect('localhost','root','','library');
        if(!$con){
            die("Connection failed".mysqli_connect_error());
        }
        $uname=$_POST["uname"];
        $upass=$_POST["upass"];
        $sq="SELECT * from login where username='$uname' AND password='$upass'";
        $result=mysqli_query($con,$sq);
        if(mysqli_num_rows($result)==1){
            echo "<script>alert('Login Successfully');window.location.href='linked.html'</script>";
        }
        else{
            echo "<script>alert('Login Failed');</script>";
        }
    }
?>