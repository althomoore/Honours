<!DOCTYPE html>

<html lang="en">

<head>
    <title>Sign On</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="./CSS/siteForm.css">

    <?php include './connection.php'; ?>

</head>

<body>

<header>

    <a href="http://www.gcu.ac.uk" class="header-logo" title="Glasgow Caledonian University home page"><img
                src="IMAGES/gcu-logo.png"></a>

</header>

<section>

    <div class="form">

        <h3>GCU STUDENT SIGN IN</h3>


        <form action="./userLogin.php" method="post">

            <label>
                <h4>Username</h4>
                <input type="text" name="studentName" id="studentName" onchange="copyIt()" autofocus>

                <input type="hidden" name="email" id="email">
            </label>

            <label>
                <h4>Password</h4>
                <input type="password" name="password" id="password">
            </label>

            <div class="buttons">
                <a class="register" href="#" id="addUserBtn">Register New Student</a>

                <button>Sign In</button>
            </div>

    </div>

    <script type="text/javascript">
        function copyIt() {
            var userName = document.getElementById("studentID").value;
            document.getElementById("email").value = userName + "@caledonian.ac.uk";
        }

    </script>

    </form>


    <?php include "./register.php"; ?>

    </div>
</section>



</body>

</html>
