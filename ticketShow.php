<?php

function show_ticket($conn){

//include "dbconnect.php";

$sql = "SELECT Customer.customer_ID, Customer.customer_name, Customer.loyalty_points, Ticket.ticket_ID, Ticket.sales_date
		from Customer INNER JOIN ticket ON Ticket.customer_ID = Customer.customer_ID;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "<br><h3> Join of Customer and Ticket<h3> <br>";
	
	echo '<table border>';
	echo '<thead><tr>';
	echo '<th>'."ID".'</th>'.'<th>'."Name".'</th>'.'<th>'."Loyalty Points".'</th>'.'<th>'."Ticket ID".'</th>'.'<th>'."Sales Date".'</th>';
	echo '</tr></thead>';
	echo '<tbody>';

	while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["customer_ID"]. "</td>";
		echo "<td>" . $row["customer_name"]. "</td>";
		echo "<td>" . $row["loyalty_points"]. "</td>";
		echo "<td>" . $row["ticket_ID"]. "</td>";
		echo "<td>" . $row["sales_date"]. "</td>";
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