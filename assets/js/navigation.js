const setUpNavigation = () => {
  // Node selection
  const navigation = document.querySelector(".site-header__links");
  const navButton = document.querySelector(".site-header__menu-button");

  const dropdowns = Array.from(
    document.querySelectorAll(".menu-item-has-children")
  ).map(ddLi => ({
    parent: ddLi,
    subMenu: ddLi.querySelector(".sub-menu"),
  }));

  // Functionality
  let open = false;

  const toggleNav = () => {
    navigation.classList.toggle("active");
    open = !open;
  };

  const toggleDropdown = dropdown => {
    return e => {
      e.preventDefault();

      const isParent =
        e.target.parentElement === dropdown.parent ||
        e.target === dropdown.parent;

      if (isParent) {
        dropdown.subMenu.classList.toggle("active");
      }
    };
  };

  navButton.addEventListener("mousedown", toggleNav);
  dropdowns.forEach(dropdown =>
    dropdown.parent.addEventListener("mousedown", toggleDropdown(dropdown))
  );
};

window.addEventListener("DOMContentLoaded", setUpNavigation);
