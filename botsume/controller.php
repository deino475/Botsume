<?php
class Controller
{
	public function model($model)
	{
		require_once 'models/'.$model.'.php';
		return new $model();
	}

	public function view($view, $data = array())
	{
		require_once 'views/'.$view.'.php';
	}

	public function getabs($fileloc)
	{
		return 'http://localhost:8888/botsume/'.$fileloc;
	}

	public function clean($conn, $text)
	{
		return mysqli_real_escape_string($conn,$text);
	}
	
	public function connect()
	{
		$conn = mysqli_connect('localhost','root','root','botsume');
		return $conn;
	}
	
}