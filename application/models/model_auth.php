<?php
/**
* 
*/
class Model_Auth extends Model
{
	
	function get_data()
	{
		if(!empty($_POST['username']) && !empty($_POST['password']))
		{
			$username = $_POST['username'];
			$password = md5($_POST['password']);

			include_once("application/core/database.php");
			
			$stmt = $pdo->query("SELECT id FROM `Users` WHERE `username` = '$username' AND `password` = '$password'");

			$res = $stmt->FETCH(PDO::FETCH_NUM);

			if($res)
			{
				setcookie("logged", "$username", time()+3600);
				header('Location: main');
			}
			else
			{
				echo "Не верно!";
			}
			
		}

		if(!empty($_POST['quit']))
		{
			
			setcookie('logged', $_COOKIE['logged'], 1);
			header('Location: main');
		}
	}
}