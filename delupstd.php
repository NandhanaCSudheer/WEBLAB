<?php
$con = mysqli_connect("localhost", "root", "", "student");
if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
$sq1 = "SELECT Rollno FROM register";
$result = mysqli_query($con, $sq1);


if (isset($_POST['update'])) {
    $roll  = $_POST['rollno'];
    $addr  = $_POST['newaddr'];
    $phone = $_POST['newphn'];

    $sq2 = "UPDATE register 
    
           SET Address='$addr', Phno='$phone'
           WHERE Rollno='$roll'";
    if (mysqli_query($con, $sq2)){
        echo "<script>alert('student detials updated successfully ');</script>";
    }
    else{
        echo "<script>alert('Updation failed')</script>";
    }
    
}

if (isset($_POST['delete'])) {
    $r = $_POST['delete'];
    $sl="DELETE FROM register WHERE Rollno='$r'";
    if(mysqli_query($con, $sl)){
             echo "<script>alert('student detials deleted successfully ');</script>";
    }
    else{
        echo "<script>alert('Deletion failed')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<body>



<h3>Update Address & Phone</h3>
<form method="post">
Select Rollno:
 <label>Rollno:</label>
        <select name="rollno" required>
            <option value="">-- Select Roll Number --</option>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?= $row['Rollno']; ?>"><?= $row['Rollno']; ?></option>
            <?php } ?>
        </select>
        <br><br>

New Address: <input type="text" name="newaddr"><br><br>
New Phone: <input type="text" name="newphn"><br><br>

<input type="submit" name="update" value="Update">
</form>

<hr>

<h2>All Registered Students</h2>

<table border="1" cellpadding="8">
<tr>
    <th>Rollno</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Action</th>
</tr>

<?php
$data = mysqli_query($con, "SELECT * FROM register");
while ($row = mysqli_fetch_assoc($data)) {
    echo "<tr>
            <td>{$row['Rollno']}</td>
            <td>{$row['Name']}</td>
            <td>{$row['Address']}</td>
            <td>{$row['Phno']}</td>
            <td>
                <a href='?delete={$row['Rollno']}'>Delete</a>
            </td>
          </tr>";
}
?>
</table>

</body>
</html>
