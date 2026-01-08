<?php
$con=mysqli_connect('localhost','root','','library');
if(!$con){
    die("Connection failed!!!".mysqli_connect_error());
}
else{
    $sq="SELECT * FROM book";
    $result=mysqli_query($con,$sq);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search a Book</title>
</head>
<body><form method="POST">
    <center>
        <select name="title"><option value="">Select Title</option>
        <?php while($row=mysqli_fetch_assoc($result)){
            ?><option value="<?php echo $row['title'];?>"><?php echo $row['title'];?></option>
        <?php
    }
    ?>
        </select><br><br>
        <input type="submit" id="submit" name="submit" value="SEARCH">
    </center>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
$con=mysqli_connect('localhost','root','','library');
if(!$con){
    die("Connection failed!!!".mysqli_connect_error());
}
else{
 $t=$_POST["title"];
 $sq1="SELECT * from book where title='$t'";
 $res=mysqli_query($con,$sq1);
 while($rows=mysqli_fetch_assoc($res)){
    echo "<center>Title: ".$rows['title']."<br>Edition: ".$rows['edition']."<br>Author: ".$rows['author']."<br>Publisher: ".$rows['publisher']."</center>";
 }
}
}
?>