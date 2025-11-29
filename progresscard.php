<?php
$con = mysqli_connect("localhost","root","","student");

if(!$con){
    die("Connection Failed");
}


$sql = mysqli_query($con,"SELECT * FROM markentry ORDER BY Total DESC LIMIT 1");
$topper = mysqli_fetch_assoc($sql);

?>
<!DOCTYPE html>
<html>
<body>

<h2>Progress Card</h2>

<form method="post">
Select Rollno:
<select name="rollno">
<?php
$r = mysqli_query($con,"SELECT Rollno FROM markentry");
while($row = mysqli_fetch_assoc($r)){
    echo "<option value='$row[Rollno]'>$row[Rollno]</option>";
}
?>
</select>

<input type="submit" name="submit" value="Show">
</form>

<br><br>

<?php
if(isset($_POST['submit'])){
    $roll = $_POST['rollno'];
    $q = mysqli_query($con,"SELECT * FROM markentry WHERE Rollno='$roll'");
    $s = mysqli_fetch_assoc($q);

    echo "<h3>Progress Card of Roll No: $roll</h3>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>Subject</th><th>Marks</th></tr>";
    echo "<tr><td>Science</td><td>$s[Science]</td></tr>";
    echo "<tr><td>Maths</td><td>$s[Maths]</td></tr>";
    echo "<tr><td>English</td><td>$s[English]</td></tr>";
    echo "<tr><th>Total</th><th>$s[Total]</th></tr>";
    echo "</table>";
}
?>

<br><br><hr>

<h2>Top Student</h2>

<table border="1" cellpadding="8">
<tr><th>Rollno</th><th>Total</th></tr>
<tr>
<td><?php echo $topper['Rollno']; ?></td>
<td><?php echo $topper['Total']; ?></td>
</tr>
</table>

</body>
</html>
