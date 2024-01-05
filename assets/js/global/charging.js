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

              // Si se alcanza el 100%, muestra el alert
              if (currentPercentage === 100) {
                  alert("¡La barra de progreso ha alcanzado el 100%!");
              }
          }
      }, 20); // Adjust the timing here to control the speed
  }


}



var progressBarCharging = document.getElementById("progressBarCharging");
var charging = document.getElementById("charging");


const chargingClass = new Charging();



// Call the function
//fillProgressBarProgressively(100); // Fills the bar up to 100%
