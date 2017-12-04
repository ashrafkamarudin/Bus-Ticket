<?php

var_dump($_POST);

session_start();

require_once 'includes/auth/authregister.php';
require_once 'includes/auth/authlogin.php';
require_once 'includes/functions.php';

if (isset($_POST['register'])) {

	$redirect = 'auth';
	$registration = new Registration(); // create a new registration object - registration happens here

	setflash($registration->errors, 'fail');
	if (empty($registration->errors)) {
		setflash($registration->messages, 'success');
	}

} elseif (isset($_POST['login'])) {

	$redirect = 'auth';
	$login = new login();

	setflash($login->errors, 'fail');
	if (empty($login->errors)) {
		setflash($login->messages, 'success');
		$redirect = 'warehouse';
	}
	
} elseif (isset($_GET['logout'])) {
	
	$login = new login();
	$redirect = 'auth';
}

redirect('http://localhost/bus-ticket/admin/' . $redirect);