<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sekolah";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,
    $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM siswa");
    
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    $result = $stmt->fetchAll();
    echo json_encode($result);


} catch (PDOException $e) {
    echo $e->getMessage();
}

?>