<?php

include 'connection.php';

$studentID = $_POST['studentID'];
$firstName = $_POST['firstName'];
$surName = $_POST['surName'];
$email = $_POST['studentEmail'];
$userName = $_POST['userName'];
$password = $_POST['studentPassword'];
$date = date('Y-m-d H:i:s');

$query = $conn->prepare(/** @lang text */
    "INSERT INTO studentUser VALUES('$studentID','$firstName','".addslashes($surName)."','$email','$userName','$password','$date')");
$query->execute();
$conn = null;

header('Location: ./index.php');

?>