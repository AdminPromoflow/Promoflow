



var progressBarCharging = document.getElementById("progressBarCharging");


function chargeProgressBar(percentCharged){
  progressBarCharging.style.width = percentCharged +  "%";
}
chargeProgressBar(50);
