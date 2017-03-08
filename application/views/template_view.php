<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная</title>
</head>
<body>
	<ol>
		<li><a href="../../main">Главная</a></li>
		<li><a href="../../books">Books</a></li>
		<li><a href="../../portfolio">Портфолио</a></li>
		<li><a href="../../articles">Articles</a></li>
		<?php 

		if(isset($_COOKIE['logged']))
		{
			echo "<li>Hello ".$_COOKIE['logged']."<form action='Auth' method='post'><input type='submit' name='quit' value='quit'></input></form></li>";
		}else
		{
			echo "<li><a href='../../auth'>Логин</a> или <a href='../../registration'>Регистрация</a></li>  ";
		}
		?>
	</ol>
	<?php include 'application/views/'.$content_view; ?>
</body>
<footer>Copyright C</footer>
</html>