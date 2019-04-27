<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
    <div style="height:900px; background-color: lightblue;" align="center">
        <br><br><br><br>


        <?php
        require("dbconnect.php");

        require("functions/viewEmployee.php");

        show_timesheet($conn);
        ?>



        <br><br><br><br>
        <hr width="50">
        <a href="Frontpage.html" style="color:red;font-weight:bold;">Home</a>
        <hr width="50">
    </div>
</body>

</html>