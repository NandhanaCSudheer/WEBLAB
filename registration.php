<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <center><h1>Registration Page</h1></center>
    <form name="myform" method="POST" onsubmit="return validate()">
        <table align="center" border="2">
            <tr>
                <td>Name: </td><td><input type="text" name="name" id="name"></td></tr>
                <tr>
                <td>Address: </td><td><textarea name="addr" id="addr"></textarea></td></tr>
                <tr>
                <td>Email: </td><td><input type="email" name="email" id="email"></td></tr>
                <tr>
                <td>Password: </td><td><input type="password" name="pass" id="pass"></td></tr>
                <tr>
                <td>Re-type password: </td><td><input type="password" name="repass" id="repass"></td></tr>
                <tr>
                <td>Phone Number: </td><td><input type="text" name="phno" id="phno"></td></tr>
                <tr><td><input type="reset" name="reset" id="reset" value="RESET"></td>
                <td><input type="submit" name="submit" id="submit" value="SUBMIT"></td></tr></tr>
    </table>
</form>
<script>
    function validate(){
        let n=document.forms["myform"]["name"].value;
        let ad=document.forms["myform"]["addr"].value;
        let e=document.forms["myform"]["email"].value;
        let p=document.forms["myform"]["pass"].value;
        let rp=document.forms["myform"]["repass"].value;
        let ph=document.forms["myform"]["phno"].value;
        let mail=/^[a-zA-Z0-9._%_\-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if(n===""||!isNan(n)){
            alert("Name can't be empty and must be a string");
            return false;
        }
        else if(e===""||!e.match(mail)){
            alert("Enter a valid email id");
            return false;
        }
        else if(p===""||rp===""){
            alert("Password can't be empty");
            return false;
        }
        else if(p.length<6||rp.length<6){
            alert("Password must contain atleast 6 characters");
        }
        else if(p1==rp){
            alert("password doesn't match");
        }
        else if(ph===""){
            alert("Phone Number can't be empty");
            return false;
        }
        else if(ph.length!==10){
            alert("Phone Number must contain exactly 10 digits");
            return false;
        }
        return true;
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
        $n=$_POST["name"];
        $ad=$_POST["addr"];
        $e=$_POST["email"];
        $p=$_POST["pass"];
        $ph=$_POST["phno"];
        $sq="INSERT into register values('$n','$ad','$e','$p','$ph')";
        if(mysqli_query($con,$sq)){
            echo "<script>alert('Registration successful');</script>";
        }
        else{
            echo "<script>alert('Registration failed');</script>";
        }
    }
?>