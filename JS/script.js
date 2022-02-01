let x = document.getElementById("sign_in");
let y = document.getElementById("sign_up");

function signIn() {
  y.style.display = "none";
  x.style.display = "revert";
}
function signUp() {
  x.style.display = "none";
  y.style.display = "revert";
}
