var timeLeft = 30  * 60
var countdownTimer = setInterval(function () {
  var minutes = Math.floor(timeLeft / 60)
  var seconds = timeLeft % 60
  var formattedTime =
    ("0" + minutes).slice(-2) + ":" + ("0" + seconds).slice(-2)
  document.getElementById("countdown").textContent = formattedTime
  var proportionLeft = timeLeft / (30 * 60)
  document.getElementById("liquid").style.height =
    100 - proportionLeft * 100 + "%"
  if (timeLeft === 0) {
    clearInterval(countdownTimer)
    alert("Muitos parabéns VOCÊ CONSEGUIU!")
    window.location.href = "index.php"
  }
  timeLeft--
}, 1000)
