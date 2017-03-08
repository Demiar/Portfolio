<?php
/**
* 
*/
class Model_Registration extends Model
{
	
	function save_data()
	{
		if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']))
		{
			$username = $_POST['username'];
			$password = md5($_POST['password']);
            $email = $_POST['email'];

			include_once("application/core/database.php");
			
			$stmt = $pdo->query("INSERT INTO `Users` WHERE `username` = '$username', `password` = '$password', `email` = '$email'");

            if($stmt)
            {
              return $data = "Вы успешно зарегестрировались!";
              setcookie("logged", "$username", time()+3600);
            }			
		}
	}
}