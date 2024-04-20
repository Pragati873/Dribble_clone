<?php
$conn = new mysqli('localhost','root','','aenoxy');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
?>