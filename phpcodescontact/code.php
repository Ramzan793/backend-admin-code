<?php
include("../connection.php");

// $m_number=$_POST['number'];
// $email_adress=$_POST['email'];
// $loaction=$_POST['address'];
// $fb_link=$_POST['facebook'];
// $in_link=$_POST['instagram'];
// $li_link=$_POST['linkedin'];
// // $sortorder=$_POST['sort'];

// $send ="INSERT INTO contact (phone, Email, address, facebook, instagram, linkedin) 
//         VALUES('$m_number','$email_adress', '$loaction', '$fb_link', '$in_link' ,'$li_link')";

//     if($Connection -> query($send) ===  TRUE){
//         echo"<br> data inserted ";
//         header("Location:contact.php");
//     }
//     else{
//         echo"try again";
//     }




?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
        $m_number = $_POST['number'];
        $email_adress = $_POST['email'];
        $location = $_POST['address'];
        $fb_link = $_POST['facebook'];
        $in_link = $_POST['instagram'];
        $li_link = $_POST['linkedin'];

        $update = "UPDATE contact 
                   SET phone = '$m_number', 
                       Email = '$email_adress', 
                       address = '$location', 
                       facebook = '$fb_link', 
                       instagram = '$in_link', 
                       linkedin = '$li_link' 
                   WHERE id = $user_id";

        if ($Connection->query($update) === TRUE) {
            echo "Data updated";
            header("Location: contact.php");
        } else {
            echo "Error updating data: " . $Connection->error;
        }
    }
}
?>