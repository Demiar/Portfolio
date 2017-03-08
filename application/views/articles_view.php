<h1>Статьи</h1>
<p><?php
	while ($row = $data->fetch())
			{
    		echo "<a href='article/id/".$row['id']."''><h1>".$row['title']."</h1></a>";
    		echo "<p>".$row['text']."</p>";
    		echo "<p>".$row['date']."</p>";
			}

?>
</p>