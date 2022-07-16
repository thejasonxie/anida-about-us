(function () {
    let menuHamburgerBtn = document.querySelector(".navbar-hamburger-btn");
    let miniMenu = document.querySelector(".navbar-menu");

    menuHamburgerBtn.addEventListener("click", toggleMiniMenu);
    window.addEventListener("resize", handleMiniMenu);

    if (window.innerWidth <= 640) {
        miniMenu.classList.add("display-none");
    }

    function toggleMiniMenu() {
        miniMenu.classList.toggle("display-none");
    }

    function handleMiniMenu() {
        if (window.innerWidth > 640) {
            miniMenu.classList.remove("display-none");
        } else {
            miniMenu.classList.add("display-none");
        }
    }
})();
