function Menu(x) {
    x.classList.toggle("change");
    var y = document.getElementById("menu");
    if (y.style.display != "block") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
}
