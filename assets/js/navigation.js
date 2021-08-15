const setUpNavigation = () => {
  // Node selection
  const navigation = document.querySelector(".site-header__links");
  const navButton = document.querySelector(".site-header__menu-button");
  const searchButton = document.querySelector(".site-header__search-button");

  const dropdowns = Array.from(
    document.querySelectorAll(".menu-item-has-children")
  ).map(ddLi => ({
    parent: ddLi,
    subMenu: ddLi.querySelector(".sub-menu"),
  }));

  // State
  let open = false;

  // Functions
  const toggleNav = () => {
    navigation.classList.toggle("active");
    open = !open;
  };

  const toggleSearch = () => {
    alert("Search!");
  };

  const toggleDropdown = dropdown => {
    return e => {
      e.preventDefault();

      const isParent =
        e.target.parentElement === dropdown.parent ||
        e.target === dropdown.parent;

      if (isParent) dropdown.subMenu.classList.toggle("active");
    };
  };

  // Event listeners
  navButton.addEventListener("mousedown", toggleNav);
  searchButton.addEventListener("mousedown", toggleSearch);
  dropdowns.forEach(dropdown =>
    dropdown.parent.addEventListener("mousedown", toggleDropdown(dropdown))
  );
};

window.addEventListener("DOMContentLoaded", setUpNavigation);
