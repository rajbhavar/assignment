<?php
 session_start();

  print_r($_POST);
  echo "<br>";
  print_r($_FILES);

  $img_name=$_FILES['pdting']['name'];
  $img_name=$_FILES['pdting']['tmp_name'];

  $new_path="../htdocs/img/$img_name";
  echo "<br>$old_path";
  echo "<br>$new_path";
  
  move_uploaded_file($old_path,$new_path);

  include "connection.php";

  try {
    mysqli_query($conn, "INSERT INTO product (name, price, details, impath, category, stock, owner) 
            VALUES ('$_POST[name]', '$_POST[price]', '$_POST[details]', '$new_path', '$_POST[category]', '$_POST[stock]', '$_POST[owner]')");

  }
  catch (Exception $ex){
    echo "<br> error in uploading";
    print_r($ex);
    exit;

  }
  echo "product uploade successful";

?>