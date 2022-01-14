document.addEventListener("DOMContentLoaded", function(event) {

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')
});

function showNavbar(toggleId, navId, bodyId, headerId) {

    var toggle = document.getElementById(toggleId);
    var nav = document.getElementById(navId);
    var bodypd = document.getElementById(bodyId);
    var headerpd = document.getElementById(headerId);

    // Validate that all variables exist
    if (toggle && nav && bodypd && headerpd) {

        toggle.addEventListener('click', () => {
            // show navbar
            nav.classList.toggle('shownav')

            // change icon
            if (nav.classList.contains('shownav')) {
                toggle.innerHTML = ('&#xe5cd')
            } else {
                toggle.innerHTML = ('&#xe5d2')
            }

            // add padding to body
            bodypd.classList.toggle('body-pd')
                // add padding to header
            headerpd.classList.toggle('body-pd')
        })
    }
}