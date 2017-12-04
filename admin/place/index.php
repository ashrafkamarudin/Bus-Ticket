<?php

session_start();

require_once '../includes/database.php';
require_once '../includes/functions.php';

$db = new database();
$places = $db->read(array('*'), 'places');

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
                    Origin / Destination
                    <a href="add.php" class="btn btn-info pull-right">Add Origin / Destination</a>
                </h1>

                <p>Pick up and Drop off point</p><br>
                
                <table id="example" class="display table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($places as $place) { ?>
                        	<tr>
                                <td><?php echo $i++; ?></td>
            	                <td><?php echo $place['id']; ?></td>
                                <td><?php echo $place['name']; ?></td>
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
