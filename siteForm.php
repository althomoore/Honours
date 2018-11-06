<div id="siteForm" class="siteForm">
    <div class="addSiteContainer">

        <div class="addSiteTitle">
            <img class="bigGCU" src="./IMAGES/gcu-logo.png">
            <img class="smallGCU" src="./IMAGES/gcu-logo1.png">
            <span class="close">&times;</span>

        </div>

        <div class="addSiteMain">

            <form action="addSite.php" method="post">

                <label>
                    <div class="addSiteLabels"><h4>Select Module Associated with Website</h4>
                        <select name="module">

                            <option>Choose a Module...</option>
                            <br/>
                            <option value="All Modules">Site for All Modules</option>
                            <option></option>
                            <option value="Honours Project">Honours Project</option>
                            <option value="Business Process Modelling">Business Process Modelling</option>
                            <option value="Client Side Web Development">Client Side Web Development</option>
                            <option value="Mobile Platform Development">Mobile Platform Development</option>
                            <option value="UI/UX Design">UI/UX Design</option>
                        </select></div>
                </label>

                <label>
                    <h4 class="siteWebForm">Website Name</h4>
                    <input class="spacing" type="text" name="websiteName" id="websiteName" placeholder="Familiar Name for the Web Site">
                </label>

                <br/>

                <label>
                    <h4 class="siteWebForm">Website Login Link</h4>
                    <input class="spacing" type="text" name="websiteLink" id="websiteLink"
                           placeholder="Paste login URL here">
                </label>

                <label>
                    <h4 class="siteWebForm">Website Username</h4>
                    <input class="spacing" type="text" name="siteUser" id="siteUser"
                           placeholder="Input Username for Website login">
                </label>

                <label>
                    <h4 class="siteWebForm">Website Password</h4>
                    <input class="spacing" type="text" name="sitePassword" id="sitePassword"
                           placeholder="Input Password for Website login">
                </label>

                <label>
                    <input type="hidden" name="studentID" id="studentID" value="<?php echo $_SESSION['ID']; ?>">
                </label>

                <br/><br/>

                <button class="reset" type="reset">Reset</button>
                <button class="addSite" value="addSite" id="addSite">Add Site</button>

            </form>

        </div>

    </div>

</div>

<script type="text/javascript" src="JavaScript/siteForm.js"></script>
