let appleCount = 0;
let bananaCount = 0;

function clickApple() {
  appleCount = appleCount + 1;
  document.getElementById("result").innerHTML = "You clicked Apple " + appleCount + " time(s).";
}

function clickBanana() {
  bananaCount = bananaCount + 1;
  document.getElementById("result").innerHTML = "You clicked Banana " + bananaCount + " time(s).";
}