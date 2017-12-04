<?php

require_once '../includes/database.php';

$db = new database();

$id = $_GET['id'];
$bus = $db->getID($id, 'bus');

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
                    <h1>Update Bus Information</h1><br>
                    <div class="form-group">
                        <label>Bus Plate Number</label>
                        <input type="text" name="plate_num" class="form-control" placeholder="Enter Bus Plate Number" value="<?php echo $bus['plate_num']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Bus Capacity</label>
                        <input type="number" name="capacity" class="form-control" placeholder="Enter Bus Capacity" value="<?php echo $bus['capacity']; ?>">
                    </div>

                    <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>
                    
                    <input type="hidden" name="data" value="warehouse">
                    <input type="hidden" name="id" value="<?php echo $bus['id']; ?>">

                    <button type="submit" class="btn btn-success" name="update">Update</button>
                </form>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require_once '../includes/footer.html'; ?>

</body>

</html>
