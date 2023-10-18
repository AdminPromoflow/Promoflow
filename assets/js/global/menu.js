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
   changePathImageOpenLogin(level) {
      // Directorio base para las imágenes
      var baseDirectory = "../";

      // Ajustar el directorio base según el nivel
      if (level === 2) {
          baseDirectory = "../../";
      }

      // Rutas de las imágenes
      var logoImagePath = baseDirectory + "assets/img/global/menu/logo.png";
      var openMenuImagePath = baseDirectory + "assets/img/global/menu/menu-icon.png";
      var closeMenuImagePath = baseDirectory + "assets/img/global/menu/close.png";

      // Cambiar las fuentes de las imágenes
      logoImg.src = logoImagePath;
      openMenuContainer.src = openMenuImagePath;
      closeMenu.src = closeMenuImagePath;
  }

}

// Get DOM elements
var logoImg = document.getElementById('logoImg'); // logoImg menu
var closeMenu = document.getElementById('closeMenu'); // Close menu button
var menuContainer = document.getElementById('menuContainer'); // Menu container
var openMenuContainer = document.getElementById('openMenuContainer'); // Open menu button
const items = document.querySelectorAll(".items"); // Select all elements with class "items"

// Create an instance of the Menu class to handle menu functionality
const menuClass = new Menu();
