<?php
include 'connectio.php'
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Display_data</title>
</head>

<body>
    <div>
        <div class="container">
            <button class="btn btn-primary my-5"><a href="user.php" class="text-light">add contact</a>
            </button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">phone</th>
                        <th scope="col">email</th>
                        <th scope="col">address</th>
                        <th scope="col">operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    $sql="SELECT * FROM contact";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $name=$row['name'];
            $phone=$row['phone'];
            $email=$row['email'];
            $address=$row['address'];
            echo '<tr>
            <th scope ="row">'.$name.'</th>

            <td>'.$phone.'</td>
            <td>'.$email.'</td>
            <td>'.$address.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php? upname='.$name.'" class="text-light">update</a></button>
            <button class="btn btn-primary"><a href="delete.php? deletename='.$name.'" class="text-light">delete</a></button>
            </td>
            </tr>';
    }
}
    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>