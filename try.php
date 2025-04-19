<?php

include "connection.php";

$sql_result=mysqli_query($conn,"select * from product");

while($dbrow=mysqli_fetch_assoc($sql_result)){
   
    //print_r($dbrow);
    echo "<div>
    <div>$dbrow[name]</div>
    </div>";
}
?>