// Create an instance of the Menu class to handle menu functionality
menuClass.changePathImageOpenLogin(1);


var open_W3P_products = document.getElementById("open_W3P_products");

open_W3P_products.addEventListener("click", function(){
  chargingClass.showProgressBar();
  window.open("../../views/W3P_products/index.php", "_self");
//  alert("alert");
  //
});
