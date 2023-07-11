<?php
include('setup.php');

?>

<!DOCTYPE html>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- custom css file link  -->
    </head> 
    <body>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

            
            
            .card{
                background: none;
                padding:15px 9%;
                padding-bottom: 100px;
            }

            .card .heading{
                text-align: center;
                padding-bottom: 15px;
                color:#fff;
                text-shadow: 0 5px 10px rgba(0,0,0,.2);
                font-size: 50px;
            }

            .card .box-container{
                display: grid;
                grid-template-columns: repeat(2, minmax(270px, 1fr));
                gap:15px;
            }

            .card .box-container .box{
                box-shadow: 0 5px 10px rgba(0,0,0,.2);
                border-radius: 5px;
                background: none;
                text-align: center;
                padding:20px 10px;
            }

            .card .box-container .box img{
                height: 80px;
            }

            .card .box-container .box h3{
                color:#444;
                font-size: 22px;
                padding:10px 0;
            }

            .card .box-container .box p{
                color:#777;
                font-size: 15px;
                line-height: 1.8;
            }

            .card .box-container .box .btn{
                margin-top: 10px;
                display: inline-block;
                background:gray;
                color:#fff;
                font-size: 12px;
                border-radius: 5px;
                padding: 8px 25px;
            }

            .card .box-container .box .btn:hover{
                letter-spacing: 1px;
            }

            .card .box-container .box:hover{
                box-shadow: 0 10px 15px rgba(0,0,0,.3);
                transform: scale(1.03);
                transition: transform 0.8s;
            }

            @media (max-width:768px){
                .card{
                    padding:20px;
                }
            }
         
            #tanggal-hari {
            position: fixed;
            top: 0;
            right: 0;
            margin-top: 0vh;
            font-size: 18px;
            margin-left: unset;
            margin-right: 0vh;
            margin-bottom: 5vh;
          }
          .judul {
          margin-bottom: 5px; /* Ubah angka 5px sesuai dengan jarak yang diinginkan */
          position: relative;
          
        }

        .judul::after {
          padding: 50px;
          content: '';
          position: absolute;
          left: 100px;
          right: 100px;
          bottom: -5px; /* Sesuaikan jarak vertikal garis bawah jika diperlukan */
          border-bottom: 1px solid;
        }

        </style>
    
    <h5 id="tanggal-hari" class="tanggal-hari"></h5>
    <h5 class="judul" style="text-align: center; margin-top: 50px; margin-left: 11px; font-family: Century Gothic, CenturyGothic, Geneva, AppleGothic, sans-serif; color: gray;"> Real-time Sensor Monitoring: Ensuring Accuracy and Efficiency </h5>
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
          .navbar-toggler-icon:hover {
            transform: scale(1.2);
        }

            </style>
        <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03 " >
          <ul  class="navbar-nav mr-auto mt-2 mt-lg-0" >
            
            <li class="nav-item dropdown dmenu" > 
                    <a class="nav-link dropdown-toggle dropdown-button" href="#" id="navbardrop" data-toggle="dropdown">
                    <span  class="navbar-toggler-icon"></span>
                    </a>
                    <div class="dropdown-menu sm-menu">
                    <a style="color: gray;" class="dropdown-item" href="/cht">• Home</a>
                    <a style="color: gray;" class="dropdown-item" href="about.php">• About</a>
                    <a style="color: gray;" class="dropdown-item" href="das.php">• Dasboard</a>
                    </div>
            </li>
            <li class="nav-item">
           
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
      <!-- TANGGAL PADA WEB -->
         
        <!-- BAGIAN TATA LETAK CHART -->

            <div class="card">


            <div class="box-container">

                <div class="box">
                <canvas width="500" height="300" id="chart1"></canvas>
                </div>

                <div class="box">
                <canvas id="chart2"></canvas>
                </div>

                <div class="box">
                <canvas width="500" height="300" id="chart3"></canvas>
                </div>

                <div class="box">
                <canvas id="chart4"></canvas>
                </div>

               
            </div>

            </div>




        <!-- <div style="display: rigid;">
            
                <div style="width: 50%; float: left; ">
                    <canvas id="chart1"></canvas>
                </div>
                <div style="width: 50%; float: left; ">
                    <canvas id="chart2"></canvas>
                </div> 
                <div style="margin-top:20px; width: 50%; float: left; ">
                    <canvas id="chart4"></canvas>
                </div>
                <div style="margin-top:20px; width: 50%; float: left; ">
                    <canvas id="chart3"></canvas>
                </div>
          
        </div> -->
        <!-- BATAS TATA LETAK CHART -->

        <script>
            //Awal Dari Chart 1
            $(document).ready(function(){
                // Inisialisasi chart awal
                var ctx = document.getElementById('chart1').getContext('2d');
                var chart1 = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [],
                        datasets: [{
                            label: 'Temperature',
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
                        responsive: true, // Mengaktifkan responsivitas grafik
                        maintainAspectRatio: false, // Mengabaikan aspek rasio saat menetapkan tinggi dan lebar secara langsung
                        height: 400, // Mengatur tinggi grafik
                        width: 600 
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
                function bukaHalamanBaru() {
                window.open("suhu.php", "_blank");
            }

            // Menambahkan event listener untuk chart1
            document.getElementById('chart1').addEventListener('click', bukaHalamanBaru);

                // Memanggil fungsi updateChart setiap 5 detik
                setInterval(updateChart, 1000);
                
                // Memanggil updateChart untuk pertama kali
                updateChart();
            });//Batas Chart 1
            
            //Awal Dari Chart 2
            $(document).ready(function(){
                // Inisialisasi chart awal
                var ctx = document.getElementById('chart2').getContext('2d');
                var chart2 = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [],
                        datasets: [{
                            label: 'Humiditiy',
                            data: [],
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1,
                            tension: 0.5,
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                        ticks: {
                        
                            callback: function(value, index, ticks) {
                                return value + '%';
                            }
                        }
                            }
                        },
                        responsive: true, // Mengaktifkan responsivitas grafik
                        maintainAspectRatio: false, // Mengabaikan aspek rasio saat menetapkan tinggi dan lebar secara langsung
                        height: 400, // Mengatur tinggi grafik
                        width: 600 
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
                                suhu.push(data[i].Humid);
                                time.push(data[i].tanggal);
                            }

                            chart2.data.labels = time;
                            chart2.data.datasets[0].data = suhu;
                            chart2.update();
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                }
                function bukaHalamanBaru() {
                window.open("tes4chart.php", "_blank");
            }

            // Menambahkan event listener untuk chart2
            document.getElementById('chart2').addEventListener('click', bukaHalamanBaru);
                // Memanggil fungsi updateChart setiap 5 detik
                setInterval(updateChart, 1000);

                // Memanggil updateChart untuk pertama kali
                updateChart();
            });//Batas Chart 2
            //Awal Dari Chart 4
            $(document).ready(function(){
                // Inisialisasi chart awal
                var ctx = document.getElementById('chart4').getContext('2d');
                var chart4= new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [],
                        datasets: [{
                            label: 'RTD',
                            data: [],
                            backgroundColor: 'rgba(255, 206, 86, 0.2)',
                            borderColor: 'rgba(255, 206, 86, 1)',
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
                        responsive: true, // Mengaktifkan responsivitas grafik
                        maintainAspectRatio: false, // Mengabaikan aspek rasio saat menetapkan tinggi dan lebar secara langsung
                        height: 400, // Mengatur tinggi grafik
                        width: 600 
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
                                suhu.push(data[i].RTD);
                                time.push(data[i].tanggal);
                            }

                            chart4.data.labels = time;
                            chart4.data.datasets[0].data = suhu;
                            chart4.update();
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                }
                function bukaHalamanBaru() {
                window.open("tes4chart.php", "_blank");
            }

            // Menambahkan event listener untuk chart4
            document.getElementById('chart4').addEventListener('click', bukaHalamanBaru);
                // Memanggil fungsi updateChart setiap 5 detik
                setInterval(updateChart, 1000);

                // Memanggil updateChart untuk pertama kali
                updateChart();
            });//Batas Chart 4
            //Awal Dari Chart 3
            $(document).ready(function(){
                // Inisialisasi chart awal
                var ctx = document.getElementById('chart3').getContext('2d');
                var chart3 = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [],
                        datasets: [{
                            label: 'CO2',
                            data: [],
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            tension: 0.5,
                        }]
                    },
                    options: {
                        /*plugins: {
                    title: {
                        display: true,
                        text: 'Ini adalah subtitle',
                        color: 'rgba(75, 192, 192, 1)',
                        position: 'bottom'
                    }
                },*/
                        scales: {
                        y: {
                        ticks: {
                        
                            callback: function(value, index, ticks) {
                                return value + ' ppm';
                            }
                        }
                            }
                        },
                        
                        responsive: true, // Mengaktifkan responsivitas grafik
                        maintainAspectRatio: false, // Mengabaikan aspek rasio saat menetapkan tinggi dan lebar secara langsung
                        height: 400, // Mengatur tinggi grafik
                        width: 600  
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
                                suhu.push(data[i].CO2);
                                time.push(data[i].tanggal);
                            }

                            chart3.data.labels = time;
                            chart3.data.datasets[0].data = suhu;
                            chart3.update();
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                }
                function bukaHalamanBaru() {
                window.open("tes4chart.php", "_blank");
            }

            // Menambahkan event listener untuk chart3
            document.getElementById('chart3').addEventListener('click', bukaHalamanBaru);
                // Memanggil fungsi updateChart setiap 5 detik
                setInterval(updateChart, 1000);

                // Memanggil updateChart untuk pertama kali
                updateChart();
            });//Batas Chart 3
            </script>
        <script>
            function openTable() {
            var tableContainer = document.getElementById("tableContainer");
            var tableFrame = document.getElementById("tableFrame");
            
            if (tableContainer.style.display === "none") {
                tableContainer.style.display = "block";
                tableFrame.src = "get_data.php";
            } else {
                tableContainer.style.display = "none";
                tableFrame.src = "";
            }
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
        </script>
        <style>
            a {
                color: gray; /* Warna teks awal */
                 /* Efek transisi */
                 /* Membuat tautan menjadi blok agar efek transform berfungsi */
            }
            
            a:hover {
                color: gray; /* Warna teks saat dihover */
                transform: scale(1.05);
                transition: transform 1s; 
                 /* Efek transform scale saat dihover */
            }
        </style>
         <ul class="navbar" style="list-style-type: none; color: black;">
        <li class="nav-item dropdown dmenu" style="margin-left: 45px;">
            <a style="color: gray;" class="nav-link dropdown-toggle"onclick="openTable()" href="#" id="navbardrop" data-toggle="dropdown">
            Open Data Table
            </a>
        </li>
        </ul> 

  
        <div id="tableContainer" style="display: none;">
            <!-- BAGIAN TABLE -->
    <script>
        // Mendapatkan URL saat ini
        function scrollIfPageExists() {
          const urlParams = new URLSearchParams(window.location.search);
          const halamanParam = urlParams.get('halaman');
          if (halamanParam) {
            const tableContainer = document.getElementById('tableContainer');
            if (tableContainer) {
              tableContainer.scrollIntoView({ behavior: 'smooth' });
            }
          }
        }

        // Panggil fungsi saat halaman selesai dimuat
        window.addEventListener('load', scrollIfPageExists);    
        var urlParams = new URLSearchParams(window.location.search);
            
            // Memeriksa apakah URL memiliki parameter "halaman"
            if (urlParams.has('halaman')) {
           
                // Memeriksa nilai parameter "halaman"
                var halamanValue = urlParams.get('halaman');
                
                // Memeriksa apakah nilai parameter "halaman" tidak kosong
                if (halamanValue !== '') {
                    // Mencari elemen dengan id "tableContainer"
                    var tableContainer = document.getElementById('tableContainer');
                    
                    // Mengubah properti "display" menjadi "block" atau "show"
                    tableContainer.style.display = 'block';
                }
            }
        
    </script>
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

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <div class="container">
         
      
        <div id="A"> <!-- BAGIAN TABLE UNTUK ME-REFRESH -->
        <style>
        .cosa{
          display: flex;
          flex-direction: row;
          justify-content: flex-end;
          align-items: left;
        }

        label, input[type="text"], input[type="button"] {
          margin-left: 10px;
        }
      </style>
       <script>
        var kartuElement = document.querySelector('.kartu');
        var table = kartuElement.querySelector('table');

        // Mengambil jumlah baris dalam tabel
        var rowCount = table.rows.length;

        // Mengatur tinggi berdasarkan jumlah baris
        if (rowCount > 10) {
          kartuElement.style.height = '500px'; // Ubah tinggi sesuai kebutuhan Anda
        } else {
          kartuElement.style.height = '300px'; // Ubah tinggi sesuai kebutuhan Anda
        }
      </script>
        <style>
        
       /* Gaya Kartu (Card Box) */
        /* Gaya Kartu (Card Box) */
        .kartu-container {
          display: flex;
          align-items: flex-start;
          justify-content: center;
          align-items: center;
          margin-bottom: 40px;
          margin-top: 20px;
           /* Mengatur tinggi sesuai kebutuhan Anda */
        }

        .kartu {
          background-color: #f7f7f7;
          border: 1px solid #ddd;
          border-radius: 10px;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
          
          padding-left: 35px;
          padding-right: 35px;
          transition: transform 1s;
          width: 800px;
          
          font-size: 14px;
        }

        .kartu:hover {
          transform: scale(1.02);
          box-shadow: 0 10px 15px rgba(0,0,0,.3);
        }

        .kartu table {
          text-align: center;
          width: 100%;
          margin-top: 20px;
          border-collapse: collapse;
        }

        .kartu th, .kartu td {
          border: 1px solid gray;
          padding: 10px;
          text-align: center;
        }

        .kartu tr:nth-child(odd) {
          background-color: #ECECEC;
        }
        .kartu tr:nth-child(even){
          background-color: #ffffff;
        }
        .kartu-container {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
            margin-top: 20px;
          }

          .input-wrapper {
            display: flex;
            align-items: center;
            margin-left: 10px;
            margin-top: 10px;
          }

          .input-label {
            font-size: 16px;
            font-weight: normal;
            color: gray;
            margin-right: 5px;
          }

          .input-field {
            text-align: center;
            border-radius: 8px;
            border-width: 1px;
          }

          .filter-button {
            list-style-type: none;
            color: gray;
            border-radius: 8px;
            border-width: 1px;
            font-size: 16px;
            margin-left: 10px;
          }
         </style>
    <div class="kartu-container">
      <div class="kartu">   
        <!-- BAGIAN LIST DOWNLOAD FILE -->
        <ul class="navbar" style="list-style-type: none; margin-top: 0px;">  
          <li class="nav-item dropdown dmenu" > 
            <a style="margin-right: 800px;  color: gray;" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> 
              Search Data - Download Data - Print Data 
            </a> 

     
            <div class="dropdown-menu sm-menu">  <input style="border-width: 1px; border-radius: 8px; text-align: center; align-items: center; font-size: 13px;" type="text" id="Time" name="valueToSearch" placeholder="Y-M-D h:m:s" onkeyup="updateIdTbody(this.value)" oninput="updateTable()" />
              <ul>
                <li class="dropdown-item"><a  style="text-decoration: underline;  border: none; color: gray;" href="export.php"> Excel</a></li>
                <li class="dropdown-item"><a  style="text-decoration: underline; border: none; margin-right: 30px; color: gray;" href="generate.php">PDF</a></li>
                <li class="dropdown-item"><a style="text-decoration: underline; border: none; color: gray;"  href= ""id="print-btn"> Print</a></li>
              </ul>
            </div>
            <div class="input-wrapper">
            <label for="to" class="input-label">From:</label>
            <input type="text" id="from" name="from" class="input-field">
            <label for="to" class="input-label">To:</label>
            <input type="text" id="to" name="to" class="input-field">
            <input type="button" id="filter" value="Filter" class="filter-button">
        </div>
            </li>
        </ul>
        
        <table id="table-utama" class="table" style="border: 1.5px solid black;">
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
        <!-- BAGIAN UNTUK NAVIGASI UTAMA -->
        <nav id="search" style="margin-top: 10px;">
                    <ul class="pagination justify-content-center">
              <li class="page-item">
                <a style="border: 1px solid #ccc; padding: 10px;" onclick="openTable()" class="page-link" href="das.php">First</a>
              </li>
              <li class="page-item">
                <a style="border: 1px solid #ccc; padding: 10px;" class="page-link" <?php $Previous = $halaman - 1; if ($halaman > 1) { echo "href='?halaman=$Previous'"; } ?>>
                  <span>&#171;</span> 
                </a>
              </li>
              
              <?php
              $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
              $start_page = 3;
              $end_page = $total_halaman;
              $extra_li = ''; // Variabel tambahan untuk menyimpan tag <li> tambahan
              $extra_li .= '<li class="page-item disabled"><a class="page-link" href="?halaman='.$next.'">...</a></li>';
              
              if ($total_halaman > 5) {
                if ($halaman <= $total_halaman - 1) {
                  $start_page = $halaman - 0;
                  $end_page = $halaman + 0;
                  
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
                echo $extra_li;
                
                echo '<li class="page-item">
                        <a style="border: 1px solid #ccc; padding: 10px;" class="page-link"';
                if ($halaman < $total_halaman) {
                  echo " href='?halaman=$next'";
                }
                echo '><span>&#187;</span></a>
                      </li>';
              }
              if ($halaman == $total_halaman){
                echo '<li class="page-item"><a class="page-link" >Last</a></li>';
              }
              else{
              echo '<li class="page-item"><a class="page-link" href="?halaman='.$total_halaman.'">Last</a></li>';
              }
              ?>

              
              </li>
            </ul>

        </nav>
        </div>
      </div>
          <!-- BAGIAN UNTUK NAVIGASI SEARCH -->
          <!-- 
          <nav id="scr">
            <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" <?php $PreviousA = $halamanA-1; if($halamanA > 1){ echo "href='?halamanA=$PreviousA'"; } ?>><span>&#171;</span></a>
              </li>
            <li class="page-item">
                <a class="page-link" href="?halamanA=1">First</a>
            </li>
              <?php
              $start_pageA = 3;
              $end_pageA = $total_halamanA;
              $extra_liA = ''; // Variabel tambahan untuk menyimpan tag <li> tambahan
              $extra_liA .= '<li class="page-item disabled"><span class="page-link">...</span></li>';
              if ($total_halamanA > 5) {      
                if ($halamanA <= $total_halamanA - 1) {
                  $start_pageA = $halamanA - 0;
                  $end_pageA = $halamanA + 0;
                  $extra_liA .= '<li class="page-item"><a class="page-link" href="?halamanA='.$total_halaman.'">Last</a></li>';
                  
                }
                if ($halamanA > 3) { 
                
                  $start_pageA = $halamanA - 2;
                  $end_pageA = $halamanA + 2;
                  if ($end_pageA > $total_halamanA) {
                    $end_pageA = $total_halamanA;
                  }
                } else {
                  $end_pageA = 5;
                }
                
                for ($xA = $start_pageA; $xA <= $end_pageA; $xA++) {
                  echo '<li class="page-item"><a class="page-link " href="?halamanA='.$xA.'">'.$xA.'</a></li>';
                }
                echo $extra_liA; echo '<li class="page-item">
                        <a class="page-link"';
                    if ($halamanA < $total_halamanA) {
                        echo " href='?halamanA=$nextA'";
                    }
                    echo '><span>&#187;</span></a>
                    </li>';
                    // Menampilkan tag <li> tambahan sebelum perulangan;
              }
              ?>
                      
            </ul>
          </nav>
            -->
        <!-- BATAS BAGIAN UNTUK NAVIGASI SEARCH --> 

        
        <style>
          .a{
          display: inline-block;
          text-decoration: none;
          color: #006cb3;
          padding: 13px 23px;
          border: thin solid #d4d4d4;
          transition: all 0.3s;
          font-size: 18px;
        }
        
        .a.active{
          background-color: #0d81cd;
          color: #fff;
        }
        .page-link {
          display: inline-block;
          padding: 10px;
          margin-bottom: 10px;
          background-color: #f5f5f5;
          border: 1px solid #ddd;
          color: gray;
          text-decoration: none;
          transition: transform 0.3s;
        }

        .page-link.active {
          background-color: gray;
          color: #fff;
        }

        .page-link:hover {
          transform: scale(1.2);
        }

        </style>
        <script>
            // Mendapatkan nilai halaman dari URL saat ini
          // Mendapatkan nilai halaman dari URL saat ini
            const currentPage = new URLSearchParams(window.location.search).get('halaman');

            // Mendapatkan semua elemen dengan kelas "page-link"
            const pageLinks = document.getElementsByClassName("page-link");

            // Iterasi melalui setiap elemen page-link
            for (let i = 0; i < pageLinks.length; i++) {
              const pageLink = pageLinks[i];
              const href = pageLink.getAttribute("href");

              // Memeriksa apakah href mengandung currentPage
              if (href.includes(`halaman=${currentPage}`)) {
                pageLink.classList.add("active");
              }
            }


          </script>
        
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
                hideElement("#loadTable");
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
            <!-- BATAS BAGIAN TABLE -->
        </div>
    </body>