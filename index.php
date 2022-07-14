<?php include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daystar User Details</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <section>
        <h1>Daystar Students</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['firstname'];?></td>
                <td><?php echo $rows['lastname'];?></td>
                <td><?php echo $rows['email'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>

