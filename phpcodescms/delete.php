<?php
include('../connection.php');
if (isset($_POST['deleteb'])) {

    $id=$_POST['delete_id'];
  
    $delete ="DELETE FROM cms WHERE id='$id'";
    if ($Connection->query($delete)) {
        header("location:cms.php");
      
    }else {
      # code...
    }
  }
?>