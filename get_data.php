<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chart";

 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
  
  $db= $conn;
$tableName="dat";
$columns= [ 'Suhu','Humid', 'RTD','CO2','Time'];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY no DESC LIMIT 20";
$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}?>

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM dat WHERE Time LIKE '$valueToSearch%' ORDER BY no DESC";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `dat` ORDER BY no DESC";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "chart");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
  <style>
    .center-table {
      margin: 0 auto;
    }
  </style>
</head>
<body>
<style>
.customButton{
	border-radius: 10px;
	font-family:Helvetica;
border: 0px solid black; padding: 5px;	
	background-color: white;
}
.customButton:hover{
	background-color: gray;
	
}
.pdftt:hover{
	
}
            

</style>

<input type="text" id="getName" name="valueToSearch" placeholder="Value To Search" onkeyup="filterTable()"/>,</input>
<script>
  $(document).ready(function(){
   $('#getName').on("keyup", function(){
     var getName = $(this).val();
     $.ajax({
       method:'POST',
       url:'search.php',
       data:{Time:getName},
       success:function(response)
       {
            $("#showdata").html(response);
       } 
     });
   });
  });
</script>


 <ul class="navbar" style="list-style-type: none; color: black;">
    <li class="nav-item dropdown dmenu" style="margin-left: 150px;">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Download Data
      </a>
      <div class="dropdown-menu sm-menu">
        <ul class="dropdown-list">
          <li class="dropdown-item"><a href="export.php">Excel</a></li>
          <li class="dropdown-item"><a href="generate.php">PDF</a></li>
        </ul>
      </div>
    </li>
  </ul>

   <!-- <div class="col-sm-0">
	<div style="margin-left: 220px; margin-bottom: 15px; border-radius:15px; border: 2.5px solid black; padding: 2.5px;	 ">
	<!--<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAkElEQVR4nO2UWwqAMAwE9xRavKIeV3ycJlJIIUioSBvFmoFFP1IzplXAccogzmuQC8C3AH4I4Z8h/eJHNAIINwQCr6nCxE1WRUITCFxLvLaYDsDMD9wBDBmBXtRup1oTCRICZs1zEknAvLm2v+kq77VzAstJkIjpm19JPNo8EUe9cMzHnptETLtQpXxXwGmfA7jybeFofmvAAAAAAElFTkSuQmCC"> -->
    <!-- <button id= "excelbutton" class="customButton" ></button>
  <button id="pdfbutton" class="customButton" style=" border: 0px solid black; padding: 5px;	
	background-color: white; margin-left:10px; font-family:Helvetica; border-radius:10px;"></button>
	</div>

    </div>-->
  </div>
  <script>
    function toggleTables() {
    var valueToSearch = document.getElementsByName("valueToSearch")[0].value.toLowerCase();
      var tableA = document.getElementById("A");
      var tableB = document.getElementById("B");

      if (valueToSearch !== '') {
        tableA.style.display = "none";
        tableB.style.display = "table";
      } else {
        tableA.style.display = "table";
        tableB.style.display = "none";
    }
  </script>
  <style>
    #B {
      display: none;
    }
  </style>
  <div class="row">
    <div class="col-sm-8 mx-auto">
      <?php echo $deleteMsg??''; ?>
      <div class="table-responsive">
        <div id= "A" style="display: table;">
		<table class="table table-bordered" style="border: 1.5px solid black;">
          <thead>
            <tr>
              <th style="background-color: rgb(176,176,176); text-align: center; border: 1.5px solid black;">Tanggal</th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">Temparature </th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">Humidity</th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">RTD</th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">CO2</th>
            </tr>
          </thead>
          <tbody id="showdata">

            <?php
            if (is_array($fetchData) OR (is_array($data))) {
              $sn = 1;
              foreach ($fetchData as $data)
			  foreach ($data as $das){
            ?>
                <tr>

                  <td  style="text-align: center; border: 1.5px solid black;"><?php echo $data['Time'] ?? ''; ?>  </td>
                  <td  style="text-align: center; border: 1.5px solid black;"><?php echo $data['Suhu'] ?? ''; ?>&deg;C</td>
                  <td  style="text-align: center; border: 1.5px solid black;"><?php echo $data['Humid'] ?? ''; ?>%</td>
                  <td  style="text-align: center; border: 1.5px solid black;"><?php echo $data['RTD'] ?? ''; ?>&deg;C</td>
				  <td  style="text-align: center; border: 1.5px solid black;"><?php echo $data['CO2'] ?? ''; ?> ppm</td>
                </tr>
            <?php
                $sn++;
              }
            } else {
            ?>
              <tr>
                <td colspan="3">
                  <?php echo $fetchData; ?>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
		</div>
		<!-- BAGIAN TABLE 2 -->
		<div id="B" style="display: table;"> 
		<table class="table table-bordered" style="border: 1.5px solid black;">
          <thead>
            <tr>
              <th style="background-color: rgb(176,176,176); text-align: center; border: 1.5px solid black;">Tanggal</th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">Temparature </th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">Humidity</th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">RTD</th>
              <th style="text-align: center; background-color: rgb(176,176,176); border: 1.5px solid black;">CO2</th>
            </tr>
          </thead>
          <tbody id="showdata">

            <?php
            while($row = mysqli_fetch_array($search_result)):
            ?>
                <tr>
				   <td style="text-align: center; border: 1.5px solid black;"><?php echo $row['Time'];?></td>
                    <td style="text-align: center; border: 1.5px solid black;"><?php echo $row['Suhu'];?></td>
                    <td style="text-align: center; border: 1.5px solid black;"><?php echo $row['Humid'];?></td>
                    <td style="text-align: center; border: 1.5px solid black;"><?php echo $row['RTD'];?></td>
					<td style="text-align: center; border: 1.5px solid black;"><?php echo $row['CO2'];?></td>
                </tr>
				<?php endwhile;?>
          </tbody>
        </table>
		</form>
		</div>
      </div>
    </div>
  </div>
</div>
<script>
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
  </script>  
  
<!-- BAGIAN BUTTON 2 -->

<script>
   
  </script>  

<script>
  $(document).ready(function() {
    setInterval(function() {
      $.ajax({
        url: "refresh_table.php", // Ganti dengan URL yang benar ke skrip PHP Anda
        type: "GET",
        success: function(data) {
          $("#table-body").html(data);
        }
      });
    }, 1000); // Waktu dalam milidetik, di sini diatur ke 5 detik
  });
</script>
<script>
  $(document).ready(function() {
    setInterval(function() {
      $.ajax({
        url: "refresh_table.php", // Ganti dengan URL yang benar ke skrip PHP Anda
        type: "GET",
        success: function(data) {
          $("#table-body").html(data);
        }
      });
    }, 1000); // Waktu dalam milidetik, di sini diatur ke 5 detik
  });
</script>
</body>
</html>




