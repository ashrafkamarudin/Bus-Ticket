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
                    <h1>Add New Origin / Destination</h1><br>
                    <div class="form-group">
                        <label>Place Abbreviation / ID</label>
                        <input type="text" name="place_id" class="form-control" placeholder="Enter Place Abbreviation / ID">
                    </div>

                    <div class="form-group">
                        <label>Place Name</label>
                        <input type="text" name="place_name" class="form-control" placeholder="Enter Place Name">
                    </div>

                    <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>

                    <input type="hidden" name="data" value="place">

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
