<?php
$servername="localhost";
$username="root";
$password="";
$dbname="learning";

$Connection = new mysqli ($servername,$username,$password,$dbname);

if($Connection -> connect_error){
    die("not working");
}
echo"connection established <br>";

?>