<?php 
/**
* 
*/
class Model_Article extends Model
{
	
	public function get_data($id_article)
	{
		include_once("application/core/database.php");

		

		return $data = $pdo->query('SELECT * FROM `article` WHERE `id`='.$id_article);	
	}
}
?>