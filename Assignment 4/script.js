function calculateAge() {
  var dob = document.getElementById("dob");
  var date = dob.value.substr(0, 2);
  var month = dob.value.substr(3, 2);
  var year = dob.value.substr(6, 4);
  var current = new Date();

  var age = current.getFullYear() - year;
  if (
    current.getMonth() < month ||
    (current.getMonth() == month && current.getDate() < date)
  ) {
    age = age - 1;
  }
  currentAge = document.getElementById("age");
  currentAge.value = age;
}

function submitForm() {
  var pattern = /^([.][A-Z])*$/;
  var text = document.getElementById("last-name");
  if (!pattern.test(text.value)) {
    alert("Enter Correct Last Name");
    text.focus();
  }

  var pattern = /^[a-z0-9._-]+@[gmail]+.[com]{2,5}$/i;
  var text = document.getElementById("email");
  if (!pattern.test(text.value)) {
    alert("Enter Correct Email");
    text.focus();
  }
}
