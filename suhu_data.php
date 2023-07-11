<?php
// Koneksi ke database
include ('setup.php');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
		$tableName = "dat";
		$columns = ['Suhu','Time'];
		$fetchData = fetch_data($conn, $tableName, $columns);

		if (is_array($fetchData)) {
		  $sn = 1;
		  foreach ($fetchData as $data) {
			echo '<tr>';
			echo '<td  style="text-align: center; border: 1.5px solid black;">' . $sn . '</td>';
			echo '<td  style="text-align: center; border: 1.5px solid black;">' . $data['Time'] . '</td>';
			echo '<td  style="text-align: center; border: 1.5px solid black;">' . $data['Suhu'] .'&deg;C' .'</td>';
			echo '</tr>';
			$sn++;
		  }
		} else {
		  echo '<tr><td colspan="8">' . $fetchData . '</td></tr>';
		}

		function fetch_data($db, $tableName, $columns) {
		  if (empty($db)) {
			$msg = "Database connection error";
		  } elseif (empty($columns) || !is_array($columns)) {
			$msg = "Columns Name must be defined in an indexed array";
		  } elseif (empty($tableName)) {
			$msg = "Table Name is empty";
		  } else {
			$columnName = implode(", ", $columns);
			$query = "SELECT " . $columnName . " FROM $tableName ORDER BY no DESC LIMIT 10";
			$result = $db->query($query);
			if ($result == true) {
			  if ($result->num_rows > 0) {
				$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
				$msg = $row;
			  } else {
				$msg = "No Data Found";
			  }
			} else {
			  $msg = mysqli_error($db);
			}
		  }
		  return $msg;
}
?>