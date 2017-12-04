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
                    <h1>Add New Bus</h1><br>
                    <div class="form-group">
                        <label>New Bus Plate Number</label>
                        <input type="text" name="plate_num" class="form-control" placeholder="Enter Bus Plate Number">
                    </div>

                    <div class="form-group">
                        <label>New Bus Capacity</label>
                        <input type="number" name="capacity" class="form-control" placeholder="Enter Bus Capacity">
                    </div>

                    <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>

                    <input type="hidden" name="data" value="warehouse">

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
