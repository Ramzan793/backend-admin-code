<?php

$servername="localhost";
$username="root";
$password="";
$dbname="learning";

$Connection = new mysqli ($servername,$username,$password,$dbname);

$admin_email=$_POST['ad_email'];
$admin_password=$_POST['ad_pass'];

if($Connection -> connect_error){
    die("not working");
}
echo"connection established <br>";

$read="SELECT * FROM `admin` WHERE Email='$admin_email' AND Password='$admin_password'";
$result = $Connection -> query($read);

if ($result ->num_rows > 0) {
    while ($row =$result -> fetch_assoc()) {
        echo"admin is logged in";
    }
    header("Location:admin.php");

}

?>
