<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/newsletter.php";
$news = new Newsletter();
$title = $_POST['title'];
$content = $_POST['content'];

if($news->newsletterUp($title,$content)){
	return true;
}


?>