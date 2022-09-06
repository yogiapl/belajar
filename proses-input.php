<?php

$nama = $_GET["nama"];
$alamat = $_GET["alamat"];

echo $nama.$alamat;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sekolah";

try{
    //koneksi
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,
    $password);
    
    //set error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    //query
    $sql = "INSERT INTO siswa (nama, alamat) VALUES
    ('$nama', '$alamat') ";

    //eksekusi query
    $conn->exec($sql);
    //di arahkan ke tabel
    header('Location: table.php');
    
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>