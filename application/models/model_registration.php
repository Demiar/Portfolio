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
			
			$stmt = $pdo->query("INSERT INTO `Users` (`username`, `password`, `email`) VALUES ('$username', '$password', '$email')");

            if($stmt)
            {
              echo "Вы успешно зарегистрировались!";
            }			
		}
	}
}