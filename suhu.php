<?php

include ('setup.php')

 
?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="jv.js"></script>
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
</head>
    <body>
    <h5 id="tanggal-hari" style=" margin-top: 0vh; font-size: 18px; margin-left: 30vh;"></h5>
    <nav class="navbar navbar-expand-sm   navbar-light bg-light ">
        <div class="navbar-grid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <style>
            .remove-arrow {
            background-image: none;
            }
            .navbar-toggler-icon {
            background-image: none;
            }
            .nav-link.dropdown-toggle::after {
            content: none;
            }
            .dropdown-list {
            display: none;
            list-style: none;
            padding: 0;
            margin: 0;
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
            
            
           
        <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03 " >
          
          <ul  class="navbar-nav mr-auto mt-2 mt-lg-0" >
            
            <li class="nav-item dropdown dmenu" > 
                    <a class="nav-link dropdown-toggle dropdown-button" href="#" id="navbardrop" data-toggle="dropdown">
                    <span  class="navbar-toggler-icon"></span>
                    </a>
                    <div class="dropdown-menu sm-menu">
                    <a style="color: gray;" class="dropdown-item" href="index.php">• Home</a>
                    <a style="color: gray;" class="dropdown-item" href="about.php">• About</a>
                    <a style="color: gray;" class="dropdown-item" href="das.php">• Dasboard</a>
                    </div>
            </li>
            <li>
                
            </li>
                <li class="nav-item">
                <h3 style=" text-decoration-line: underline; text-decoration: underline space; padding-left: 61.5vh; padding-right: 5px; color: gray;"> TEMPERATURE</h3>
            </li>
            </li>
            
            <!--<li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Our Service
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="#">service2</a>
              <a class="dropdown-item" href="#">service 2</a>
              <a class="dropdown-item" href="#">service 3</a>
            </div>
          </li> -->
        <!--  <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Call</a>
          </li>
            <li class="nav-item dropdown dmenu"> 
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Dropdown link
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="#">Link 1</a>
              <a class="dropdown-item" href="#">Link 2</a>
              <a class="dropdown-item" href="#">Link 3</a>
              <a class="dropdown-item" href="#">Link 4</a>
              <a class="dropdown-item" href="#">Link 5</a>
              <a class="dropdown-item" href="#">Link 6</a>
            </div>
          </li> -->
          <!--</ul>
          <div class="social-part">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </div>-->
        </div>
		</div>
        
      </nav> 
  
    <div style="display: rigid;">
        <div style="margin-left: 45vh ;width: 50%; align-items: center; align-items: center; justify-content: center; ">
        <canvas style="align-items: center; margin-bottom: 5vh; "id="chart1" width="500" height="300"></canvas>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
               $(document).ready(function(){
                

                // Inisialisasi chart awal
                var ctx = document.getElementById('chart1').getContext('2d');
                var chart1 = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [],
                        datasets: [{
                            label: 'Suhu',
                            data: [],
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            //borderColor: 'rgba(75, 192, 192, 1)',
                            borderColor: 'rgba(61, 227, 80, 0.8)',
                            borderWidth: 1,
                            tension: 0.5,
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                        ticks: {
                        
                            callback: function(value, index, ticks) {
                                return value + '°C';
                            }
                        }
                            }
                        },
                        
                    }
                });

                // Fungsi untuk memperbarui chart
                function updateChart() {
                    $.ajax({
                        url: "data.php",
                        method: "GET",
                        success: function(data) {
                            var suhu = [];
                            var time = [];

                            for(var i in data) {
                                suhu.push(data[i].Suhu);
                                time.push(data[i].tanggal);
                            }

                            chart1.data.labels = time;
                            chart1.data.datasets[0].data = suhu;
                            chart1.update();
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                }
               

                // Memanggil fungsi updateChart setiap 5 detik
                setInterval(updateChart, 1000);
                
                // Memanggil updateChart untuk pertama kali
                updateChart();
            });//Batas Chart 1

            
        </script>
    <!-- SEARCH -->
    <input style="border-width: 1px; border-radius: 8px; text-align: center; margin-left: 45vh; font-size: 13px;" type="text" id="Time" name="valueToSearch" placeholder="Y-M-D h:m:s" onkeyup="updateIdTbody(this.value)" oninput="updateTable()" />
    <!-- BAGIAN TABLE DATA DISINI -->
    <div class="card-body">
    <table  class="table table-bordered" style=" margin-left: auto; margin-right: auto; width: 675px; height: 300px; border: 1.5px solid black; margin-top: 10px;">
        <thead>
            <tr>
              <th style="background-color: rgb(176,176,176); text-align: center; border: 1.5px solid black;">No</th>
              <th style="background-color: rgb(176,176,176); text-align: center; border: 1.5px solid black;">Date</th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">Temparature </th>
            </tr>
        </thead>
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
            $nomor++;
          }
        ?>
      </tbody>
      <tbody id="tablesearch">

        </tbody>
        </table>
        </div>
        <nav id="search">
          <ul class="pagination justify-content-center">
          <li class="page-item">
              <a class="page-link" <?php $Previous = $halaman-1; if($halaman > 1){ echo "href='?halaman=$Previous'"; } if($halaman = 1){"href='table_data.php'";} ?>><span>&#171;</span></a>
            </li>
          <li class="page-item">
              <a class="page-link" href="table_data.php">First</a>
          </li>
            <?php
            $start_page = 3;
            $end_page = $total_halaman;
            $extra_li = ''; // Variabel tambahan untuk menyimpan tag <li> tambahan
            $extra_li .= '<li class="page-item disabled"><span class="page-link">...</span></li>';
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
              
              for ($x = $start_page; $x <= $end_page; $x++) {
                echo '<li class="page-item"><a class="page-link " href="?halaman='.$x.'">'.$x.'</a></li>';
              }
              echo $extra_li; echo '<li class="page-item">
                      <a class="page-link"';
                  if ($halaman < $total_halaman) {
                      echo " href='?halaman=$next'";
                  }
                  echo '><span>&#187;</span></a>
                  </li>';
                   // Menampilkan tag <li> tambahan sebelum perulangan;
            }
            ?>
            				
          </ul>
        </nav>
        <style>
          .card .card-body {
    padding: 1.25rem 1.437rem;
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}
          </style>
        <script>
           $(document).ready(function() {
            hideElement("#scr");
              
              hideElement("#tablesearch");


              function hideElement(selector) {
                  $(selector).hide();
                }

                function showElement(selector) {
                  $(selector).show();
                }
            function refreshTable() {
                $.ajax({
                  url: "suhu_data.php", // Ubah dengan URL yang benar ke skrip PHP Anda
                  type: "GET",
                  success: function(data) {
                    $("#tabledata").html(data);
                  },
                  error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                  }
                });
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

              $(document).ready(function() {
                function updateTanggalHari() {
                $.ajax({
                    url: 'get_tanggal.php', // Ubah sesuai dengan URL file PHP Anda
                    method: 'GET',
                    success: function(response) {
                        $('#tanggal-hari').html(response);
                    },
                    error: function() {
                        alert('Terjadi kesalahan saat memuat data.');
                    }
                });
            }
                setInterval(updateTanggalHari, 1000);
            });
            $('#Time').on("keyup", function() {
                hideElement("#search");
                hideElement("#tabledata");
                hideElement("#loadtable");
                showElement("#scr");
                showElement("#tablesearch");
                clearInterval(refreshInterval); // Stop the table refreshing interval
                var Time = $(this).val();
                $.ajax({
                  method: 'POST',
                  url: 'suhu_scr.php',
                  data: {Time: Time},
                  success: function(response) {
                    $("#tablesearch").html(response);
                  }
                });
              });

            });
          </script>
  </body>
</html>