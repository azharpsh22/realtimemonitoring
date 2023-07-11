//BAGIAN UNTUK CHART JS

//BAGIAN BATAS CHART JS
  // Cek URL halaman


    //Bagian Untuk Search
    $(document).ready(function() {
      $("#filter").click(function() {
        clearInterval(refreshInterval); // Menonaktifkan event click pada elemen saat tombol diteka
      });
      var refreshInterval;
      var urlParams = new URLSearchParams(window.location.search);
      var halamanParam = urlParams.get('halaman');
      
      // Event handler saat tombol di bagian <nav> diklik
        
      $('#Time').on("keyup", function() {
        clearInterval(refreshInterval); // Stop the table refreshing interval
        var Time = $(this).val();
        $.ajax({
          method: 'POST',
          url: 'scr.php',
          data: {Time: Time},
          success: function(response) {
            $("#tabledata").html(response);
          }
        });
      });

        

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
      setInterval(refreshTable, 1000);
    
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
      if (window.location.search.includes('http://localhost/cht/table_data.php?page-nr=')) {
        stopRefreshing(); // Memanggil fungsi untuk menghentikan interval refresh jika URL berisi '?page-nr='
      }
    });
    
    
    //BAGIAN LOAD TABLE UNTUK DASBOARD
    function loadTable() {
      // Buat objek XMLHttpRequest
      var xhttp = new XMLHttpRequest();
      // Atur fungsi callback untuk menangani respons dari server
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Ketika respons diterima, letakkan tabel di dalam elemen dengan id "tableContainer"
          document.getElementById("tableContainer").innerHTML = this.responseText;
        }
      };
      
      // Mengirim permintaan GET ke file PHP yang berisi kode tabel
      xhttp.open("GET", "table_data.php", true);
      xhttp.send();
    
    }
    
    
    //BAGIAN BARU DARI PAGINATION   
    $(document).ready(function(){

    load_data(1);

    function load_data(page, query = '')
    {
      $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{page:page, query:query},
        success:function(data)
        {
          $('#dynamic_content').html(data);
        }
      });
    }

    $(document).on('click', '.page-link', function(){
      var page = $(this).data('page_number');
      var query = $('#Time').val();
      load_data(page, query);
    });

    $('#Time').keyup(function(){
      var query = $('#Time').val();
      load_data(1, query);
    });

  });
    
    
    
    
    


  //BAGIAN DOWNLOAD PDF
     // Mendapatkan elemen target
     var container = document.getElementById('pdfbutton');

     // Membuat tombol baru
     var pdfbutton = document.createElement('pdfbutton');
     pdfbutton.innerHTML = 'PDF';
 
     // Menambahkan event listener untuk tombol
 
 
     // Menambahkan event listener untuk chart4
     document.getElementById('pdfbutton').addEventListener('click', function() {
     // Menampilkan pesan peringatan
     alert("Download Data As PDF File");
 
     window.open("generate.php", "_self");
   });
     // Menambahkan tombol ke dalam elemen target
     container.appendChild(pdfbutton);

//BAGIAN DOWNLOAD  EXCEL

    // Mendapatkan elemen target
    var container = document.getElementById('excelbutton');

    // Membuat tombol baru
    var button = document.createElement('excelbutton');
    excelbutton.innerHTML = 'Excel';

 
    document.getElementById('excelbutton').addEventListener('click', function() {
    // Menampilkan pesan peringatan
    alert("Download Data As Excel File");
	window.open("export.php", "_self");//Mendownload File nya
  });
    // Menambahkan tombol ke dalam elemen target
    container.appendChild(excelbutton);