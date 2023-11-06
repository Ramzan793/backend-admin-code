<?php
include('../connection.php');

if (isset($_POST['user_id'])) {
    $id = $_POST['user_id'];
    $pcatname = $_POST['projcatname'];
    // $sortorder = $_POST['sort'];

    // Use a prepared statement to update the category
    $update = $Connection->prepare("UPDATE category SET projectcategory = ? WHERE id = ?");
    $update->bind_param("ss", $pcatname, $id);

    if ($update->execute()) {
        header("Location:category.php");
        exit; // Make sure to exit after the redirect to stop further script execution
    } else {
        echo "Update failed: " . $Connection->error;
    }
} else {
    echo "Invalid user_id provided.";
}
?>
