<?php

include('../connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['pg_name'];
    $heading = $_POST['pg_heading'];
    $shortcontent = $_POST['pg_shortcontent'];
    $maincontent = $_POST['pg_maincontent'];
    $sortorder = $_POST['sort'];
    
    // Initialize an empty image path
    $image_path = "";

    // Check if a file was uploaded
    if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $image_tmp = $image['tmp_name'];
        $image_path = "../img/" . $image_name; // Replace with your image directory

        // Move the uploaded image to the desired directory
        if (move_uploaded_file($image_tmp, $image_path)) {
            // Image path is set if the upload was successful
        } else {
            echo "Error uploading image.";
            exit; // Stop further processing
        }
    }
    
    // Insert data into the database, including the image path if provided
    $send = "INSERT INTO cms (Name, heading, shortcontent, maincontent, Image, sortorder) 
             VALUES ('$name', '$heading', '$shortcontent', '$maincontent', '$image_path', '$sortorder')";

    if ($Connection->query($send) === TRUE) {
        echo "Data inserted successfully.";
        header("location:cms.php");
    } else {
        echo "Error inserting data: " . $Connection->error;
    }
}
?>
