<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $con=mysqli_connect('localhost','root','','office');
        if(!$con){
            die("connection failed".mysqli_connect_error());
        }
        $sq="SELECT id from data";
        $result=mysqli_query($con,$sq);
        ?><form method="POST">  
    <input type="submit" id="b2" name="b2" value="UPDATE">
    <input type="submit" id="b3" name="b3" value="DELETE">
    <input type="submit" id="b4" name="b4" value="SEARCH">
        <label>ID:</label>
        <select name="id" required>
            <option value="">-- Select ID --</option>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?= $row['id']; ?>"><?= $row['id']; ?></option>
            <?php } ?>
        </select>
        <br><br>
        <h2>Name: <input type="text" id="name" name="name"><br>
        <h2>Salary: <input type="text" id="sal" name="sal"><br></form>
        <?php
        if(isset($_POST["b2"])){
        $id=$_POST["id"];
        $name=$_POST["name"];
        $sal=$_POST["sal"];
        $sq1="UPDATE data SET name='$name',salary='$sal' WHERE id='$id'";
        if(mysqli_query($con,$sq1)){
            echo "<script>alert('Updated Successfully');window.location.href='updateop.php'</script>";
        }
        else{
            echo "<script>alert('Updation failed');</script>";
        }
    }
        else if(isset($_POST["b4"])){
        $id=$_POST["id"];
        $sq2="SELECT * FROM data WHERE id='$id'";
        $result=mysqli_query($con,$sq2);
        if(mysqli_num_rows($result)==1){
            while($row=mysqli_fetch_assoc($result)){
                echo $row['id'];
                echo $row['name'];
                echo $row['salary'];
            }
        }
    }
    ?>
    </body>
</html>