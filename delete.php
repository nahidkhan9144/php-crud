<?php
include 'connectio.php';
if(isset($_GET['deletename'])){
    $name=$_GET['deletename'];
    $sql="DELETE FROM contact WHERE name='$name'";
    $result=mysqli_query($conn,$sql);
    if ($result){
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>