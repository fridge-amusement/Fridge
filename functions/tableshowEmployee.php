<?php

function show_employee($conn){

include "dbconnect.php";

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3> Employee Table<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."ID".'</th>'.'<th>'."Name".'</th>'.'<th>'."Shift".'</th>'.'<th>'."Salary".'</th>'.'<th>'."Department".'</th>'.'<th>'."Password".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
		echo "<td>" . $row["employee_ID"]. "</td>";
		echo "<td>" . $row["employee_name"]. "</td>";
		echo "<td>" . $row["shift"]. "</td>";
		echo "<td>" . $row["salary"]. "</td>";
		echo "<td>" . $row["dept_name"]. "</td>";
		echo "<td>" . $row["password"]. "</td>";
		echo '</tr>';
    }
	
	echo '</tbody>';
	echo '</table>';
	
    // output data of each row
    
	
} else {
    echo "0 results";
}
//$conn->close();
}
?>