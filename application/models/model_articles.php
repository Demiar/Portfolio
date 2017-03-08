<?php
class Model_Articles extends Model
{
	
	public function get_data()
	{
		include_once("application/core/database.php");

		return $data = $pdo->query('SELECT * FROM article');			
	}
}
?>