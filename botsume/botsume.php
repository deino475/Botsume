<?php
	include "connect.php";
	$botid = $_GET['id'];
	$userid = $_SESSION['userid'];
	$conn = $controller->connect();
	$message = NULL;

	//VERIFY USER
	$verify = mysqli_query($conn, "SELECT * FROM bots WHERE userid = '$userid' AND botid = '$botid' ");
	if (mysqli_num_rows($verify) != 1)
	{
		header("Location: index.php");
	}
	
	$bot = $controller->model('bot');
	if (isset($_POST['delete']))
	{
		$message = $bot->deleteQuestion($_POST['qid'],$conn);
	}
	if (isset($_POST['add']))
	{
		$message = $bot->addQuestion($botid, $controller->clean($conn, $_POST['question']),$controller->clean($conn, $_POST['answer']),$conn);
	}
	if (isset($_POST['fbsubmit']))
	{
		$message = $bot->setFacebook($conn, $controller->clean($conn, $_POST['apitoken']), $controller->clean($conn, $_POST['chatbotid']));
	}
	if (isset($_POST['fb-update']))
	{
		$message = $bot->updateFacebook($conn, $controller->clean($conn, $_POST['tokenchatbot']), $controller->clean($conn, $_POST['chatbotid']));
	}

	$botinfo = $bot->getSpecificBot($conn, $userid, $botid);
	$fbinfo = $bot->getFacebook($conn, $botid);
	$questions = $bot->getQuestions($conn, $botid);

	$controller->view('header');
	$controller->view('botsume', $data = array('bot'=>$botinfo,'questions'=>$questions,'fbinfo'=>$fbinfo, 'message' => $message));
	$controller->view('footer');
?>