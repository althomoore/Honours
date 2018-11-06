<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <title>Home Page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./CSS/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="./CSS/siteForm.css">
    <link rel="stylesheet" type="text/css" href="./CSS/tooltip.css">
    <link rel="stylesheet" type="text/css" href="./CSS/menuButton.css">



    <?php include './connection.php'; ?>
</head>

<body>

<header>


    <a href="http://www.gcu.ac.uk" class="header-logo" title="Glasgow Caledonian University home page">
        <img class="bigGCU" src="IMAGES/gcu-logo.png">
        <img class="smallGCU" src="IMAGES/gcu-logo1.png">
    </a>


    <div class="header-user">

        <div class="dropDownMenu">
            <div class="dropButton"></div>
            <div class="dropButton"></div>
            <div class="dropButton"></div>

            <div id="dropMenu" class="dropCont">


                <p class="menuTitle"><?php

                    echo "<b>" . $_SESSION['Name'] . " " . $_SESSION['Surname'] . "</b>";

                    ?>
                    <br/>
                    <?php

                    echo $_SESSION['ID'];


                    ?></p>
                <a href="https://www.gcu.ac.uk/">GCU Home Page</a>
                <a href="https://www.gcu.ac.uk/student/">GCU Learn</a>
                <a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office365.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=0&client-request-id=91bece4a-d441-4ffc-aa7f-6c4ac0afd46c&protectedtoken=true&domain_hint=caledonian.ac.uk&nonce=636594174823929479.b6369245-6f4d-4e1a-ae09-0d88303dda66&state=DYtJDoAgDABB3-AzWIRa6HOqxcRo4GT8vj3MHCYZa4yZlUmxUWUKZtwI1gI1ZUoEhfyujRJsDk8QB21lxy2Si1JrjlmEEa2-Sxgfh4OfJqNf3D0f_r1_&sso_reload=true">GCU Email</a>
                <a href="https://www.gcu.ac.uk/library//">GCU Library</a>
                <a href="https://www.gcu.ac.uk/staff/teachingtimetables/">GCU Timetables</a>
                <a href="#">Help</a>

                <a href='./index.php' class="menuTitle">
                    <button class="logoutButton"><b>Log Out</b></button>
                </a>
            </div>
        </div>


    </div>

</header>


<div class="welcome">
    <?php

    echo "Welcome to the GCU Portal " . "<b>" . $_SESSION['Name'] . "</b>";

    ?>
</div>

<p class="welcome-notice">A place to store all your course program websites in one place</p>

<div class="tooltip">
    <a href="#" id="addSiteBtn"><input type="button" class="roundPanel" value="+"><span class="tooltiptext">Click to add new site</span></a>

</div>

<?php include "./siteForm.php"; ?>

<section>

    <?php include './siteList.php'; ?>

</section>

</body>

</html>
