function startTimer(duration, display) {
  var timer = duration, minutes, seconds;

  var myInterval = setInterval(function () {
    minutes = parseInt(timer / 60, 10)
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.textContent = "Mohon selesaikan tahap berikutnya hingga " + minutes + ":" + seconds + " ";

    if (--timer < 0) {
      clearInterval(myInterval);
      resultFunction();
    } 
  }, 1000);
}

window.onload = function () {
  var time = "3600", display = document.querySelector('#countDown');
  startTimer(time, display);
};

function resultFunction() {
  document.getElementById("expired").innerHTML = "Kadaluwarsa";
}