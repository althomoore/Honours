<?php

include 'connection.php';

$siteModule = $_POST['module'];
$siteName = $_POST['websiteName'];
$siteLink = $_POST['websiteLink'];
$student = $_POST['studentID'];
$siteUser = $_POST['siteUser'];
$sitePassword = $_POST['sitePassword'];

$query = $conn->prepare(/** @lang sql */
    "INSERT INTO modulesites VALUES('','$siteModule','$siteName','$siteLink','$student','$siteUser','$sitePassword')");
$query->execute();
$conn = null;
header('Location: ./home.php');

?>