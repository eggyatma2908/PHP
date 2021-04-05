<?php

$data = [
    "id" => 1,
    "name" => "Eggy Atma Riansyah",
    "username" => "Eggy",
    "email" => "eggyatmariansyah@gmail.com",
    "address" => 
    [
    "street" => "Jl. Lematang 1",
    "suite" => "No.88 RT.03 RW.04 Kel.Baktijaya Kec.Sukmajaya Depok Timur",
    "city" => "Depok",
    "zipcode" => "16418",
    ],
    "phone" => "081318913824",
    "website" => "-",
];

list("street" => $street, "city" => $city) = $data["address"];

echo $street." ".$city

?>