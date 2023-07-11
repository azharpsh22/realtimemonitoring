<?php
// Koneksi ke database
include('setup.php');

// Memeriksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$startDate = '';
$endDate = '';
// Mengambil rentang tanggal dari permintaan AJAX
if (isset($_POST['From'])) {
  $startDate = $_POST['From'];
} // Ubah 'From' menjadi 'from'
if (isset($_POST['to'])) {
  $endDate = $_POST['to'];
} // Tetapkan 'to' sesuai dengan name pada elemen HTML
  


// Membuat query untuk memfilter data berdasarkan rentang tanggal
$sql = "SELECT * FROM dat WHERE Tanggal BETWEEN '$startDate' AND '$endDate' ORDER BY no DESC";
$result = $conn->query($sql);

// Memeriksa apakah ada hasil yang ditemukan
if ($result->num_rows > 0) {
  // Menampilkan hasil dalam format tabel
  $sn = 1; 
  while($row = $result->fetch_assoc())
  {
    echo "<tr>";
    echo "<td style='text-align: center; border: 1.5px solid black;'>".$sn++."</td>";
    echo "<td style='text-align: center; border: 1.5px solid black;'>".$row['Time']."</td>";
    echo "<td style='text-align: center; border: 1.5px solid black;'>".$row['Suhu'].'&deg;C' ."</td>";
    echo "<td style='text-align: center; border: 1.5px solid black;'>".$row['Humid'].'%' ."</td>";
    echo "<td style='text-align: center; border: 1.5px solid black;'>".$row['RTD'].'&deg;C' ."</td>";
    echo "<td style='text-align: center; border: 1.5px solid black;'>".$row['CO2'].' ppm' ."</td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='5'>Tidak ada data yang ditemukan</td></tr>";
}



// Menutup koneksi database
$conn->close();
?>
