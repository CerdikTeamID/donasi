<?php 
$host = "localhost";
$dbname = "zakat";
$dbuser = "root";
$dbpass = "";
$opts = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
$zkt = "mysql:host=$host;charset=utf8;dbname=$dbname;";
$db = new PDO($zkt, $dbuser, $dbpass, $opts);

$config['base_url'] = 'http://localhost/donasi/';
$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['base_url'] .= "://".$_SERVER['HTTP_HOST'];
$config['base_url'] .= preg_replace('@/+$@','',dirname($_SERVER['SCRIPT_NAME'])).'/';
?>