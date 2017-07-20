<?php
	include "connect.php";
	$message = NULL;

	if (!isset($_SESSION['userid']))
	{
		header("Location: login.php");
	}
	else
	{
		$userid = $_SESSION['userid'];
	}
	
	$bot = $controller->model('bot');
	$conn = $controller->connect();
	
	if (isset($_POST['makebot']))
	{	
		$message = $bot->createBot($_POST['botname'],$_POST['description'],$userid,$conn);
	}
	if (isset($_POST['add']))
	{
		$message = $bot->addQuestion($_POST['botid'],$_POST['question'],$_POST['answer'],$conn);
	}
	$bots = $bot->getBots($conn, $userid);
	$controller->view('header');
	$controller->view('dashboard', $data = array('message'=>$message, 'bots'=>$bots));
	$controller->view('footer');
?>