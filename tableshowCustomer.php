<?php

function show_customer($conn){

//include "dbconnect.php";

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3> Customer Table<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."ID".'</th>'.'<th>'."Name".'</th>'.'<th>'."Loyalty Points".'</th>'.'<th>'."Address".'</th>'.'<th>'."Email".'</th>''<th>'."Password".'</th>''<th>'."Phone".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["customer_ID"]. "</td>";
		echo "<td>" . $row["customer_name"]. "</td>";
		echo "<td>" . $row["loyalty_points"]. "</td>";
		echo "<td>" . $row["address"]. "</td>";
		echo "<td>" . $row["email"]. "</td>";
		echo "<td>" . $row["Password"]. "</td>";
        echo "<td>" . $row["phone"]. "</td>";
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