const hamburger = document.querySelector(".hamburger");
const hamburgerIcon = document.querySelector(".hamburger i");
const hamburgerMenu = document.querySelector(".hamburger-menu");

hamburger.onclick = function () {
  hamburgerMenu.classList.toggle("open");

  const isOpen = hamburgerMenu.classList.contains("open");
  hamburgerIcon.classList = isOpen ? "fa-solid fa-xmark" : "fa-solid fa-bars";
};
