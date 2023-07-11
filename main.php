<?php  
$koneksi = mysqli_connect("localhost", "root", "", "chart");
$batas = 10;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;	

$previous = $halaman - 1;
$next = $halaman + 1;

$dataz = "";
$datas = mysqli_query($koneksi, "SELECT * FROM dat ORDER BY no DESC LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal + 1;
while ($row = mysqli_fetch_assoc($datas)) {
    $dataz .=  "<tr>
        <td style='text-align: center; border: 1.5px solid black;'>".$nomor++."</td>
        <td style='text-align: center; border: 1.5px solid black;'>".$row['Time']."</td>
        <td style='text-align: center; border: 1.5px solid black;'>".$row['Suhu']."&deg;C</td>
        <td style='text-align: center; border: 1.5px solid black;'>".$row['Humid']."%</td>
        <td style='text-align: center; border: 1.5px solid black;'>".$row['RTD']."&deg;C</td>
        <td style='text-align: center; border: 1.5px solid black;'>".$row['CO2']." ppm</td>
    </tr>";
}
            $Previous = $halaman-1; if($halaman > 1)
            $batas = 10;
            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
         
            $previous = $halaman - 1;
            $next = $halaman + 1;
                
            $data = mysqli_query($koneksi,"select * from dat");
            $jumlah_data = mysqli_num_rows($data);
              $total_halaman = ceil($jumlah_data / $batas);
                $tambah = 1;
            $start_page = 3;
            $end_page = $total_halaman;
            $extra_li = ''; // Variabel tambahan untuk menyimpan tag <li> tambahan
            $extra_li .= '<li class="page-item disabled"><span class="page-link">...</span></li>';
           


    $nav = "";
    if ($total_halaman > 5) {
        if ($halaman <= $total_halaman - 1) {
            $start_page = $halaman - 0;
            $end_page = $halaman + 0;
        if ($halaman > 3) { 
                  $start_page = $halaman - 2;
                  $end_page = $halaman + 2;
                  if ($end_page > $total_halaman) {
                    $end_page = $total_halaman;
                  }
                } else {
                  $end_page = 5;
                }
        
                if ($halaman < $total_halaman) {       
    $nav  .= "<ul class='pagination justify-content-center'>
            <li class='page-item'>
            <a class='page-link'href=?halaman=".$Previous.">Previous</a
            </li>
            <li class='page-item' >
                     <a class='page-link' href='?halaman=1'>First</a>
            </li>";
            '<li class="page-item"><a class="page-link" href="?halaman='.$total_halaman.'">Last</a></li>';
            for ($x = $start_page; $x <= $end_page; $x++) {
            '<li class="page-item"><a class="page-link " href="?halaman='.$x.'">'.$x.'</a></li>'; 
           
    }        '<li class="page-item">
    <a class="page-link""href=?halaman=$next">Next</a> </li>';}}};
            echo $nav;
            if ($total_halaman > 5) {      
                if ($halaman <= $total_halaman - 1) {
                  $start_page = $halaman - 0;
                  $end_page = $halaman + 0;
                  $extra_li .= '<li class="page-item"><a class="page-link" href="?halaman='.$total_halaman.'">Last</a></li>';
                  
                }
                if ($halaman > 3) { 
                 
                  $start_page = $halaman - 2;
                  $end_page = $halaman + 2;
                  if ($end_page > $total_halaman) {
                    $end_page = $total_halaman;
                  }
                } else {
                  $end_page = 5;
                }
                
            }  
              
                   // Menampilkan tag <li> tambahan sebelum perulangan;
            echo $dataz;
           



?>
