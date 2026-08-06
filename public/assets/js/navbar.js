window.addEventListener("scroll", function () {

    const nav = document.querySelector(".dc-navbar");

    if (!nav) return;

    if (window.scrollY > 40) {
        nav.classList.add("navbar-scrolled");
    } else {
        nav.classList.remove("navbar-scrolled");
    }

});