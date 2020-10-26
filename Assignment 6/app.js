function loadD() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      cal();
    } else {
      cal();
    }
  };
  xhttp.open("GET", true);
  xhttp.send();
}
function cal() {
  var i = document.getElementById("number").value;
  var disp = document.getElementById("pm");
  if (i.length == 4) {
    if (i[i.length - 1] == 7) {
      alert("You Won Rs 1000");
    } else if (i[i.length - 1] == 9) {
      alert("You Won Rs 3000");
    } else {
      alert("You Won Rs 100");
    }
  } else {
    alert("Please enter a 4 digit number");
  }
}
