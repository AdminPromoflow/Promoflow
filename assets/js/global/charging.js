class Charging {
  constructor() {

  }
  fillProgressBarProgressively(finalPercentage) {
      let currentPercentage = 0;
      const interval = setInterval(() => {
          currentPercentage++;
          progressBarCharging.style.width = currentPercentage + '%';

          if (currentPercentage >= finalPercentage) {
              clearInterval(interval);
          }
      }, 2); // Adjust the timing here to control the speed
      if (finalPercentage ==  100) {
        progressBarCharging.style.width = '0%';
        charging.style.display = none;
      }
  }

}



var progressBarCharging = document.getElementById("progressBarCharging");
var charging = document.getElementById("charging");


const chargingClass = new Charging();



// Call the function
//fillProgressBarProgressively(100); // Fills the bar up to 100%
