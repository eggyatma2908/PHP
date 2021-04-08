<?php

include_once('../configs/db.php');

if (isset($_POST["addProduct"])) {
    $data = [
        "name" => $_POST["name"],
        "price" => $_POST["price"],
        "description" => $_POST["description"],
        "stock" => $_POST["stock"]
    ];
    addProduct($data);
}

function addProduct($data) {
    global $connect;
    $name = $connect->real_escape_string($data["name"]);
    $price = $connect->real_escape_string($data["price"]);
    $description = $connect->real_escape_string($data["description"]);
    $stock = $connect->real_escape_string($data["stock"]);
    $addProduct = $connect -> query("INSERT INTO tbl_products (name, price, description, stock) VALUE ('$name','$price','$description','$stock')");

    if (!$addProduct) {
        echo "<script>alert('Add Product Failed')</script>";
        die();
    } else {
        echo "<script>alert('Add Product Success')</script>";
    }
}

function getProducts () {
    global $connect;
    $result = [];
    $listProducts = $connect -> query("SELECT * FROM tbl_products");
    while ($row = $listProducts -> fetch_assoc()) {
        array_push($result, $row);
    }
    return $result;
}

if (isset($_GET['id_delete'])) {
    $id = $_GET['id_delete'];
    $delete = $connect -> query("DELETE FROM tbl_products WHERE id='$id'");
    if (!$delete) {
        echo "<script>alert('Delete Failed')</script>";
        die();
    } 
    echo "<script>alert('Delete Success')</script>";
}

function detailProduct ($id) {
    global $connect;
    $detailProduct = $connect -> query("SELECT * FROM tbl_products WHERE id='$id'");
    return $detailProduct->fetch_assoc();
}

function updateProduct ($data, $id) {
    global $connect;
    $name = $connect -> real_escape_string($data["name"]);
    $price = $connect -> real_escape_string($data["price"]);
    $description = $connect -> real_escape_string($data["description"]);
    $stock = $connect -> real_escape_string($data["stock"]);
    $update = $connect -> query("UPDATE tbl_products SET name='$name', price='$price', description='$description', stock='$stock' WHERE id='$id'");
    if (!$update) {
        echo "<script>alert('Update Failed')</script>";
        die();
    } else {
        echo "<script>alert('Update Success')</script>";
    }
}

?>