<div id="regForm" class="siteForm">
    <div class="addSiteContainer">

        <div class="addSiteTitle">
            <img class="bigGCU" src="./IMAGES/gcu-logo.png">
            <img class="smallGCU" src="./IMAGES/gcu-logo1.png">
            <span class="close">&times;</span>

        </div>

        <div class="addSiteMain">

            <form action="./addStudent.php" method="post">

                <label>
                    <h4 class="siteWebForm">Student ID</h4>
                    <input class="spacing" type="text" name="studentID" id="studentID">
                </label>

                <br/>

                <label>
                    <h4 class="siteWebForm">First Name</h4>
                    <input class="spacing" type="text" name="firstName" id="firstName">
                </label>

                <br/>

                <label>
                    <h4 class="siteWebForm">Surname</h4>
                    <input class="spacing" type="text" name="surName" id="surName">
                </label>

                <br/>

                <label>
                    <h4 class="siteWebForm">Student Username</h4>
                    <input class="spacing" type="text" name="userName" id="userName" onchange="copyIt()">
                </label>

                <label>
                    <input class="spacing" type="hidden" name="studentEmail" id="studentEmail">
                </label>

                <br/>

                <br/>

                <label>
                    <h4 class="siteWebForm">Student Password</h4>
                    <input class="spacing" type="password" name="studentPassword" id="studentPassword">
                </label>

                <br/><br/>

                <button class="reset" type="reset">Reset</button>
                <button class="addSite" value="addSite" id="addSite">Add Student</button>

                <script type="text/javascript">
                    function copyIt() {
                        var userName = document.getElementById("userName").value;
                        document.getElementById("studentEmail").value = userName + "@caledonian.ac.uk";
                    }

                </script>

            </form>

        </div>

    </div>

</div>

<script type="text/javascript" src="./JavaScript/regForm.js"></script>