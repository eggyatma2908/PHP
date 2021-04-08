<?php

include_once('../handlers/products.php');

if (isset($_GET['id_detail'])) {
    $id = $_GET['id_detail'];
}

$detailProduct = detailProduct($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Detail Product</title>
</head>
<body>
    <div class="container">
         <div class="card m-5">
            <div class="card-header">
                <h1><?= $detailProduct['name']; ?></h1>
            </div>
            <div class="card-body">
                <p class="card-text"><?= $detailProduct['description']; ?></p>
                <a href="../views/list.php" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</body>
</html>