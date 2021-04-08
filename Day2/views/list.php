<?php

include_once('../handlers/products.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>List Product</title>
</head>
<body>
    <div class="container mt-3 mbb-3">
        <h1>List Product</h1>
        <a class="btn btn-primary" style="text-decoration: none; color: white" href="../views/insert.php">Add Product</a>
        <table class="table table-bordered mt-3 mb-3">
            <thead>
                <tr style="text-align: center;">
                    <th>Name</th>
                    <th>Price</th>
                    <th width="570px">Description</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
                foreach (getProducts() as $value) {
            ?>
            <tr>
                <td><?=$value['name']?></td>
                <td><?=$value['price']?></td>
                <td><?=$value['description']?></td>
                <td><?=$value['stock']?></td>
                <td>
                    <a href="../views/detail.php?id_detail=<?= $value['id']; ?>" class="btn btn-success">Detail</a>
                    <a href="../views/update.php?id_update=<?= $value['id']; ?>" class="btn btn-warning">Update</a>
                    <a href="../views/list.php?id_delete=<?= $value['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <a
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>