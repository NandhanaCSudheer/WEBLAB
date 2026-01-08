<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
</head>
<body>
    <center><h1>Update Book</h1></center>
    <form method="POST" >
        <table align="center" border="2">
            <tr>
                <td>Title:</td><td><?php 
                $con=mysqli_connect('localhost','root','','library');
                if(!$con){
                die("Connection failed".mysqli_connect_error());
            }
                $sq="SELECT * from book";
                $result=mysqli_query($con,$sq);
                ?>
                <select name="title"><option value=" ">Select Title</option>
                <?php
                while($row=mysqli_fetch_assoc($result)){?>
                    <option value="<?php echo $row['title'];?>"><?php echo $row['title'];?></option>
        
               <?php 
               }
        ?>
        </select></td>
                <tr>
                <td>Edition: </td><td><input type="number" name="ed" id="ed"></td></tr>
                <tr>
                <td>Author: </td><td><input type="text" name="aut" id="aut"></td></tr>
                <tr>
                <td>Publisher: </td><td><input type="text" name="pub" id="pub"></td></tr>
                <tr><td><input type="reset" name="reset" id="reset" value="RESET"></td>
                <td><input type="submit" name="submit" id="submit" value="SUBMIT"></td></tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $con=mysqli_connect('localhost','root','','library');
                if(!$con){
                die("Connection failed".mysqli_connect_error());
            }
        $title=$_POST["title"];
        $ed=$_POST["ed"];
        $aut=$_POST["aut"];
        $pub=$_POST["pub"];
        $sq1="UPDATE book SET edition='$ed',author='$aut',publisher='$pub'where title='$title'";
        if(mysqli_query($con,$sq1)){
            echo "<script>alert(' Book updated successful');</script>";
        }
        else{
            echo "<script>alert('Book' updation failed');</script>";
        }
}
?>