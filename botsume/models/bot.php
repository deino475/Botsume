<?php
class Bot
{
	public function createBot($name, $description, $userid, $myconn)
	{
		$search = mysqli_query($myconn, "SELECT * FROM bots WHERE botname = '$name'");
		if (mysqli_num_rows($search) == 0)
		{
			$insert = mysqli_query($myconn, "INSERT INTO bots VALUES ('','$userid','$name','$description',UUID(),'')");
			if ($insert)
			{
				return '<p class = "bg-success">You created a new bot.</p>';
			}
			else
			{
				return '<p class = "bg-danger">Your bot was not created.</p>';
			}
		}
		else
		{
			return '<p class = "bg-warning">Please choose another name for a bot.</p>';
		}
	}

	public function addQuestion($botid,$question,$answer,$conn)
	{
		$search = mysqli_query($conn, "INSERT INTO questions VALUES ('','$botid',UUID(),'$question','$answer')");
		if ($search)
		{
			return '<p class = "bg-success">You successfully added a question for this bot.</p>';
		}
		else
		{
			return '<p class = "bg-warning">You were unable to add a question to your bot. Please try again later.</p>';
		}
	}

	public function getBots($conn, $userid)
	{
		$getBots = mysqli_query($conn,"SELECT * FROM bots WHERE userid = '$userid'");
		$myBots = array();
		while ($row = mysqli_fetch_assoc($getBots))
		{
			array_push($myBots, $row);
		}
		return $myBots;
	}

	public function getSpecificBot($conn, $userid, $botid)
	{
		$getBot = mysqli_query($conn, "SELECT * FROM bots WHERE userid = '$userid' AND botid = '$botid' ");
		$myBot = array();
		while ($row = mysqli_fetch_assoc($getBot))
		{
			array_push($myBot, $row);
		}
		return $myBot;
	}
	public function getAllBots($conn)
	{
		$getBots = mysqli_query($conn,"SELECT * FROM bots");
		$myBots = array();
		while ($row = mysqli_fetch_assoc($getBots))
		{
			array_push($myBots, $row);
		}
		return $myBots;
	}

	public function getQuestions($conn, $botid)
	{
		$getQuestions = mysqli_query($conn, "SELECT * FROM questions WHERE botid = '$botid'");
		if (mysqli_num_rows($getQuestions) == 0)
		{
			return 0;
		}
		else
		{
			$questions = array();
			while ($row = mysqli_fetch_assoc($getQuestions))
			{
				array_push($questions, $row);
			}
			return $questions;
		}
	}

	public function deleteQuestion($quid, $conn)
	{
		$deleteQuestion = mysqli_query($conn, "DELETE FROM questions WHERE questionid = '$quid'");
		if ($deleteQuestion)
		{
			return '<p class = "bg-success">You successfully deleted a question from this bot.</p>';
		}
		else
		{
			return '<p class = "bg-warning">An error occurred. Please try again later.</p>';
		}
	}

	public function getFacebook($conn, $botid)
	{
		$getAPIStuff = mysqli_query($conn, "SELECT * FROM facebook WHERE botid = '$botid'");
		if (mysqli_num_rows($getAPIStuff) == 0)
		{
			return 0;
		}
		else
		{
			$fbinfo = array();
			while ($row = mysqli_fetch_assoc($getAPIStuff))
			{
				array_push($fbinfo, $row);
			}
			return $fbinfo;
		}
	}

	public function setFacebook($conn, $apitoken, $botid)
	{
		$setAPIStuff = mysqli_query($conn, "INSERT INTO facebook VALUES ('','$botid','$apitoken','')");
		if ($setAPIStuff)
		{
			return '<p class = "bg-success">Success.</p>';
		}
		else
		{
			return '<p class = "bg-warning">An error occurred.</p>';
		}
	}

	public function updateFacebook($conn, $apitoken, $botid)
	{
		$updateAPIStuff = mysqli_query($conn, "UPDATE facebook SET apitoken = '$apitoken' WHERE botid = '$botid'");
		if ($updateAPIStuff)
		{
			return '<p class = "bg-success">Success.</p>';
		}
		else
		{
			return '<p class = "bg-warning">An error occurred.</p>';
		}
	}
}