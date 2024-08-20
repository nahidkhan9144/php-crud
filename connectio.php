<?php
$conn=new mysqli('localhost','root','','operations');
if(!$conn){
    die(mysqli_error($conn));
}
?>