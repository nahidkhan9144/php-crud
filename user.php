<?php
include 'connectio.php';
//$conn=new mysqli('localhost','root','','operations');

//Insert a new contact record into the database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO contact (name, phone, email, address) VALUES ('$name', '$phone', '$email','$address')";

    $result=mysqli_query($conn,$sql);
    if ($result){
       header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}

$conn->close();
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>contact book</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">

                <label>Name</label>
                <input type="text" class="form-control" placeholder="FULL NAME" name="name" autocomplete="off" required>
            </div>

            <div class="form-group">

                <label>phone</label>
                <input type="text" class="form-control" placeholder="PHONE NO" name="phone" autocomplete="off" required>
            </div>

            <div class="form-group">

                <label>email</label>
                <input type="email" class="form-control" placeholder="EMAIL" name="email" autocomplete="off" required>
            </div>

            <div class="form-group">

                <label>address</label>
                <input type="text" class="form-control" placeholder="ADDRESS" name="address" autocomplete="off" required >
            </div>
            <button type="submit" class="btn btn-primary" name="button">submit</button>
        </form>
    </div>


</body>

</html>