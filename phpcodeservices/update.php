<?php
include('../connection.php');

$baseurl = $_SERVER['DOCUMENT_ROOT'] . '/learning/admin';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $newservicename = $_POST['ser_name'];
    $newserviceshort = $_POST['ser_homecont'];
    $newservicefull = $_POST['ser_fullcont'];
    $newsortorder = $_POST['sort'];

    // Check if a new icon image file is uploaded
    if (isset($_FILES["image_icon"]) && $_FILES["image_icon"]["error"] == 0) {
        $uploadDirectoryIcon = $baseurl . "/img/";
        $newImageNameIcon =  basename($_FILES["image_icon"]["name"]);
        $newImagePathIcon = $uploadDirectoryIcon . $newImageNameIcon;

        if (move_uploaded_file($_FILES["image_icon"]["tmp_name"], $newImagePathIcon)) {
            $image_icon_path = $newImageNameIcon;
        } else {
            echo "Failed to move the uploaded icon image file.";
        }
    } else {
        // If no new image uploaded, use the existing image path from the database
        $image_icon_path = $_POST['existing_icon_image_path'];
    }

    // Check if a new service image file is uploaded
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $uploadDirectoryImage = $baseurl . "/img/";
        $newImageNameImage =  basename($_FILES["image"]["name"]);
        $newImagePathImage = $uploadDirectoryImage . $newImageNameImage;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $newImagePathImage)) {
            $image_path = $newImageNameImage;
        } else {
            echo "Failed to move the uploaded service image file.";
        }
    } else {
        // If no new image uploaded, use the existing image path from the database
        $image_path = $_POST['existing_service_image_path'];
    }

    // Update the record in the database using prepared statements
    $query = "UPDATE `services` SET Servicename = ?, icon = ?, Image = ?, Shortcontent = ?, Fullcontent = ?, sortorder = ? WHERE id = ?";
    $stmt = $Connection->prepare($query);

    if (!$stmt) {
        echo "Prepare failed: " . $Connection->error;
    } else {
        $stmt->bind_param("ssssssi", $newservicename, $image_icon_path, $image_path, $newserviceshort, $newservicefull, $newsortorder, $user_id);

        if ($stmt->execute()) {
            header("Location: services.php");
            exit;
        } else {
            echo "Execution failed: " . $stmt->error;
        }

        $stmt->close();
    }
}

$Connection->close();
?>
