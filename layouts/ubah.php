<?php 

    require 'functions.php';

    $id = $_GET["id"];

    $datas = query("SELECT * FROM tbl_phpwthdb WHERE id = $id")[0];

    if(isset($_POST["submit"])){
        if(ubah($_POST) > 0){
            header("Location: index.php");
        }else echo "data tidak terubah";
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
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $datas["id"];?>">
    <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" value="<?= $datas["nama"];?>">
            </li>
            <li>
                <label for="nis">Nis: </label>
                <input type="text" name="nis" id="nis" value="<?= $datas["nis"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $datas["jurusan"];?>">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" value="<?= $datas["email"];?>">
            </li>
            <li>
                <label for="semester">Semester: </label>
                <input type="text" name="semester" id="semester" value="<?= $datas["semester"];?>">
            </li>
            <li>
                <button name="submit">Simpan perubahan</button>
            </li>
        </ul>
    </form>
</body>
</html>