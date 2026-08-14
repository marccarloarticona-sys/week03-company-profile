document.addEventListener("DOMContentLoaded", function () {

    const navbar = document.getElementById("navbar");
    const navToggle = document.getElementById("navToggle");
    const navMenu = document.getElementById("navMenu");
    const navLinks = document.querySelectorAll(".nav-link");


    window.addEventListener("scroll", function () {

        if (window.scrollY > 30) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }

    });


    if (navToggle && navMenu) {

        navToggle.addEventListener("click", function () {

            navToggle.classList.toggle("active");
            navMenu.classList.toggle("open");

        });

    }


    navLinks.forEach(function (link) {

        link.addEventListener("click", function () {

            navToggle.classList.remove("active");
            navMenu.classList.remove("open");

        });

    });


    document.addEventListener("click", function (event) {

        if (
            navMenu &&
            navToggle &&
            !navMenu.contains(event.target) &&
            !navToggle.contains(event.target)
        ) {
            navToggle.classList.remove("active");
            navMenu.classList.remove("open");
        }

    });

});