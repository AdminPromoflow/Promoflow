



var progressBarCharging = document.getElementById("progressBarCharging");


function chargeProgressBar(finalPercent){
  let presentPercent = 0;

  const interval =  setInterval(() => {
    presentPercent ++;
    progressBarCharging.style.width = presentPercent +  "%";

    if (presentPercent  >=  finalPercent) {
      clearInterval(interval);
    }


  },30)

}
chargeProgressBar(50);
