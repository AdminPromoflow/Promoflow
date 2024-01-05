



var progressBarCharging = document.getElementById("progressBarCharging");


function fillProgressBarProgressively(finalPercentage) {
    let currentPercentage = 0;
    const interval = setInterval(() => {
        currentPercentage++;
        progressBarCharging.style.width = currentPercentage + '%';

        if (currentPercentage >= finalPercentage) {
            clearInterval(interval);
        }
    }, 10); // Adjust the timing here to control the speed
}

// Call the function
fillProgressBarProgressively(100); // Fills the bar up to 100%
