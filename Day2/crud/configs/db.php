<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "db_toko";

$connect = new mysqli($server, $username, $password, $db);

if ($connect -> connect_error) {
    echo "Failed connect to database".$connect -> connect_error;
}

?>
