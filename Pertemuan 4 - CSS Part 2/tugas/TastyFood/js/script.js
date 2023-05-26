// Toogle active
const navbarNav = document.querySelector(".navbar-nav");

// when click hamburger menu
document.querySelector("#hamburger").onclick = () => {
  navbarNav.classList.toggle("active");
};

// click outside sidebar to remove nav
const hamburger = document.querySelector("#hamburger");
document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
