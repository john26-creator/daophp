<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/Admin.php");


$adminDAO = new Admin;
$admins = $adminDAO->findAll();

var_dump($admins);

?>
