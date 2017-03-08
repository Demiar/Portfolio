<?php

define(HOST, 'localhost');
define(USERNAME, 'root');
define(PASSWORD, '');
define(DBNAME, 'blog');

$dsn ='mysql:host='.HOST.';dbname='.DBNAME;


$opt = array
(
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
			

$pdo = new PDO($dsn, USERNAME, PASSWORD, $opt);