<?php
include ('setup.php');

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}



// Mengambil data dari tabel chart_data
$sql = "SELECT Suhu, Humid, RTD, CO2, tanggal, Time
FROM (
    SELECT Suhu, Humid, RTD, CO2, tanggal, Time
    FROM dat
    ORDER BY no DESC
    LIMIT 15
) AS subquery
ORDER BY Time ASC
";
$result = $conn->query($sql);

$data= array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Menutup koneksi
$conn->close();

// Mengembalikan data sebagai JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
