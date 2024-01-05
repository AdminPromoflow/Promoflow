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
  }
}



var progressBarCharging = document.getElementById("progressBarCharging");
const chargingClass = new Charging();



// Call the function
//fillProgressBarProgressively(100); // Fills the bar up to 100%
