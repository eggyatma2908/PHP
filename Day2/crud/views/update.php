<?php

include_once('../handlers/products.php');

if (isset($_GET['id_update'])) {
    $id = $_GET['id_update'];
}

$detailProduct = detailProduct($id);

if (isset($_POST["savechange"])) {
    $data = [
        "name" => $_POST["name"],
        "price" => $_POST["price"],
        "description" => $_POST["description"],
        "stock" => $_POST["stock"]
    ];
    updateProduct($data, $id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Edit Product</title>
</head>
<body>
    <div class="container mt-3 mb-3">
        <h1 class="mt-3 mb-3" style="text-align: center;">Edit Product</h1>
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" value="<?= $detailProduct['name']; ?>" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" name="price" id="price" class="form-control" value="<?= $detailProduct['price']; ?>" placeholder="Price">
            </div>
            <div class="form-group">
                <textarea name="description" id="description" class="form-control" placeholder="Description"><?= $detailProduct['description'] ?></textarea>
            </div>
            <div class="form-group">
                <input type="text" name="stock" id="stock" class="form-control" value="<?= $detailProduct['stock']; ?>" placeholder="Stock">
            </div>
            <button type="submit" class="btn btn-primary" name="savechange">Save</button>
            <a class="btn btn-primary" style="text-decoration: none; color: white" href="../views/list.php">List Product</a>
        </form>
    </div>
</body>
</html>