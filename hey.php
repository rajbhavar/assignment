<?php

print_r($_post);
    //$conn = new mysqli("localhost","root","","student",3306);
    include "connection.php";
    echo "<br>";
    $query = "insert into user(username,password,mobile,usertype) value ('$_post[username]','$_post[password]','$_post[mobile]','$_post[usertype]')";

    echo $query;

    try
    {
        $status = mysqli_query($conn,$query);
    }
    catch(Exception $ex){
        echo "Error in user creation";
        echo $ex;
    }
    ?>