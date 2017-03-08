<h1>Статья</h1>
<p>
	<?php	 

	foreach($data as $row){
	echo '<h1>'.$row['title'].'</h1>';
	echo '<p>'.$row['text'].'</p>';
	echo '<p>'.$row['date'].'</p>';

}
?>
</p>