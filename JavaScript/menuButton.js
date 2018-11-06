function myFunction() {
    document.getElementById("dropMenu").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target('.dropButton')) {

        var dropShow = document.getElementsByClassName("dropCont");
        var i;
        for (i = 0; i < dropShow.length; i++) {
            var openDropMenu = dropShow[i];
            if (openDropMenu.classList.contains('show')) {
                openDropMenu.classList.remove('show');
            }
        }
    }
};