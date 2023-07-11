<?php
require 'vendor/autoload.php'; // Lokasi file autoload.php dari PhpSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Color;

// Koneksi ke database MySQL
include ('setup.php'); 

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel MySQL
$sql = "SELECT * FROM dat ORDER BY no DESC LIMIT 100";
$result = $conn->query($sql);

// Membuat objek Spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Menulis judul kolom
$sheet->setCellValue('B1', 'TANGGAL');
$sheet->setCellValue('C1', 'SUHU');
$sheet->setCellValue('D1', 'Humid');
$sheet->setCellValue('E1', 'RTD');
$sheet->setCellValue('F1', 'CO2');

$cellRange = 'A1:K1';
$sheet->getStyle($cellRange)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$sheet->getStyle($cellRange)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);

// Mengatur warna latar belakang dan teks pada judul kolom
$styleArray = [
    'font' => [
        'color' => ['rgb' => Color::COLOR_BLACK],
    ],
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
        'startColor' => ['rgb' => 'FFFFFF'], // Putih
    ],
];
$sheet->getStyle('A1')->applyFromArray($styleArray);

$styleArray['fill']['startColor']['rgb'] = '0ABC4B'; // Hijau
$sheet->getStyle('B1')->applyFromArray($styleArray);

$styleArray['fill']['startColor']['rgb'] = 'ECDD0C'; // Kuning
$sheet->getStyle('C1')->applyFromArray($styleArray);

$styleArray['fill']['startColor']['rgb'] = '106CC9'; // Kuning
$sheet->getStyle('D1')->applyFromArray($styleArray);

$styleArray['fill']['startColor']['rgb'] = 'C9014A'; // Kuning
$sheet->getStyle('E1')->applyFromArray($styleArray);

$styleArray1['fill']['startColor']['rgb'] = '0ABC4B '; // Kuning
$sheet->getStyle('F1')->applyFromArray($styleArray1);

// Menulis data dari MySQL ke dalam file Excel
if ($result->num_rows > 0) {
    $rowNumber = 2;
    while ($row = $result->fetch_assoc()) {
        // Mengatur warna latar belakang dan teks pada judul kolom
        $sheet->getColumnDimension('B')->setWidth(20);
        $sheet->getColumnDimension('A')->setWidth(1.5);
        $sheet->setCellValue('B' . $rowNumber, $row['Time']);
        $sheet->setCellValue('C' . $rowNumber, $row['Suhu']);
		$sheet->setCellValue('D' . $rowNumber, $row['Humid']);
		$sheet->setCellValue('E' . $rowNumber, $row['RTD']);
		$sheet->setCellValue('F' . $rowNumber, $row['CO2']);
        // Mengatur perataan konten di tengah sel
        $cellRange = 'A' . $rowNumber . ':F' . $rowNumber;
        $sheet->getStyle($cellRange)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle($cellRange)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);

        $rowNumber++;
    }
	    // Menghitung rata-rata pada kolom C2:C101
		$sheet->setCellValue('G1', 'RATA-RATA SUHU');
		$sheet->getColumnDimension('G')->setWidth(20);
    $averageFormula = "=AVERAGE(C2:C101)";
    $sheet->setCellValue('G2', $averageFormula);
    $sheet->getStyle('G2')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle('G2')->getFont()->setBold(true);
    $sheet->getStyle('G1')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('FFAE0B'); // Orange

  
    // Dapatkan hasil perhitungan rata-rata
    $averageResult = $sheet->getCell('G2')->getCalculatedValue();
} else {
    echo "Tidak ada data yang ditemukan";
    exit;
}

// Menyimpan file Excel
$writer = new Xlsx($spreadsheet);
date_default_timezone_set('Asia/Jakarta');
$filename = "DataMonitoring_" . date("H-i_d_m_Y") . ".xlsx";

// Set header untuk menentukan jenis file dan nama file
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="' . $filename . '"');

// Mengirim output file Excel langsung ke output buffer
$writer->save('php://output');


// Mengalihkan halaman ke testindex.php setelah menyimpan file Excel
header("Location: testindex.php");
exit;
?>
