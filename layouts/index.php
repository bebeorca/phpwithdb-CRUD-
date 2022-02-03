<?php 

require 'functions.php';
$datas = query("SELECT * FROM tbl_phpwthdb ORDER BY nama ASC ");


//tampilkan sesuai dengan value yang ada di kolom pencarian
if(isset($_POST["cari"])){
    $datas = cari($_POST["keyword"]);
}
//$datas = query("SELECT * FROM tbl_phpwthdb WHERE  ");

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
        <input type="text" name="keyword" size="50" autofocus placeholder="Cari data" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>

    <?php foreach($datas as $data): ?>
        <ul>
            <li>
                <a href="profile.php?nama=<?= $data["nama"];?>">
                    <?= $data["nama"]; ?>
                </a>
                <a style="margin-left: 50px;" 
                href="ubah.php?id=<?=$data["id"];?>">Ubah</a>
                <a style="margin-left: 50px;" 
                href="hapus.php?id=<?=$data["id"];?>"
                onclick="return confirm('yakin?');">Hapus</a>
            </li>
        </ul>
    <?php endforeach; ?>

    <a href="tambah.php">Tambah Data</a>

</body>
</html>