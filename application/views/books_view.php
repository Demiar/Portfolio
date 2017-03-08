<h1>Прочитанные книги</h1>
<table style=" border: solid black 1px">
<tr>
<td>id</td>
<td>book</td>
<td>author</td>
<td>rating</td>
<td>ending</td>
<td>comment</td>
</tr>
<tr>
<?php
	foreach($data as $row)
	{
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['book']."</td>";
		echo "<td>".$row['author']."</td>";
		echo "<td>".$row['rating']."</td>";
		echo "<td>".$row['ending']."</td>";
		echo "<td>".$row['comment']."</td>";
	}
?>
</tr>
</table>
