<?php
include 'connect.php';
$conn = $controller->connect();
$getmsg = $_GET['message'];
$getid = $_GET['id'];
if (strlen($getmsg) > 0)
{
	$questionparts = explode('?', $getmsg);
	$answers2questions = array();
	foreach ($questionparts as $aquestion) 
	{
		if (strlen($aquestion) != "0")
		{
			$orderby = array();
			$terms = explode(" ",$aquestion);
			foreach ($terms as $word) 
			{
				array_push($orderby,"CASE WHEN question LIKE '%".$word."%' THEN 1 ELSE 0 END");
			}
			$orderby2 = implode(' + ', $orderby);
			echo $orderby2;
			$searchForAnswer = mysqli_query($conn, "SELECT * FROM questions WHERE  botid = '$getid' ORDER BY ('$orderby2') LIMIT 1");
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
	echo implode("#", $answers2questions);
}
?>