<?php
    include ('setup.php');
 
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
               </tr>";
               $sn++;
     
           }
       
            echo $data;
           
        }
?>