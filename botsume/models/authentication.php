<?php
class authentication
{
	public function signup($email, $password, $username, $conn)
	{
		$message = NULL;
		$search = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' OR username = '$username' OR password = '$password'");
		if (mysqli_num_rows($search) == 0)
		{
			$insert = mysqli_query($conn, "INSERT INTO user VALUES ('',UUID(),'$username','$email','$password')");
			if ($insert)
			{
				$message = '<p class = "bg-success">You have successfully signed up for Botsumé. You can log in.</p>';
			}
			else
			{
				$message = '<p class = "bg-danger">Something went wrong and you were not able to sign up to Botsumé.</p>';
			}
		}
		else
		{
			$message = '<p class = "bg-warning">Either someone is using your username, password, or email. Please try different credentials.</p>';
		}
		return $message;	
	}
	public function login($email,$password,$conn)
	{
		$login = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
		if (mysqli_num_rows($login) == 1)
		{
			while ($row = mysqli_fetch_assoc($login))
			{
				$_SESSION['userid'] = $row['userid'];
				header("Location: dashboard.php");
			}
		}
		else
		{
			return '<p class = "bg-warning">Your credentials are incorrect. Please try again.</p>';
		}
	}
}