<?php 

require 'functions.php';
if(isset($_POST["submit"])){
    if(insert($_POST)){
        header("Location: index.php");
    }else echo "Data tidak tersimpan";
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
        <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nis">Nis: </label>
                <input type="text" name="nis" id="nis">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="semester">Semester: </label>
                <input type="text" name="semester" id="semester">
            </li>
            <li>
                <button name="submit">Simpan data</button>
            </li>
        </ul>
    </form>
</body>
</html>