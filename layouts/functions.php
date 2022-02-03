<?php 

$conn = mysqli_connect("localhost", "root", "", "phpwithdb");

function query($str_query){
    global $conn;
    $result = mysqli_query($conn, $str_query);
    $rows = []; 

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;

}

function insert($data){
    global $conn;
    $nama = $data["nama"];
    $nis = $data["nis"];
    $jurusan = $data["jurusan"];
    $email = $data["email"];
    $semester = $data["semester"];
    
    $query = "INSERT INTO tbl_phpwthdb VALUES (NULL, '$nama', '$nis', 
    '$jurusan', '$email', '$semester')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_phpwthdb WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $nis = $data["nis"];
    $jurusan = $data["jurusan"];
    $email = $data["email"];
    $semester = $data["semester"];
    
    echo mysqli_query($conn, "UPDATE tbl_phpwthdb SET  nama='$nama', nis=$nis, jurusan='$jurusan', email='$email', semester='$semester' WHERE id='$id'");

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM tbl_phpwthdb WHERE nama LIKE '%$keyword%' OR nis LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' OR email LIKE '%$keyword%' OR semester LIKE '%$keyword%'";
    
    return query($query);
}

?>