<?php

include('setup.php');

?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script
</head>
<body>
        <!-- BAGIAN JS UNTUK DATAPICKER -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- BATAS BAGIAN JS UNTUK DATAPICKER -->
        <script>
        $(document).ready(function() {
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
                hideElement("#scr")
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
            });
        </script>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>User Data</h2>
      <label for="from" style="font-size: 16px; font-weight: normal; color: gray;">From:</label>
              <input style="text-align: center; border-radius: 8px; border-width: 1px;" type="text" id="from" name="from" >
              <label for="to" style="font-size: 16px; font-weight: normal; color: gray;">To:</label>
              <input style="text-align: center; border-radius: 8px; border-width: 1px;" type="text" id="to" name="to">
              <input style="color: gray; border-radius: 8px; border-width: 1px; font-size: 16px;" type="button" id="filter" value="Filter">
      <table class="table table-bordered print">
        <thead>
          <tr>
            <th>No</th>
            <th>Suhu</th>
            <th>Humid</th>
            <th>RTD</th>  
            <th>CO2</th>
        </tr>
        </thead>
        <tbody id="tabledata" >
          <!-- BAGIAN ISI DARI DATABASE -->
        </tbody>
      </table>

      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>