<?php
require_once 'vendor/autoload.php';

use Dompdf\Dompdf;

// Koneksi ke database MySQL
include('setup.php');

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel MySQL
$sql = "SELECT * FROM dat ORDER BY no DESC LIMIT 100";
$result = $conn->query($sql);

// Membuat objek Dompdf baru
$dompdf = new Dompdf();

// Membuat konten HTML dari data MySQL
$html = '<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}
</style>
</head>
<body>
<h2>Data Sensor</h2>
<table>
<tr>
    
    <th style="text-align: center;">Tanggal</th>
    <th style="text-align: center;">Suhu</th>
	<th style="text-align: center;">Humid</th>
	<th style="text-align: center;">RTD</th>
	<th style="text-align: center;">CO2</th>
</tr>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '<tr>
            
            <td style="text-align: center;">' . $row['Time'] . '</td>
			<td style="text-align: center;">' . $row['Suhu'] . '&deg;C' .'</td>
			<td style="text-align: center;">' . $row['Humid'] . '%' .'</td>\
			<td style="text-align: center;">' . $row['RTD'] . '&deg;C' .'</td>
			<td style="text-align: center;">' . $row['CO2'] . ' ppm' .'</td>
		</tr>';
    }
} else {
    $html .= '<tr>
        <td colspan="3">Tidak ada data yang ditemukan</td>
    </tr>';
}

$html .= '</table>
</body>
</html>';

// Merender konten HTML menjadi PDF
$dompdf->loadHtml($html);
$dompdf->render();
date_default_timezone_set('Asia/Jakarta');
$filename = "DataMonitoring_" . date("H-i_d_m_Y") . ".pdf";
// Mengirimkan file PDF ke browser untuk diunduh
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $filename . '"');
$dompdf->stream($filename);

$conn->close();
header("Location: testindex.php");
exit;
?>
