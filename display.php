<!DOCTYPE html>
<html> 
<body >
<div style="height:900px; background-color: lightblue;" align="center">
<br><br><br><br>


<?php
require("dbconnect.php");
//these are in the functions folder
require("functions/tableshowCustomer.php");
require("functions/tableshowEmployee.php");
require("functions/viewEmployee.php");


show_employee($conn);
show_customer($conn);
show_timesheet($conn);
?>



<br><br><br><br>
<hr width="50">
<a href="Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
</div>
</body> </html>
