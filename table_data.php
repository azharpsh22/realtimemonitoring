<!-- BAGIAN SEARCH -->
<?php
include ('scr.php');

include ('setup.php');

?>
<?php
$halaman = $_GET['halaman'] ?? '';
$idTbody = empty($halaman) || $halaman === '1' ? 'showdata' : '';
?>
<!-- BATAS BAGIAN SEARCH -->
<!DOCTYPE html>
<html>
    <head> 
        <title> table data</title>
        <meta charset="utf-8">
        <script src="jquery-3.6.4.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    </head>
    <body>


    <style>
      .nav-link.dropdown-toggle::after {
            content: none;
            }
            

          .show {
            display: block;
            animation: fade-in 1s;
          }

          @keyframes fade-in {
            from {
              opacity: 0;
            }
            to {
              opacity: 1;
            }
          }
    </style>

    <link rel="stylesheet" href="sta.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <div class="container">
          <div id="tanggal" class="nav-link dropdown-toggle" style="margin-right: 100px">
              <label for="from" style="font-size: 16px; font-weight: normal; color: gray;">From:</label>
              <input style="text-align: center; border-radius: 8px; border-width: 1px;" type="text" id="from" name="from" >
              <label for="to" style="font-size: 16px; font-weight: normal; color: gray;">To:</label>
              <input style="text-align: center; border-radius: 8px; border-width: 1px;" type="text" id="to" name="to">
              <input style="list-style-type: none; color: gray; border-radius: 8px; border-width: 1px; font-size: 16px;" type="button" id="filter" value="Filter">
          </div>
        <div id="A"> <!-- BAGIAN TABLE UNTUK ME-REFRESH -->
        <table  class="table table-bordered" style="border: 1.5px solid black; margin-top: 10px;">
        <!-- BAGIAN LIST DOWNLOAD FILE -->
        <ul class="navbar" style="list-style-type: none; color: black;">  
          <li class="nav-item dropdown dmenu" style=" margin-bottom: -20;"> 
            <a style="margin-right: 710px;  color: gray;" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> 
              Search Data - Download Data - Print Data 
            </a> 
            <div class="dropdown-menu sm-menu">  <input style="border-width: 1px; border-radius: 5px; text-align: center; font-size: 13px;" type="text" id="Time" name="valueToSearch" placeholder="Y-M-D h:m:s" onkeyup="updateIdTbody(this.value)" oninput="updateTable()" />
              <ul class="dropdown-list">
                <li class="dropdown-item"><a  style="text-decoration: underline;border: none;" href="export.php"><span>&#187;</span> Excel</a></li>
                <li class="dropdown-item"><a  style="text-decoration: underline; border: none; margin-right: 30px;" href="generate.php"><span>&#187;</span> PDF</a></li>
                <li class="dropdown-item"><a style="text-decoration: underline; border: none; color: gray;"  href= ""id="print-btn"><span>&#187;</span> Print</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <!-- BATAS BAGIAN LIST DOWNLOAD -->
        <thead>
            <tr>
            <th style="background-color: rgb(176,176,176); text-align: center; border: 1.5px solid black;">No</th>
              <th style="background-color: rgb(176,176,176); text-align: center; border: 1.5px solid black;">Date</th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">Temparature </th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">Humidity</th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">RTD</th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">CO2</th>
            </tr>
          </thead>
        <!-- BAGIAN DATA REFRESH -->
        <?php
          // Mendapatkan nilai parameter halaman dari URL
          $halaman = isset($_GET['halaman']) ? $_GET['halaman'] : '';
          

          // Memeriksa jika nilai halaman adalah "halaman="
          if ($halaman === '""') {
            $tbodyId = 'tabledata';
          } 
          if ($halaman === ""){
            $tbodyId = 'tabledata';
          } 
          else {
            $tbodyId = 'loadTable';
          }
          ?>
        <!-- BAGIAN UNTUK TBODY UTAMA -->
        <tbody id="<?php echo $tbodyId; ?>">
          <?php
          $batas = 10;
          $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
          $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
   
          $previous = $halaman - 1;
          $next = $halaman + 1;
          
          $data = mysqli_query($koneksi,"select * from dat");
          $jumlah_data = mysqli_num_rows($data);
          $total_halaman = ceil($jumlah_data / $batas);

          $datas = mysqli_query($koneksi, "SELECT * FROM dat ORDER BY no DESC LIMIT $halaman_awal, $batas");
          $nomor = $halaman_awal + 1;
          while ($row = mysqli_fetch_assoc($datas)) {
            echo '<tr>';
            echo '<td  style="text-align: center; border: 1.5px solid black;">' . $nomor. '</td>';
            echo '<td  style="text-align: center; border: 1.5px solid black;">' . $row['Time'] . '</td>';
            echo '<td  style="text-align: center; border: 1.5px solid black;">' . $row['Suhu'] .'&deg;C' .'</td>';
            echo '<td  style="text-align: center; border: 1.5px solid black;">' . $row['Humid'] .'%' .'</td>';
            echo '<td  style="text-align: center; border: 1.5px solid black;">' . $row['RTD'] . '&deg;C' .'</td>';
            echo '<td  style="text-align: center; border: 1.5px solid black;">' . $row['CO2'] . ' ppm'.'</td>';
            echo '</tr>';
            $nomor++;
          } 
          ?>     
          </tbody>  
        <!-- BATAS BAGIAN UNTUK TBODY KEDUA -->

        <!-- BAGIAN TBODY SEARCH -->
          <tbody id="tablesearch">
            <?php
            $batasA = 10;
            $halamanA = isset($_GET['halamanA'])?(int)$_GET['halamanA'] : 1;
            $halaman_awalA = ($halamanA>1) ? ($halamanA * $batasA) - $batasA : 0;	
    
            $previousA = $halamanA - 1;
            $nextA = $halamanA + 1;
            
            $dataA = mysqli_query($koneksi,"select * from dat");
            $jumlah_dataA = mysqli_num_rows($dataA);
            $total_halamanA = ceil($jumlah_dataA / $batasA);
            // $datasA = mysqli_query($koneksi, "SELECT * FROM dat ORDER BY no DESC LIMIT $halaman_awalA, $batasA");           
           
            
            // Check connection
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              exit();
            }  

            if (isset($_POST['Time'])){ 
                $Time = $_POST['Time'];
                $sql = "SELECT * FROM dat WHERE Time LIKE '$Time%' ORDER BY no DESC LIMIT 100 ";  
                
                  $query = mysqli_query($conn,$sql);
                  $data='';
                  $sn = 1;
                  while($row = mysqli_fetch_assoc($query))
                  {
                      $data .=  "<tr>
                      <td style='text-align: center; border: 1.5px solid black;'>".$sn."</td>
                      <td style='text-align: center; border: 1.5px solid black;'>".$row['Time']."</td>
                      <td style=' text-align: center; border: 1.5px solid black;'>".$row['Suhu']."&deg;C </td>'
                      <td style=' text-align: center; border: 1.5px solid black;'>".$row['Humid']."%</td>
                      <td style=' text-align: center; border: 1.5px solid black;'>".$row['RTD']."&deg;C </td>
                      <td style=' text-align: center; border: 1.5px solid black;'>".$row['CO2']." ppm </td>
                      </tr>";
                      $sn++;
            
                  }
                  echo $data;
                  }
                   
                  
                
            ?>     
          </tbody>
        <!-- BATAS TBODY SEARCH -->
        </table>  
          <!-- BAGIAN UNTUK NAVIGASI SEARCH -->
          
        <!-- BATAS BAGIAN UNTUK NAVIGASI SEARCH --> 

        <!-- BAGIAN UNTUK NAVIGASI UTAMA --> 
        <nav id="search">
          
          <ul class="pagination justify-content-center">
          <li class="page-item">
              <a class="page-link" <?php $Previous = $halaman-1; if($halaman > 1){ echo "href='?halaman=$Previous'"; } if($halaman = 1){"href='table_data.php'";} ?>><span>&#171;</span></a>
            </li>
          <li class="page-item">
              <a class="page-link" href="table_data.php">First</a>
          </li>
            <?php
            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
            $start_page = 0;
            $end_page = $total_halaman;
            $extra_li = ''; // Variabel tambahan untuk menyimpan tag <li> tambahan
            
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
            
              if ($start_page > 1) {
                echo '<li class="page-item"><a class="page-link" href="?halaman='.($start_page - 1).'">'.($start_page - 1).'</a></li>';
              }
            
              for ($x = $start_page; $x <= $end_page; $x++) {
                echo '<li class="page-item"><a class="page-link " href="?halaman='.$x.'">'.$x.'</a></li>';
              }
            
              if ($end_page < $total_halaman) {
                echo '<li class="page-item"><a class="page-link" href="?halaman='.($end_page + 1).'">'.($end_page + 1).'</a></li>';
              }
            
              echo $extra_li;
              
              echo '<li class="page-item">
                <a class="page-link"';
              
              if ($halaman < $total_halaman) {
                echo " href='?halaman=$next'";
              }
              
              echo '><span>&#187;</span></a>
                </li>';
            }
            
            ?>
            				
          </ul>
        </nav>
        <!-- BATAS BAGIAN DARI NAVIGASI UTAMA-->

            </div><!-- BATAS BAGIAN TABLE UNTUK ME-SEARCH --> 
        <!-- CODE JS TIDAK BISA EXTERNAL -->
             <script>
             $(document).ready(function() {
              
              hideElement("#scr");
              
              hideElement("#tablesearch");
              var refreshInterval;
              //BAGIAN UNTUK KETIKA TIDAK REFRESH -- >
            
              // Event handler saat tombol di bagian <nav> diklik

              document.getElementById('print-btn').addEventListener('click', function() {
                  var fromInput = document.getElementById('from').value;
                  var toInput = document.getElementById('to').value;
                  hideElement("#tanggal");
                  if (fromInput === '' || toInput === '') {
                    alert('Please fill out the From Input and To Input fields before printing the Data!');
                    return;
                  }

                  // Jika kedua input sudah diisi, jalankan fungsi cetak
                  window.print();
                });

                // BATAS DARI TIDAK MEREFRESH

              $('#Time').on("keyup", function() {
                hideElement("#search");
                hideElement("#tabledata");
                showElement("#scr");
                showElement("#tablesearch");
                clearInterval(refreshInterval); // Stop the table refreshing interval
                var Time = $(this).val();
                $.ajax({
                  method: 'POST',
                  url: 'scr.php',
                  data: {Time: Time},
                  success: function(response) {
                    $("#tablesearch").html(response);
                  }
                });
              });

              $.datepicker.setDefaults({
                dateFormat: 'yy-mm-dd'
              });

              // BAGIAN DARI DATE PICKER 
              $("#from").datepicker();
              $("#to").datepicker();

              $("#filter").click(function() {
                clearInterval(refreshInterval);
                hideElement("#search");
                showElement("#tabledata");
                hideElement("#scr");
                hideElement("#tablesearch")
                var from = $("#from").val();
                var to = $("#to").val();

                if (from != '' && to != '') {
                  $.ajax({
                    url: "datepic.php",
                    method: "POST",
                    data: {from: from, to: to},
                    success: function(data) {
                      $("#tabledata").html(data); // Mengubah id dan isi dari <tbody>
                    }
                  });
                } else {
                  alert("Silakan pilih tanggal");
                }
              });

              //BATAS DARI DATEPICKER

              function hideElement(selector) {
                  $(selector).hide();
                }

                function showElement(selector) {
                  $(selector).show();
                }

              function refreshTable() {
                $.ajax({
                  url: "refresh_table.php", // Ubah dengan URL yang benar ke skrip PHP Anda
                  type: "GET",
                  success: function(data) {
                    $("#tabledata").html(data);
                  },
                  error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                  }
                });
              }
                
              // Merefresh tabel setiap 1 detik (5000 milidetik)
            
              // Mendapatkan nilai parameter URL
              const urlParams = new URLSearchParams(window.location.search);
              const halamanParam = urlParams.get('halaman');

              // Mengevaluasi nilai parameter dan menjalankan clearInterval
             
              if ( !halamanParam || halamanParam === '') {
                  // Menjalankan fungsi clearInterval()
                  // Gantikan dengan fungsi clearInterval yang sesuai dengan kebutuhan Anda
                  clearInterval(refreshInterval);
                }
              // Mengevaluasi nilai parameter 'halaman'
              if (halamanParam === '1') {
                const currentUrl = window.location.href;
                const newUrl = currentUrl.replace('?halaman=1', '');

                // Mengarahkan browser ke URL baru
                window.location.href = newUrl;
              }

              function startRefreshing() {
                refreshTable(); // Refresh data saat halaman dimuat
                refreshInterval = setInterval(refreshTable, 1000); // Waktu dalam milidetik, di sini diatur ke 1 detik
              }
            
              startRefreshing(); // Mulai refresh interval saat halaman dimuat
            
              // Fungsi untuk menghentikan interval refresh
              function stopRefreshing() {
                clearInterval(refreshInterval); // Menghentikan interval refresh
                // Kode JavaScript lain yang ingin Anda jalankan saat tautan <a> ditekan
              }
            
              // Event handler saat tombol <a> dengan ID 'pag' ditekan
            
              // Pengecekan saat halaman dimuat
              if (window.location.search.includes('http://localhost/cht/table_data.php?halaman=')) {
                stopRefreshing(); // Memanggil fungsi untuk menghentikan interval refresh jika URL berisi '?page-nr='
              }
            });
             
             </script>


        <!-- BATAS CODE JS -->
        <!-- BAGIAN JS UNTUK DATAPICKER -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

       
        <!-- BATAS BAGIAN JS UNTUK DATAPICKER -->
        </div>      
    </canvas>   
    </body>