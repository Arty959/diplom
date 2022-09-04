<?php
session_start();
$url = explode('/', $_SERVER['REQUEST_URI']);

if ($url[1] == "about") {
  $content = file_get_contents("pages/about.html");
} else if ($url[1] == "contact") {
  $content = file_get_contents("pages/contact.html");
} else if ($url[1] == "help") {
  $content = file_get_contents("pages/help.html");
} else {
  $content = file_get_contents("pages/index.html");
}
if (!empty($content))
  require_once("template.php");
?>