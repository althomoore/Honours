<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <title>Sign On</title>

    <link rel="stylesheet" type="text/css" href="./CSS/stylesheet.css">
</head>

<body onload="setFocus()">

<header>

    <a href="http://www.gcu.ac.uk" class="header-logo" title="Glasgow Caledonian University home page"><span>Glasgow Caledonian University</span></a>

</header>

<section>

    <?php

    include "connection.php";

    $studentNAME = $_POST['studentName'];
    $_SESSION["studentName"] = $studentNAME;

    $studentPASSWORD = $_POST['password'];
    $_SESSION["password"] = $studentPASSWORD;

    $query = /** @lang text */
        ("SELECT * FROM studentuser WHERE '$studentNAME' = studentName AND '$studentPASSWORD' = password");

    foreach ($conn->query($query) as $row) {
        if ($studentName = 'studentName' and $studentPASSWORD = 'password') {
            $_SESSION['Name'] = $row['Name'];
            $_SESSION['Surname'] = $row['Surname'];
            $_SESSION['ID'] = $row['studentID'];

            header('Location: ./home.php');
        } else {
            echo "Unsuccessful, Please Try Again";
        }
    }
    echo "<div class='form'><h3>Invalid Username/Password</h3>
    <b>Are you registered yet?</b>
    <br/>
    This system is independent from the GCU system.
    <br/>
    Please register as new user to use this service.
    <br/><br/>
    If you have already registered, please try again with the correct username & password.
    <div class='buttons'><a href='./index.php'><button>TRY AGAIN</button></a></div></div>";

    $conn = null;

    ?>


</section>

</body>

</html>