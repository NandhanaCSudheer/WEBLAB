<?php
if(isset($_POST['el'])){
$u=$_POST['el'];
$base=10;
$r1=0.15;
$r2=0.20;
$bill=($u<=100)?$base+($u*$r1):
$base+(100*$r1)+(($u-100)*$r2);
echo "<p>Electricity Usage: $u kWh</p>";
echo "<p>Bill Amount: $".$bill."</p>";
}
else{
    echo "<p>No usage data submitted.</p>";
}
?>