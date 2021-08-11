const setUpNavigation = () => {
  const navigation = document.querySelector(".site-header__links");
  const navButton = document.querySelector(".site-header__menu-button");

  let open = false;

  const toggleNav = () => {
    navigation.classList.toggle("active");
    open = !open;
  };

  navButton.addEventListener("click", toggleNav);
};

window.addEventListener("DOMContentLoaded", setUpNavigation);
