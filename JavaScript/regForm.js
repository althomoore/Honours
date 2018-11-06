var regForm = document.getElementById('regForm');
var btn = document.getElementById("addUserBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
    regForm.style.display = "block";
}
span.onclick = function () {
    regForm.style.display = "none";
}
window.onclick = function (event) {
    if (event.target == regForm) {
        regForm.style.display = "none";
    }
}