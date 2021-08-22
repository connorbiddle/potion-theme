const setUpNavigation = () => {
  // Node selection
  const navigation = document.querySelector(".site-header__links");
  const navButton = document.querySelector(".site-header__menu-button");
  const searchModal = document.querySelector(".site-header__search-modal");
  const searchButton = document.querySelector(".site-header__search-button");
  const searchField = document.querySelector(".search-field");

  const dropdowns = Array.from(
    document.querySelectorAll(".menu-item-has-children")
  ).map(ddLi => ({
    parent: ddLi,
    subMenu: ddLi.querySelector(".sub-menu"),
  }));

  // State
  let navOpen = false;
  let searchOpen = false;

  // Functions
  const toggleNav = () => {
    if (searchOpen) toggleSearch();
    navigation.classList.toggle("active");
    navOpen = !navOpen;
  };

  const toggleSearch = () => {
    if (navOpen) toggleNav();
    searchModal.classList.toggle("active");
    searchOpen = !searchOpen;
    if (searchOpen) setTimeout(() => searchField.focus(), 50);
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
