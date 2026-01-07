<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <center><h1>DATA ENTRY</h1></center>
    <center>
        <form method="POST" onsubmit="return func()">
        <h2>ID: <input type="text" id="id" name="id"><br>
        <h2>Name: <input type="text" id="name" name="name"><br>
        <h2>Salary: <input type="text" id="sal" name="sal"><br>
        <input type="submit" id="b1" name="b1" value="INSERT">
</form>
<script>
    function func(){
    let x=document.getElementById("id").value;
    let name=document.getElementById("name").value;
    let sal=document.getElementById("sal").value;
    if(x===""||name===""||sal===""){
        alert("Please fill all the fields");
        return false;
    }
    return true;
}
    </script>
    </center>
    <?php
    if(isset($_POST["b1"])){
        $con=mysqli_connect('localhost','root','','office');
        if(!$con){
            die("connection failed".mysqli_connect_error());
        }
        $id=$_POST["id"];
        $name=$_POST["name"];
        $sal=$_POST["sal"];
        $sq="INSERT into data values('$id','$name','$sal')";
        if(mysqli_query($con,$sq)){
        echo "<script>alert('Data Insertion Successful ');window.location.href='updateop.php';</script>";
    }
    else{
        echo "<script>alert('Data Insertion failed')</script>";
    }
        
    }
    ?>
</body>
</html>