var siteForm = document.getElementById('siteForm');
var btn = document.getElementById("addSiteBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
    siteForm.style.display = "block";
}
span.onclick = function () {
    siteForm.style.display = "none";
}
window.onclick = function (event) {
    if (event.target == siteForm) {
        siteForm.style.display = "none";
    }
}