<?php
if(isset($_POST["button"])){
      $con=mysqli_connect('localhost','root','','Book');
    if(!$con){
        die("connection failed".mysqli_connect_error());
    }  
    $t=$_POST["book"];
    $sq1="SELECT * from bookdata where title='$t'";
    $result=mysqli_query($con,$sq1);
    while($row=mysqli_fetch_assoc($result)){
      echo "<tr>
        <td>{$row['title']}</td>
            <td>{$row['edition']}</td>
            <td>{$row['author']}</td>
            <td>{$row['publisher']}</td>
            <td>
            </tr>";
    }
}
?>