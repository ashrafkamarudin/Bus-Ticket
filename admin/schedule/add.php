<?php

session_start();

require_once '../includes/database.php';
require_once '../includes/functions.php';

$db = new database();
$busses = $db->read(array('*'), 'bus');
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
                <form class="col-md-6" action="../action.php" method="post">
                    <h1>Add New Trip</h1><br>
                    <div class="form-group">
                        <label>Bus</label>
                        <select name="bus_id" class="form-control">
                            <option>Select Bus</option>

                            <?php foreach ($busses as $key => $bus): ?>
                                <option value="<?php echo $bus['id']; ?>"><?php echo $bus['plate_num']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Origin</label>
                        <select name="origin" class="form-control">
                            <?php foreach ($places as $key => $place): ?>
                                <option value="<?php echo $place['id']; ?>"><?php echo $place['name']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Destination</label>
                        <select name="destination" class="form-control">
                            <?php foreach ($places as $key => $place): ?>
                                <option value="<?php echo $place['id']; ?>"><?php echo $place['name']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Day</label>
                        <select name="day" class="form-control">
                            <option>Select Day</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Time</label>
                        <input type="time" name="time" class="form-control" placeholder="Enter Bus Capacity">
                    </div>

                    <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>

                    <input type="hidden" name="data" value="trip">

                    <button type="submit" class="btn btn-success" name="add">Submit</button>
                </form>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require_once '../includes/footer.html'; ?>

</body>

</html>
