<?php

include('../connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bnrtitle = $_POST['bn_title'];
    $bnrdesc = $_POST['bn_desc'];
    $btntext = $_POST['btn_text'];
    $sortorder = $_POST['sort'];

    // Check if a file was uploaded
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $image_tmp = $image['tmp_name'];
        $image_path = "../img/" . $image_name; // Replace with your image directory

        // Move the uploaded image to the desired directory
        if (move_uploaded_file($image_tmp, $image_path)) {
            // Insert image path and other data into the database
            $send = "INSERT INTO banner (Title, Description, btntext, sortorder, Image) 
                     VALUES ('$bnrtitle', '$bnrdesc', '$btntext', '$sortorder', '$image_path')";

            if ($Connection->query($send) === TRUE) {
                echo "Data inserted successfully.";
                header("location:banners.php");
            } else {
                echo "Error inserting data: " . $Connection->error;
            }
        } else {
            echo "Error uploading image.";
        }
    } else {
        echo "No image uploaded.";
    }
}
?>
