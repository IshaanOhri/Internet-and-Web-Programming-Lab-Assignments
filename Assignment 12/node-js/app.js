$(document).ready(function () {
  $("#submit").click(function () {
    var account = $("#account").val();
    var amount = $("#amount").val();

    var settings = {
      url: "http://localhost:4000/debit",
      method: "POST",
      timeout: 0,
      headers: {
        "Content-Type": "application/json",
      },
      data: JSON.stringify({ account: account, amount: amount }),
    };

    $.ajax(settings).done(function (response) {
      alert(response.message);
    });
  });
});
