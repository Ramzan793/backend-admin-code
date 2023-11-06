<?php
include('../connection.php'); // Include your database connection file

$baseurl = $_SERVER['DOCUMENT_ROOT'] . '/learning/admin'; // Use the server's document root

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $newprname = $_POST["pr_name"];
    $newcategory= $_POST["pr_cat"];
    $newSort = $_POST["sort"];

    // Check if a new image file is uploaded
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $uploadDirectory = "C:/xampp/htdocs/learning/admin/img/"; // Update this to the correct destination directory on your server
        $newImageName =  "" . basename($_FILES["image"]["name"]);
        $newImagePath = $uploadDirectory . $newImageName;

        // Check if the uploaded file exists and is readable
        if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $newImagePath)) {
                // Update the record in the database using prepared statements
                $query = "UPDATE `projects` SET projectname = ?, category = ? sortorder = ?, Image = ? WHERE id = ?";
                $stmt = $Connection->prepare($query);

                if (!$stmt) {
                    // Handle the prepare error
                    echo "Prepare failed: " . $Connection->error;
                } else {
                    $stmt->bind_param("ssssi", $newprname, $newcategory, $newSort, $newImageName, $user_id);

                    if ($stmt->execute()) {
                        // Redirect to a success page or display a success message
                        header("Location: projects.php");
                        exit;
                    } else {
                        // Handle the execution error
                        echo "Execution failed: " . $stmt->error;
                    }

                    // Close the prepared statement
                    $stmt->close();
                }
            } else {
                // Handle the image move error
                echo "Failed to move the uploaded file.";
            }
        } else {
            // Handle the file not found or not readable error
            echo "Uploaded file not found or not readable.";
        }
    } else {
        // No new image file was uploaded, update only text fields
        $query = "UPDATE `projects` SET projectname = ?, category = ?, sortorder = ? WHERE id = ?";
        $stmt = $Connection->prepare($query);

        if (!$stmt) {
            // Handle the prepare error
            echo "Prepare failed: " . $Connection->error;
        } else {
            $stmt->bind_param("sssi", $newprname, $newcategory, $newSort, $user_id);

            if ($stmt->execute()) {
                // Redirect to a success page or display a success message
                header("Location: projects.php");
                exit;
            } else {
                // Handle the execution error
                echo "Execution failed: " . $stmt->error;
            }

            // Close the prepared statement
            $stmt->close();
        }
    }
}

// Close the database connection
$Connection->close();
?>
