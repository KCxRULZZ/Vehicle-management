var navMenu = document.getElementById("nav-menu");
var mobileMenu = document.getElementById("mobile-menu");
var mobileMenuContent = document.getElementById("mobile-menu-content");


navMenu.addEventListener("click", function () {
    mobileMenu.classList.toggle('active');
    mobileMenuContent.classList.toggle('active');
});

var mobileMenuClose = document.getElementById("mobile-menu-close");

mobileMenuClose.addEventListener("click", function () {
    mobileMenuContent.classList.remove('active');

    setTimeout(function () {
        mobileMenu.classList.remove('active');
    }, 700);

});
