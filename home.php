<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html>
</style>
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

<a class="dribbble" href="https://dribbble.com/shots/7441241-Button-Hover-Effects" target="_blank"><img src="https://cdn.dribbble.com/assets/dribbble-ball-mark-2bd45f09c2fb58dbbfb44766d5d1d07c5a12972d602ef8b32204d28fa3dda554.svg" alt=""></a>

<script>
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
            document.addEventListener("DOMContentLoaded", function() {
            var dropdownButton = document.querySelector(".dropdown-button");
            var dropdownList = document.querySelector(".dropdown-list");

            dropdownButton.addEventListener("click", function() {
              dropdownList.classList.toggle("show");
            });

            document.addEventListener("click", function(event) {
              if (!dropdownButton.contains(event.target)) {
                dropdownList.classList.remove("show");
              }
            });
          });

          // Mendeteksi jenis perangkat berdasarkan User Agent string

document.querySelectorAll('.button').forEach(button => button.innerHTML = '<div><span>' + button.textContent.trim().split('').join('</span><span>') + '</span></div>');
</script>
<style>
  .container {
    
    grid-gap: 20px; 
	justify-content: space-between;
}

  
</style>
<h5 id="tanggal-hari" style=" margin-top: -5vh; font-size: 18px; margin-left: 40vh;"></h5>
  <h5 style="margin-top : 3vh; text-align: center; font-family: Century Gothic, CenturyGothic, Geneva, AppleGothic, sans-serif; color: gray;"> Real-time Sensor Monitoring: Ensuring Accuracy and Efficiency </h5>
   
  <nav class="navbar navbar-expand-sm   navbar-light bg-light">
    <div class="navbar-grid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <style>
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
          /* Gaya untuk PC browser */
          @media (min-width: 768px) {
            .pc-layout {
              display: block;
            }
            .mobile-layout {
              display: none;
            }
          }

          /* Layout untuk mobile browser */
          @media (max-width: 767px) {
            .pc-layout {
              display: none;
            }
            .mobile-layout {
              display: block;
            }
          }

    </style>
        <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03 " >
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0 " >
          <li class="nav-item dropdown dmenu" > 
                    <a class="nav-link dropdown-toggle dropdown-button" href="#" id="navbardrop" data-toggle="dropdown">
                    <span  class="navbar-toggler-icon"></span>
                    </a>
                    <div class="dropdown-menu sm-menu">
                    <a style="color: gray;" class="dropdown-item" href="">• Home</a>
                    <a style="color: gray;" class="dropdown-item" href="about.php">• About</a>
                    <a style="color: gray;" class="dropdown-item" href="dasboard">• Dasboard</a>
                    </div>
            </li>
            <li class="nav-item">
            
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
           <!-- <li class="nav-item dropdown dmenu">
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

      
    <title>Real-time Sensor Monitoring</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<style>
    .card {
      width: 800px;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      margin: 10px;
    }

    .card-header {

      font-weight: bold;
      font-size: 24px;
      margin-bottom: 10px;
	   text-align: center;
	   font-family: "Times New Roman", Times, serif;
    }

    .card-content {
      margin-bottom: 10px;
    }
.container {
  position: relative;
  height: 100vh;
}

.chart-container {
  
  height: 400px;
}

  </style>
</head>

<body>


  
</body>
</html>