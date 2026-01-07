<?php
    if(isset($_POST["submit"])){
    $con=mysqli_connect('localhost','root','','Book');
    if(!$con){
        die("connection failed".mysqli_connect_error());
    }
    $edition=$_POST["ed"];
    $title=$_POST["tit"];
    $author=$_POST["aut"];
    $publisher=$_POST["pub"];
    $sq="INSERT into bookdata values('$title','$edition','$author','$publisher')";
    if(mysqli_query($con,$sq)){
        echo "<script>alert('Data Insertion Successful ');</script>";
    }
    else{
        echo "<script>alert('Data Insertion failed')</script>";
    }
}
?>