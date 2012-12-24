<?php
$dbhost='localhost';
$dbname="rss";
$dbuser="root";
$dbpass="";
$mysqll=mysql_connect($dbhost,$dbuser,$dbpass) or die("не конект");
@mysql_select_db($dbname) or die("не найдено бд");
$mysqll=@mysql_connect($dbhost,$dbuser,$dbpass);
@mysql_select_db($dbname);
@mysql_query("SET NAMES 'utf8'");
@mysql_query("SET CHARACTER SET 'utf8'");
@mysql_query("SET SESSION collation_connection = 'utf8';");
@mysql_query("SET SESSION collation_server='utf8_general_ci';");
@mysql_query("SET character_set_client='utf8'");
@mysql_query("SET character_set_connection='utf8'");
@mysql_query("SET character_set_results='utf8'");
@mysql_query("SET character_set_server='utf8'");