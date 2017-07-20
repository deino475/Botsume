<?php
	include "connect.php";
	$message = NULL;
	if (isset($_POST['submit']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$myconn = $controller->connect();
		$password = hash('ripemd160', $_POST['password']);
		$login = $controller->model('authentication');
		$email = $_POST['email'];
		$message = $login->login($email, $password, $myconn);
	}
	$controller->view('header');
	$controller->view('login', $data = array('message' => $message));
	$controller->view('footer');
?>