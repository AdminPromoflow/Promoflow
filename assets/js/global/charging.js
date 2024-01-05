class Charging {
  constructor() {
    setTimeout(this.hideProgressBar, 2000);
  }
   showProgressBar() {
     charging.style.display = "flex";
  }
  hideProgressBar() {
    charging.style.display = "none";
 }



}



var charging = document.getElementById("charging");


const chargingClass = new Charging();



// Call the function
//fillProgressBarProgressively(100); // Fills the bar up to 100%
