<?php

include('../connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $projname = $_POST['pr_name'];
    $sortorder = $_POST['sort'];
    $category_id = $_POST['pr_cat']; // Get the selected category ID from the form

    // Check if a file was uploaded
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $image_tmp = $image['tmp_name'];
        $image_path = "../img/" . $image_name; // Replace with your image directory

        // Move the uploaded image to the desired directory
        if (move_uploaded_file($image_tmp, $image_path)) {
            // Insert project data, including the category ID, into the database
            $send = "INSERT INTO projects (projectname, sortorder, Image, category) 
                     VALUES ('$projname', '$sortorder', '$image_path', '$category_id')";

            if ($Connection->query($send) === TRUE) {
                echo "Data inserted successfully.";
                header("location:projects.php");
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
