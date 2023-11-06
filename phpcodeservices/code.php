<?php
include('../connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servicename = $_POST['ser_name'];
    $serviceshort = $_POST['ser_homecont'];
    $servicefull = $_POST['ser_fullcont'];
    $sortorder = $_POST['sort'];

    // Check if two files were uploaded
    if (isset($_FILES['image_icon']) && isset($_FILES['image'])) {
        $image_icon = $_FILES['image_icon'];
        $image = $_FILES['image'];

        $image_icon_name = $image_icon['name'];
        $image_icon_tmp = $image_icon['tmp_name'];
        $image_icon_path = "../img/" . $image_icon_name; // Replace with your image directory

        $image_name = $image['name'];
        $image_tmp = $image['tmp_name'];
        $image_path = "../img/" . $image_name; // Replace with your image directory

        // Move the uploaded images to the desired directory
        if (move_uploaded_file($image_icon_tmp, $image_icon_path) && move_uploaded_file($image_tmp, $image_path)) {
            // Insert image paths and other data into the database
            $send = "INSERT INTO services (Servicename, icon, Image, Shortcontent, Fullcontent, sortorder) 
                     VALUES ('$servicename', '$image_icon_path', '$image_path', '$serviceshort', '$servicefull', '$sortorder')";

            if ($Connection->query($send) === TRUE) {
                echo "Data inserted successfully.";
                header("location:services.php");
            } else {
                echo "Error inserting data: " . $Connection->error;
            }
        } else {
            echo "Error uploading one or both images.";
        }
    } else {
        echo "Please upload both images.";
    }
}
?>
