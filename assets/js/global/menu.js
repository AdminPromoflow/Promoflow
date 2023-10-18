// Define a Menu class
class Menu {
  constructor() {
    // Open Menu: Add event listener to display the menu container
    openMenuContainer.addEventListener("click", function() {
      menuContainer.style.display = "block";
    });

    // Close Menu: Add event listener to hide the menu container
    closeMenu.addEventListener("click", function() {
      menuContainer.style.display = "none";
    });

  }
}

// Get DOM elements
var closeMenu = document.getElementById('closeMenu'); // Close menu button
var menuContainer = document.getElementById('menuContainer'); // Menu container
var openMenuContainer = document.getElementById('openMenuContainer'); // Open menu button
const items = document.querySelectorAll(".items"); // Select all elements with class "items"

// Create an instance of the Menu class to handle menu functionality
const menuClass = new Menu();
