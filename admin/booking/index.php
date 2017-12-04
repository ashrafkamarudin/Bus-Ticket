<?php

session_start();

require_once '../includes/database.php';
require_once '../includes/functions.php';

$db = new database();

$bookings = $db->run('SELECT * FROM `booking` INNER JOIN trips ON booking.trip_id = trips.id INNER JOIN bus ON trips.bus_id = bus.id')->fetchAll();

$i = 1; // initialize count value

?>

<!DOCTYPE html>
<html lang="en">

<head>

<?php require_once '../includes/header.html'; ?>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once '../includes/sidebar.html'; ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

                <?php Flash(); // display flash message ?>

                <h1>
                    Booking List
                </h1><br>
                
                <table id="example" class="display table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th>Bus</th>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Date</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookings as $booking) { ?>
                        	<tr>
                                <td><?php echo $i++; ?></td>
            	                <td><?php echo $booking['plate_num']; ?></td>
                                <td><?php echo $booking['origin']; ?></td>
                                <td><?php echo $booking['destination']; ?></td>
                                <td><?php echo $booking['date']; ?></td>
                                <td><?php echo $booking['quantity']; ?></td>
            	                <td><a href="../action.php?data=booking&delete=<?php echo $booking['id']; ?>"><i class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('Are you sure?')"></i></a></td>
            	            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

	<?php require_once '../includes/footer.html'; ?>

</body>

</html>
