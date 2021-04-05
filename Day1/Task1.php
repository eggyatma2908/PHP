<?php

$biodata = [
    "name" => "Eggy Atma Riansyah",
    "age" => 25,
    "hobbies" => ["Futsal", "Berenang", "Joging", "Membaca Komik"],
    "IsMarried" => false,
    "schoolList" => [
        [
            "name" => "SDN Mekarjaya 16",
            "yearIn" => "2001",
            "yearOut" => "2007",
            "major" => null
        ],
        [
            "name" => "SMP PGRI Depok II Tengah",
            "yearIn" => "2007",
            "yearOut" => "2010",
            "major" => null
        ],
        [
            "name" => "SMA Pelita Satu Depok",
            "yearIn" => "2010",
            "yearOut" => "2013",
            "major" => "IPS"
        ],
        [
            "name" => "Universitas Nasional",
            "yearIn" => "2013",
            "yearOut" => "2017",
            "major" => "Teknik Informatika"
        ]
    ],
    "skills" => [
        [
            "skillName" => "HTML",
            "level" => "Advanced"
        ],
        [
            "skillName" => "CSS",
            "level" => "Advanced"
        ],
        [
            "skillName" => "Javasript",
            "level" => "Advanced"
        ],
        [
            "skillName" => "Bootstrap",
            "level" => "Advanced"
        ],
        [
            "skillName" => "NodeJS",
            "level" => "Advanced"
        ],
        [
            "skillName" => "ExpressJS",
            "level" => "Advanced"
        ],
        [
            "skillName" => "VueJS",
            "level" => "Advanced"
        ],
        [
            "skillName" => "ReactJS",
            "level" => "Advanced"
        ],
    ],
    "interesInCoding" => true
];

echo "Nama : ".$biodata["name"];
echo "<br/>";
echo "Umur : ".$biodata["age"];
echo "<br/>";
echo "Hobi : ";
foreach ($biodata["hobbies"] as $value) {
    echo $value.", ";
}
echo "<br/>";
if ($biodata["IsMarried"] === false) {
    echo "Belum menikah";
} else {
    echo "Sudah menikah";
}
echo "<br/>";
echo "Daftar Sekolah : ";
count($biodata["schoolList"]);
echo "<ul>";
echo "<li>".$biodata["schoolList"][0]["name"]."<br/>";
echo "<li>".$biodata["schoolList"][1]["name"]."<br/>";
echo "<li>".$biodata["schoolList"][2]["name"]."<br/>";
echo "<li>".$biodata["schoolList"][3]["name"]."<br/>";
echo "</ul>";
echo "<br/>";
echo "Kemampuan : ";
for ($i = 0; $i < count($biodata["skills"]); $i++) {
    echo "<ul>";
    echo "<li>".$biodata["skills"][$i]["skillName"]." : ";
    echo $biodata["skills"][$i]["level"];
    echo "</ul>";
}
echo "<br/>"; 
echo "Tertarik dengan Pengkodean : ";
if ($biodata["interesInCoding"] === true) {
    echo "Ya";
} else {
    echo "Tidak";
}

?>