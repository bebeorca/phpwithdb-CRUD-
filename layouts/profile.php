<?php 

    require 'functions.php';

    $datas = query("SELECT * FROM tbl_phpwthdb");

    //menerima nama yang sudah dik kirim dari index.php
    $nama = $_GET["nama"];

    $newdataarr = [];
    
    foreach($datas as $data){
        //mengecek table apakah mengandung data yang sama dengan variable $nama
        if($data["nama"] === $nama){
            //memasukkan data yang relevan ke dalam array
            $newdataarr = $data;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            Nama: <?= $newdataarr["nama"]; ?>
        </li>
        <li>
            Jurusan: <?= $newdataarr["jurusan"]; ?>
        </li>
        <li>
            Email: <?= $newdataarr["email"]; ?>
        </li>
        <li>
            Semester: <?= $newdataarr["semester"]; ?>
        </li>
    </ul>
</body>
</html>