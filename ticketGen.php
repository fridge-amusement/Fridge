<!DOCTYPE html>
<html>

<head>
    <title>Generates new ticket</title>
</head>

<body>
    <div style="height:900px; background-color: white;" align="center">

        <?php
        require("dbconnect.php");

        if (isset($_POST['addTicket'])) {
       
            $_ticketID = rand(000001, 999999);
            $_custID = $_POST['i_custID'];
            $_saleDate = "2018-12-24";

            echo "DUBUG INFO";
            echo "<br>";
            echo $_ticketID;
            echo "<br>";
            echo $_custID;
            echo "<br>";
            $sql = "INSERT INTO ticket(ticket_id, sale_date, customer_ID) VALUES ($_ticketID, $_saleDate, $_custID)";
            $retval = mysqli_query($conn, $sql); 
            if (!$retval) {
                die('Could not buy ticket: ' . mysqli_error($conn));
            } else {
                echo "Ticket purchased!\n";
            }
            //ADDS TICKET+CUSTOER TO TABLE 'PURCHASED'
            $sql = "INSERT INTO purchased(ticket_id, customer_ID) VALUES ($_ticketID, $_custID)";
            $retval = mysqli_query($conn, $sql);
            if (!$retval) {
                echo "Couldn't add to table purchased";
            }
            //UPDATES LOYALTY POINTS
            $sql = "UPDATE customers SET loyalty_points = loyalty_points + 10 where customer_ID = $_custID";
            $retval = mysqli_query($conn, $sql); //SENDS UPDATE TO LOYALTY POINTS

            if (!$retval) {
                die('Could not update loyaloty points: ' . mysqli_error($conn));
            } else {
                echo "Loyalty points updated!\n";
            }

            mysqli_close($conn);
        } else {
            ?>
            <br><br><br><br>
            <p>Input customer ID number to buy ticket<br> </p>
            <form method="post" action="<?php $_PHP_SELF ?>">
                <table width="600" border="0" cellspacing="1" cellpadding="2">
                    <tr>
                        <td width="250">ID</td>
                        <td>
                            <input name="i_custID" type="text" id="i_custID">
                        </td>
                    </tr>

                    <tr>
                        <td width="250"> </td>
                        <td>
                            <input name="addTicket" type="submit" id="add" value="Insert">
                        </td>
                    </tr>

                </table>

            <?php
        }
        ?>
            <br><br><br><br>
            <hr width="50">
            <a href="Frontpage.html" style="color:red;font-weight:bold;">Home</a>
            <hr width="50">

    </div>

</body>

</html>