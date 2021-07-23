const setUpNavigation = () => {
  const navigation = document.querySelector(".site-header__links");
  const navButton = document.querySelector(".site-header__menu-button");

  const toggleNav = () => {
    navigation.classList.toggle("active");
  };

  navButton.addEventListener("click", toggleNav);
};

window.addEventListener("DOMContentLoaded", setUpNavigation);
