<?php

session_start();

require_once '../includes/database.php';
require_once '../includes/functions.php';

$db = new database();
$schedules = $db->read(array('*'), 'trips');

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
                    Bus Schedule
                    <a href="add.php" class="btn btn-info pull-right">Add Schedule</a>
                </h1>

                <p>Select a bus to see/update bus schedule</p><br>
                
                <table id="example" class="display table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th>Bus</th>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Day</th>
                            <th>Departure</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($schedules as $schedule) { ?>
                        	<tr>
                                <td><?php echo $i++; ?></td>
            	                <td><?php echo $schedule['bus_id']; ?></td>
                                <td><?php echo $schedule['origin']; ?></td>
                                <td><?php echo $schedule['destination']; ?></td>
                                <td><?php echo $schedule['day']; ?></td>
                                <td><?php echo $schedule['time']; ?></td>
            	                <td></td>
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
