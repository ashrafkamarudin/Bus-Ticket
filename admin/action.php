<?php

session_start();

require_once 'includes/database.php'; // require database library
require_once 'includes/functions.php';

extract($_POST);
extract($_GET); // extract $_GET into var

$db = new database(); // initialize database object

if (isset($_POST['add'])) {

	switch ($data) {
		case 'warehouse':
			$url = 'warehouse';

			if ($db->create(array(
				'plate_num' => $plate_num,
				'capacity' => $capacity
				), 'bus')) {
				
				setFlash(array('Bus has been added'), 'success');
			}
			break;

		case 'trip':
			$url = 'Schedule';

			if ($db->create(array(
				'bus_id' => $bus_id,
				'origin' => $origin,
				'destination' => $destination,
				'day' => $day,
				'time' => $time
				), 'trips')) {
				
				setFlash(array('Schedule has been added'), 'success');
			}
			break;

		case 'place':
			$url = 'place';

			if ($db->create(array(
				'id' => $place_id,
				'name' => $place_name
				), 'places')) {
				
				setFlash(array('Place has been added'), 'success');
			}
			break;
		
		default:
			# code...
			break;
	}
}

if (isset($_POST['update'])) {

	switch ($data) {
		case 'warehouse':
			$url = 'warehouse';

			if ($db->update(array(
				'plate_num' => $plate_num,
				'capacity' => $capacity
				), $id, 'bus')) {
				
				setFlash(array('Bus has been updated'), 'success');
			}
			break;

		case 'user':
			$url = 'users';

			if ($db->update(array(
				'name' => $name,
				'email' => $email,
				'role' => $role
				), $id, 'users')) {
				
				setFlash(array('User has been updated'), 'success');
			}
			break;
		
		default:
			# code...
			break;
	}
}

if (isset($_GET['delete'])) {

	switch ($data) {
		case 'warehouse':
			$url = 'warehouse';

			if ($db->delete($delete, 'bus')) {

				setFlash(array('a Bus has been deleted'), 'success');
			}
			break;

		case 'user':
			$url = 'users';

			if ($db->delete($delete, 'users')) {

				setFlash(array('User has been deleted'), 'success');
			}
			break;

		case 'booking':
			$url = 'booking';

			if ($db->delete($delete, 'booking')) {

				setFlash(array('Booking been deleted'), 'success');
			}
			break;
		
		default:
			# code...
			break;
	}
}

//flash();

var_dump($_POST);

redirect('http://localhost/bus-ticket/admin/' . $url);