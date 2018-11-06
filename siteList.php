<?php

include "./siteForm.php";

$query = "SELECT * FROM moduleSites INNER JOIN studentUser ON moduleSites.studentId = studentUser.studentID WHERE (studentUser.studentID='{$_SESSION['ID']}') ORDER BY modulesites.websiteName ASC";

foreach ($conn->query($query) as $row) {
    echo /** @lang sql */
        "
        <div class=\"tooltip\">
        
        <a href=\"" . $row['websiteLink'] . "\" target=\"_blank\"><input type=\"button\" class=\"panel\" value=\"" . $row['websiteName'] . "\"\"><span class=\"tooltippanel\"><br/>" . $row['websiteName'] . " <br/><br/> " . $row['module'] . "</span></a>
                
        </div>";
}
?>