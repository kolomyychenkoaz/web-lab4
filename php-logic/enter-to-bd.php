<?php
require_once("../php-logic/db-connection.php");
$errors = array();
if (isset($_POST))
{
	$name = strip_tags(mysqli_real_escape_string($link, $_POST['name']));
	$service = strip_tags(mysqli_real_escape_string($link, $_POST['service']));
	$phone =strip_tags( mysqli_real_escape_string($link, $_POST['phone']));
	$visitDate = strip_tags(mysqli_real_escape_string($link, $_POST['visitDate']));
	$visitDate = preg_replace('/T/', ' ', $visitDate);
	$visitDate .= ':00';
	if (!empty($phone))
	{
		mysqli_query($link, "INSERT INTO log ( name, visit_date, service_name, number) VALUES ( '" . $name . "', '"
				. $visitDate . "', '" . $service . "', '" . $phone . "')");
	} else
	{
		mysqli_query($link, "INSERT INTO log ( name, visit_date, service_name) VALUES ( '" . $name . "', '"
				. $visitDate . "', '" . $service . "')");
	}
	header('Location: http://' . $_SERVER['SERVER_NAME'] . '/web/barbershop/logbook.php');
}
?>