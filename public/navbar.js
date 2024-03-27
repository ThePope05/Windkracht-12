document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        let navbar = document.querySelector("nav");
        if (window.scrollY > 110) {
            navbar.classList.remove("absolute");
            navbar.classList.add("fixed");
            navbar.classList.remove("mt-28");
            navbar.classList.add("top-0");
        } else {
            navbar.classList.remove("fixed");
            navbar.classList.add("absolute");
            navbar.classList.remove("top-0");
            navbar.classList.add("mt-28");
        }
    });

    window.addEventListener("scroll", function () {
        let navbar = document.querySelector("nav");
        if (window.scrollY > 250) {
            navbar.classList.add("bg-dark-aqua");
            navbar.classList.add("shadow-xl");
        } else {
            navbar.classList.remove("bg-dark-aqua");
            navbar.classList.remove("shadow-xl");
        }
    });
});
