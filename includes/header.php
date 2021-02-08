<?php
require_once("../php-logic/db-connection.php");
require_once("../php-logic/cookie.php");
if (@$_SESSION["auth"] == true)
{
	$userLink = 'user.php';
	$registerLink = '../php-logic/exit.php';
	$registerText = @$_SESSION['login'] . '(выйти)';
} else
{
	$registerLink = 'register-page.php';
	$registerText = 'регистрация';
	$userLink = "auth-page.php";
}
echo '<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Парикмахерская</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Подключаем Bootstrap CSS -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
	<link rel="stylesheet" href="style.css" >
	<style>
   body {
    background: #eef1f3; /* Цвет фона */
   }
  </style>
</head>
<body>
<!-- Heared area-->
<header class="navbar justify-content-between bg-secondary">
<a class="navbar-brand text-light" href="../barbershop/">
    	<div class="d-inline-flex align-middle"><img src="../images/logo.png" width="60" height="60" class="d-inline-flex" alt=""></div>
    	<div class="d-inline-flex align-middle">Парикмахерская</div>
 </a>
<form class="form-inline">
	<p class="d-inline-flex align-middle text-light pr-4 mt-3">Звонить по номеру: +7-911-000-00-00</p>
    <input class="form-control mr-sm-2 bg-light" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-link" type="submit"><img src="../images/search.svg"></button>
  </form>
</header>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-between">
	<ul class="navbar-nav">
		<li class="nav-item active">
			<h5><a class="nav-link" href="' . $userLink . '">Пользователь</a></h5>
		</li>
		<li class="nav-item">
			<h5><a class="nav-link" href="price.php">Прайс Услуг</a></h5>
		</li>
		<li class="nav-item">
			<h5><a class="nav-link" href="employees.php">Работники и вакансии</a></h5>
		</li>
		<li class="nav-item">
			<h5><a class="nav-link" href="logbook.php">Журнал</a></h5>
		</li>
	</ul>
	<ul class="navbar-nav">
		<a class="nav-link" href="' . $registerLink . '">
	        <div class="d-inline-flex align-middle"><img src="../images/reg-img.png" width="17" height="20" class="d-inline-flex" alt=""></div>
	        <div class="d-inline-flex align-middle">' . $registerText . '</div>
		 </a>
	</ul>
</nav>
<div class="container main-content bg-white" style="height: auto; min-height: 90vh;">

'
?>