var mostrarActores = false;

function mostrarCheckActores() {
  var checkboxes = document.getElementById("checkboxes");
  if (!mostrarActores) {
    checkboxes.style.display = "block";
    mostrarActores = true;
  } else {
    checkboxes.style.display = "none";
    mostrarActores = false;
  }
}
