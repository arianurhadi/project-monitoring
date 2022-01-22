function showForm() {
    var x = document.getElementById("form");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }


var slider = document.getElementById("inputProgress");
var output = document.getElementById("value");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

var progressBar = document.getElementById("progressBar");
if (progressBar.ariaValueNow == 100 ) {
  progressBar.classList.remove('bg-info');
  progressBar.classList.add('bg-done');
} else {
  progressBar.classList.add('bg-info');
}