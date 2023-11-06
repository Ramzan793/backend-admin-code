<?php

include('../connection.php');

$pcatname=$_POST['projcatname'];
// $sortorder=$_POST['sort'];

$send ="INSERT INTO category (projectcategory) 
        VALUES('$pcatname')";

    if($Connection -> query($send) ===  TRUE){
        echo"<br> data inserted ";
        header("Location:category.php");
    }
    else{
        echo"try again";
    }


?>