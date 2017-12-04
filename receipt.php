<?php

require_once 'admin/includes/database.php';

$booking = new Database();

extract($_POST);

$data = array(
	'trip_id' => $trip,
	'quantity' => $quantity,
	'date' => $date_board);

$table = 'booking';

$booking->create($data, $table);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>

	<style type="text/css">
		.zui-table {
		    border-collapse: collapse;
		    border-spacing: 0;
		    font: normal 13px Arial, sans-serif;
		    text-align: left;
		}
		.zui-table thead th {
		    padding: 10px;
		    text-align: center;
		    text-shadow: 1px 1px 1px #fff;
		}
		.zui-table tbody td {
		    padding: 10px;
		    text-shadow: 1px 1px 1px #fff;
		}
	</style>
</head>
<body>
<div class="form" style="margin: 4em auto;text-align: center">
	<h2>Ticket Summary</h2>

	<span class="progress"><span></span></span>

	<div class="panels">
		<form action="index.html" method="get" id="form1">
			<table class="zui-table" align="center">
				<tr>
					<td>Name</td>
					<td><?php echo $name; ?></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><?php echo $phone; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $address; ?></td>
				</tr>
				<tr>
					<td>Trip Detail</td>
					<td> From <?php echo $origin; ?> to <?php echo $destination; ?></td>
				</tr>
				<tr>
					<td>Date of Trip</td>
					<td><?php echo $date_board; ?></td>
				</tr>
				<tr>
					<td>Ticket Quantity</td>
					<td> <?php echo $quantity; ?> ticket(s) </td>
				</tr>
			</table>

		</form>
	</div>

	<div id="submit">
    	<button class="button" form="form1"><span>Return</span></button>
	</div>

</div>
</body>
</html>