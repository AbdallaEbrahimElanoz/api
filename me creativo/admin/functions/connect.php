<?php 

define("HOST", 'localhost');
define("USER", 'root');
define("PASS", '');
define("DBNAME", 'me_creativo');

$conn = new mysqli(HOST , USER , PASS , DBNAME);
$conn -> set_charset('utf8');
?>