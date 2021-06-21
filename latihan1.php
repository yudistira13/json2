<?php
$mahasiswa = [
        [
            "nama" => "yuda yudistira",
            "nrp" => "123456789",
            "email" => "yudistira.hominidae@gmail.com"
        ],
        [
            "nama" => "fathur rohman",
            "nrp" => "987654321",
            "email" => "fathur.rohman@gmail.com"
        ]
    ];

    // $dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
    // $db = $dbh->prepare('SELECT * FROM mahasiswa');
    // $db->execute();
    // $mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

    // $data = json_encode($mahasiswa);
    // $data = json_decode($data);
    // var_dump($data);

    $dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
    $db = $dbh->prepare('SELECT * FROM mahasiswa');
    $db->execute();
    $mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

    $data = json_encode($mahasiswa);
    echo $data;
?>