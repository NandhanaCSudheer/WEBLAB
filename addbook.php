<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
     <center><h1>Add new Book</h1></center>
    <form name="myform" method="POST" onsubmit="return book()">
        <table align="center" border="2">
            <tr>
                <td>Title: </td><td><input type="text" name="title" id="title"></td></tr>
                <tr>
                <td>Edition: </td><td><input type="number" name="ed" id="ed"></td></tr>
                <tr>
                <td>Author: </td><td><input type="text" name="aut" id="auts"></td></tr>
                <tr>
                <td>Publisher: </td><td><input type="text" name="pub" id="pub"></td></tr>
                <tr><td><input type="reset" name="reset" id="reset" value="RESET"></td>
                <td><input type="submit" name="submit" id="submit" value="SUBMIT"></td></tr></tr>
</table>
</form>
<script>
    function book(){
        let n=document.forms["myform"]["title"].value;
        let ad=document.forms["myform"]["ed"].value;
        let e=document.forms["myform"]["aut"].value;
        let p=document.forms["myform"]["pub"].value;
        if(n===""){
            alert("Title can't be empty ");
            return false;
        }
        if(ad===""||isNaN(ad)){
            alert("Edition can't be empty  and must be a number");
            return false;
        }
        if(e===""){
            alert("Author name can't be empty ");
            return false;
        }
        if(p===""){
            alert("Publisher name can't be empty ");
            return false;
        }
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
        $title=$_POST["title"];
        $ed=$_POST["ed"];
        $aut=$_POST["aut"];
        $pub=$_POST["pub"];
         $sq="INSERT into book values('$title','$ed','$aut','$pub')";
        if(mysqli_query($con,$sq)){
            echo "<script>alert('Added Book successful');</script>";
        }
        else{
            echo "<script>alert(Book Addition failed');</script>";
        }

    }
?>