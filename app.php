<?php
$page = $_GET['page'] ?? 'home';
$view = "views/{$page}.php";
include 'views/template.php';