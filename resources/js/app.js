import "./bootstrap";

let ceiti = document.querySelector("#ceiti");

function popUp() {
  window.alert("YAYA");
}

ceiti.addEventListener("click", () => {
  popUp();
});
