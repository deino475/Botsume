<?php
	include "connect.php";
	$message = NULL;
	if (isset($_POST['submit']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$myconn = $controller->connect();
		$username = $controller->clean($myconn, $_POST['username']);
		$password = hash('ripemd160', $_POST['password']);
		$signup = $controller->model('authentication');
		$email = $_POST['email'];
		$message = $signup->signup($email, $password, $username,$myconn);
	}
	$controller->view('header');
	$controller->view('signup', $data = array('message' => $message));
	$controller->view('footer');
?>