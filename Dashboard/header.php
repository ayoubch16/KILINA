<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php include 'db-conn.php';?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="css/app.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/icons/dashboard.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="canonical" href="https://demo-basic.adminkit.io/charts-chartjs.html" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<?php 
 if($_SESSION["Reffuser"] == null) { 
    header("Location: sign.php");
 } 
?>