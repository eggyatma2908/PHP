<?php

include_once('../configs/db.php');
include_once __DIR__.'/models.php';

class Products extends Database implements Models{
    private $name,
            $price,
            $description,
            $stock;

    // INSERT
    public function insert() {
    $data = [
        "name" => $_POST["name"],
        "price" => $_POST["price"],
        "description" => $_POST["description"],
        "stock" => $_POST["stock"]
    ];
    $name = $this->connect->real_escape_string($data["name"]);
    $price = $this->connect->real_escape_string($data["price"]);
    $description = $this->connect->real_escape_string($data["description"]);
    $stock = $this->connect->real_escape_string($data["stock"]);
    $addProduct = $this->connect -> query("INSERT INTO tbl_products (name, price, description, stock) VALUE ('$name','$price','$description','$stock')");
        if (!$addProduct) {
            echo "<script>alert('Add Product Failed')</script>";
            die();
        } else {
            echo "<script>alert('Add Product Success')</script>";
        }
    }

    // GET
    public function get() {
        $result = [];
        $listProducts = $this->connect -> query("SELECT * FROM tbl_products");
        while ($row = $listProducts -> fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }
    
    // UPDATE
    public function update() {
        $id = $_GET['id_detail'];
        $data = [
            "name" => $_POST["name"],
            "price" => $_POST["price"],
            "description" => $_POST["description"],
            "stock" => $_POST["stock"]
        ];
        $name = $this->connect -> real_escape_string($data["name"]);
        $price = $this->connect -> real_escape_string($data["price"]);
        $description = $this->connect -> real_escape_string($data["description"]);
        $stock = $this->connect -> real_escape_string($data["stock"]);
        $update = $this->connect -> query("UPDATE tbl_products SET name='$name', price='$price', description='$description', stock='$stock' WHERE id='$id'");
        if (!$update) {
            echo "<script>alert('Update Failed')</script>";
            die();
        } else {
            echo "<script>alert('Update Success')</script>";
        }
    }

    // DELETE
    public function delete() {
        $id = $_GET['id_delete'];
        $delete = $this->connect -> query("DELETE FROM tbl_products WHERE id='$id'");
        if (!$delete) {
            echo "<script>alert('Delete Failed')</script>";
            die();
        } 
         echo "<script>alert('Delete Success')</script>";
    }

    // DETAIL
    public function detailProduct() {
        $id = $_GET['id_detail'];
        $detailProduct = $this->connect -> query("SELECT * FROM tbl_products WHERE id='$id'");
        return $detailProduct->fetch_assoc();
    }
}


$products = new Products;
if (isset($_POST["addProduct"])) {
    $products->insert();
}
if (isset($_POST['saveChange'])) {
    $products->update();
}
if (isset($_GET['id_delete'])) {
    $products->delete();
}
if (isset($_GET['id_detail'])) {
    $products->detailProduct();
}