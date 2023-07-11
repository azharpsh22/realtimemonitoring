<?php

$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "cht";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MySQL database";

if (isset($_POST["Suhu"]) OR isset($_POST["Humid"]) OR isset($_POST["RTD"]) OR isset($_POST["CO2"]) ) {
    $suhu = $_POST["Suhu"];
	$humid = $_POST["Humid"];
	$rtd = $_POST["RTD"];
	$co2 = $_POST["CO2"];
    // Menjalankan query untuk memasukkan data ke tabel
    $sql = "INSERT INTO dat (Suhu,Humid,RTD,CO2) VALUES ('$suhu','$humid','$rtd','$co2')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi ke database
$conn->close();
?>
