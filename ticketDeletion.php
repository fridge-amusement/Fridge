<!DOCTYPE html>
<html>
	<head>
		<title>Delete A ticket</title>
	</head>
	
	<body>
	<div style="height:900px; background-color: lightblue;" align = "center">
	<?php
	
		require("dbconnect.php");
		require("ticketShow.php");
		
			if(isset($_POST['delete'])){
				$t_id = $_POST['t_id'];
				$t_cid = $_POST['t_cid'];
			
			
				echo "<br> Tickets before the deletion<br>";
			
				//show_ticket($conn);
				echo "<br/";
				echo "DEBUGG INFO";
				echo "<br/";
				echo $t_id;
				echo "<br/";
				echo $t_cid;
				echo "<br/";
				
				$purchased_sql = "DELETE FROM purchased where ticket_id = '$t_id' and customer_id = '$t_cid;";
				$sql = "DELETE FROM ticket where ticket_id = '$t_id' and customer_id = '$t_cid'; ";
				
				$purchased_result = mysqli_query($conn, $sql);
				if(!$purchased_result){
					die('Could not delete data from purchased: ' . mysqli_error($conn));
				}


				$result = mysqli_query($conn, $sql);
				if(!$result){
					die('Could not delete data from tickets: ' . mysqli_error($conn));
				}
			
				echo "Removed data";
				echo"<br> The Customer joined Ticket Table after deletion<br>";
			
				show_ticket($conn);
				mysqli_close($conn);
				
			} else {
			echo "SOMETHING WENT WRONG";
		?>
		<br><br><br><br>
     <p>Enter Ticket info for deletion<br> </p>
      <form method = "post" action = "<?php $_PHP_SELF ?>">
         <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
               <td width = "250">Ticket ID</td>
               <td>
                  <input name = "t_id" type = "number" id = "t_id">
               </td>
            </tr>
         
            <tr>
               <td width = "250">Customer ID</td>
               <td>
                  <input name = "t_cid" type = "number" id = "t_cid">
               </td>
            </tr>
          <tr>
               <td width = "250"> </td>
               <td>
                  <input name = "delete" type = "submit" id = "delete"  value = "delete">
               </td>
            </tr>
            
         </table>
   
	  
   <?php
      }
   ?>
   </div>
   
   </body>
</html>