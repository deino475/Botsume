<?php
$conn = mysqli_connect('localhost','root','root','botsume');

if (isset($_GET['hub_challenge']))
{
	print_r($_GET['hub_challenge']);
}
else
{
	if (isset($_GET['botid']))
	{
		$botid = $_GET['botid'];

		$getAPIToken = mysqli_query($conn, "SELECT apitoken FROM facebook WHERE botid = '$botid'");
		if (mysqli_num_rows($getAPIToken) == 1)
		{
			while ($row = mysqli_fetch_assoc($getAPIToken))
			{
				$token = $row['apitoken'];
			}
		}

		$input = json_decode(file_get_contents('php://input'), true);
		$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
		$message = $input['entry'][0]['messaging'][0]['message']['text'];

		$questionparts = explode('?', $message);
		$answers2questions = array();
		foreach ($questionparts as $aquestion) 
		{
			if (strlen($aquestion) != "0")
			{
				$searchForAnswer = mysqli_query($conn, "SELECT answer FROM questions WHERE question LIKE '$aquestion%' AND botid = '$getid' LIMIT 1");
				if (mysqli_num_rows($searchForAnswer) >= 1)
				{
					while ($row = mysqli_fetch_assoc($searchForAnswer))
					{
						array_push($answers2questions, $row['answer']);
					}
				}
				else
				{
					array_push($answers2questions, "I do not have an answer to your question. But the creator of the bot is adding more responses to questions daily.");
				}			
			}
		
		}
		$response = implode(" ", $answers2questions);
		$url = 'https://graph.facebook.com/v2.6/me/messages?access_token='.$token;
		//FACEBOOK SENDING MESSAGE

		$data = array(
			'recipient' => array('id' => $sender);
			'message' => array('text' => $response);
		);

		$jsonData = json_encode($data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
		if(!empty($input['entry'][0]['messaging'][0]['message']))
		{
 			$result = curl_exec($ch);
		}
	}
}
?>