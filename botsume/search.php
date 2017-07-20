<?php
include 'connect.php';
$controller->view('header');
$bot = $controller->model('bot');
$conn = $controller->connect();
$bots = $bot->getAllBots($conn);
$controller->view('search', $data = array('data'=>$bots));
$controller->view('footer');
?>