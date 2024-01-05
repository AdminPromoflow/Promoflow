class Charging {
  constructor() {

  }
   fillProgressBarProgressively(finalPercentage) {
     charging.style.display = "block";

      let currentPercentage = 0;
      const interval = setInterval(() => {
          currentPercentage++;
          progressBarCharging.style.width = currentPercentage + '%';
          if (progressBarCharging.style.width == "100%") {
            this.fillProgressBarProgressively(0) ;
            charging.style.display = "none";
          }


          if (currentPercentage >= finalPercentage) {

              clearInterval(interval);


          }
      }, 200); // Adjust the timing here to control the speed

  }



}



var progressBarCharging = document.getElementById("progressBarCharging");
var charging = document.getElementById("charging");


const chargingClass = new Charging();



// Call the function
//fillProgressBarProgressively(100); // Fills the bar up to 100%
