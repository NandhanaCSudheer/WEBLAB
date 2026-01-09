<?php
$con = mysqli_connect('localhost', 'root', '', 'student');

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$sq1 = "SELECT Rollno FROM register";
$result = mysqli_query($con, $sq1);

if (isset($_POST['submit'])) {

    $m1    = $_POST['m1'];
    $m2    = $_POST['m2'];
    $m3    = $_POST['m3'];
    $total = $_POST['total'];
    $rollno  = $_POST['rollno']; 

    
    $sq2 = "SELECT Rollno FROM markentry WHERE Rollno='$rollno'";
    $result1 = mysqli_query($con, $sq2);

    if (mysqli_num_rows($result1) > 0) {

        $sq3 = "UPDATE markentry 
                SET Science='$m1', Maths='$m2', English='$m3', Total='$total'
                WHERE Rollno='$rollno'";

    } else {

        
        $sq3 = "INSERT INTO markentry (Rollno, Science, Maths, English, Total)
                VALUES ('$rollno', '$m1', '$m2', '$m3', '$total')";
    }

    
    if (mysqli_query($con, $sq3)) {
        echo "<h3 style='color:green; text-align:center;'>✔ Student Marks Saved Successfully!</h3>";
    } else {
        echo "<h3 style='color:red; text-align:center;'>❌ Error: " . mysqli_error($con) . "</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks Entry</title>
</head>
<body>
    <center><h2>Student Marks Entry</h2></center>

    <form method="post">
        <label>Rollno:</label>
        <select name="rollno" required>
            <option value="">-- Select Roll Number --</option>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?= $row['Rollno']; ?>"><?= $row['Rollno']; ?></option>
            <?php } ?>
        </select>
        
        <br><br>

        <label>Science:</label><input type="text" name="m1" id="m1"><br><br>
        <label>Maths:</label><input type="text" name="m2" id="m2"><br><br>
        <label>English:</label><input type="text" name="m3" id="m3"><br><br>
        <label>Total Marks:</label><input type="text" name="total" id="total"><br><br>

        <input type="button" onclick="calc()" value="Calculate total Marks">
        <input type="submit" name="submit" value="Save"><br><br>
    </form>

    <script>
        function calc(){
            let x=parseFloat(document.getElementById("m1").value)||0;
            let y=parseFloat(document.getElementById("m2").value)||0;
            let z=parseFloat(document.getElementById("m3").value)||0;
            document.getElementById("total").value = x + y + z;
        }
    </script>

</body>
</html>
