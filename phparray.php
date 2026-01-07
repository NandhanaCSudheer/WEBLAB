
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Indian Cricket players</h1><br><br></center>
    <?php
    $arr=["Sachin","Virat","Jadeja","Aswin"];
    echo "<table align='center'> <tr><th>SL.No</th><th>Name</th>";
    foreach($arr as $i=>$p)
        echo "<tr><td>".($i+1)."</td><td>".$p."</td></tr>";
?>
</body>
</html>