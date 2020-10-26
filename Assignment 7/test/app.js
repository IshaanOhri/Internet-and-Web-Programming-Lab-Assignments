$(document).ready(function () {
  $("#red-button")
    .mouseover(function () {
      $(".container-button").css("background-color", "red");
    })
    .mouseout(function () {
      $(".container-button").css("background-color", "white");
    });

  $("#blue-button")
    .mouseover(function () {
      $(".container-button").css("background-color", "blue");
    })
    .mouseout(function () {
      $(".container-button").css("background-color", "white");
    });

  $("#green-button")
    .mouseover(function () {
      $(".container-button").css("background-color", "green");
    })
    .mouseout(function () {
      $(".container-button").css("background-color", "white");
    });

  $("#extract-text").click(function () {
    $("#text").text($("#extract").text());
  });

  $("#check").click(function () {
    if ($("#check")[0].checked) {
      $("#submit-button").prop("disabled", false);
    } else {
      $("#submit-button").prop("disabled", true);
    }
  });

  $(".container-mouse").click(function (event) {
    if (event.button == 0) {
      alert("Left Click");
    } else if (event.button == 2) {
      alert("Right Click");
    }
  });

  $("#add-css").click(function () {
    $("#css-text").addClass("test");
  });
  $("#remove-css").click(function () {
    $("#css-text").removeClass("test");
  });

  $("#search-button").click(function () {
    $("#cities li").each(function (i, li) {
      const city = $(li);
      city.css("font-weight", "lighter");
    });
    const search = $("#search-field").val();
    if (search.length == 0) {
      alert("Empty text field");
    } else {
      $("#cities li").each(function (i, li) {
        const city = $(li);
        if (city[0].innerText.includes(search)) {
          city.css("font-weight", "bolder");
        }
      });
    }
  });
});
