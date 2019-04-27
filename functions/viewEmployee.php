<?php

function show_timesheet($conn){

include "dbconnect.php";


$sql = "CREATE VIEW timesheet AS SELECT employee_ID, employee_name, shift, dept_name FROM employees";
$sql1 = "SELECT * FROM timesheet";
$result = $conn->query($sql1);


if ($result->num_rows > 0) {
	
	echo "<br><h3> Timesheet <h3><br>";
	
	echo '<table border class="blueTable">';
	echo '<thead><tr>';
	echo '<th>'."ID".'</th>'.'<th>'."Name".'</th>'.'<th>'."Shift".'</th>'.'<th>'."Department".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
		echo "<td>" . $row["employee_ID"]. "</td>";
		echo "<td>" . $row["employee_name"]. "</td>";
		echo "<td>" . $row["shift"]. "</td>";
		echo "<td>" . $row["dept_name"]. "</td>";
		echo '</tr>';
    }
	
	echo '</tbody>';
	echo '</table>';
	
    
	} else {
    echo "0 results";
}
$conn->close();
}
