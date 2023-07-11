
<?php
$conn = mysqli_connect("localhost","root","","cht");
  
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
   while($row = mysqli_fetch_assoc($query))
   {
       $data .=  "<tr><td style='border: 1.5px solid black;'>".$row['Time']."</td><td style='border: 1.5px solid black;'>".$row['Suhu']."</td><td style='border: 1.5px solid black;'>".$row['Humid']."</td><td style='border: 1.5px solid black;'>".$row['RTD']."</td><td style='border: 1.5px solid black;'>".$row['CO2']."</td></tr>";
   }
    echo $data;
}
 ?>