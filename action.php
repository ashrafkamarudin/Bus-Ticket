<?php

session_start();

require_once 'admin/includes/database.php'; // require database library
require_once 'admin/includes/functions.php';

extract($_POST);
extract($_GET); // extract $_GET into var

$db = new database(); // initialize database object

//echo "data = " . $data . "<br>origin = " . $origin . "<br>destination = " . $destination . "<br>date = " . $date . "<br>day = " . $day;

if (isset($_GET['data'])) {
	
	switch ($data) {
		case 'place':
			$places = $db->read(array('*'), 'places');

			//echo "<select>";

			foreach ($places as $key => $place) {
				echo "<option value='" . $place['id'] . "'>" . $place['name'] . "</option>";
			}
			
			//echo "</select>";
			break;

		case 'bus':
			$day = date('l', strtotime($date));

			$trips = $db->read(array(
				'*', 
				'where' => 'origin = "' . $origin . '" AND destination = "' . $destination . '" AND day = "' . $day .'"'), 'trips');

			echo '
			<h2>Choose Your Bus.</h2>

			<table cellspacing="0" class="display zui-table" id="example" width="100%">
				<thead>
					<tr>
						<th>#</th>
						<th>From</th>
						<th>To</th>
						<th>Day</th>
						<th>Time</th>
						<th></th>
					</tr>
				</thead>
				<tbody>';

				foreach ($trips as $key => $trip) {
					echo '

					<tr>
						<td>1</td>
						<td>' . $trip['origin'] . '</td>
						<td>' . $trip['destination'] . '</td>
						<td>' . $trip['day'] . '</td>
						<td>' . $trip['time'] . '</td>
						<td> 
							<div class="form-group" style="margin:0">
								<input type="radio" name="trip" value="' . $trip['id'] . '" required>
							</div>
						</td>
					</tr>
					';
				}

			echo '
				</tbody>
			</table>
			';
			break;
		
		default:
			# code...
			break;
	}
}