<!DOCTYPE html>
<html>

<head>
	<title>Purchased Tickets</title>
</head>

<body>
	<div style="height:900px; background-color: lightblue;" align="center">
		<br><br><br><br>

		<?php

		require("dbconnect.php");

		function show_ticket($conn)
		{

			//include "dbconnect.php";

			$sql = "SELECT customers.customer_ID, customers.customer_name, customers.loyalty_points, ticket.ticket_ID, ticket.sale_date from customers INNER JOIN ticket ON ticket.customer_ID = customers.customer_ID;";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {

				echo "<br><h3> Join of Customer and Ticket<h3> <br>";

				echo '<table border>';
				echo '<thead><tr>';
				echo '<th>' . "ID" . '</th>' . '<th>' . "Name" . '</th>' . '<th>' . "Loyalty Points" . '</th>' . '<th>' . "Ticket ID" . '</th>' . '<th>' . "Sales Date" . '</th>';
				echo '</tr></thead>';
				echo '<tbody>';

				while ($row = $result->fetch_assoc()) {
					echo '<tr>';
					echo "<td>" . $row["customer_ID"] . "</td>";
					echo "<td>" . $row["customer_name"] . "</td>";
					echo "<td>" . $row["loyalty_points"] . "</td>";
					echo "<td>" . $row["ticket_ID"] . "</td>";
					echo "<td>" . $row["sale_date"] . "</td>";
					echo '</tr>';
				}

				echo '</tbody>';
				echo '</table>';

				// output data of each row


			} else {
				echo "0 results";
			}
			$conn->close();
		}
		?>
		<?php
		//CALLING FUNCTION
		include "dbconnect.php";
		show_ticket($conn);
		?>
		<br><br><br><br>
		<hr width="50">
		<a href="Frontpage.html" style="color:red;font-weight:bold;">Home</a>
		<hr width="50">
	</div>
</body>

</html>