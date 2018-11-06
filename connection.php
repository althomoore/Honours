<?php

define("DB_USER", "root");
define("DB_PASS", "");

$servername = "localhost";
$dbstudent = "studentdb";

session_start();

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbstudent",DB_USER, DB_PASS);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "CONNECTION SUCCESSFUL: ON TO THE NEXT ITTERATION";
}

catch(PDOException $e)
{
    echo "Failed to Connect: <br><br>" . $e -> getMessage();
}

?>
