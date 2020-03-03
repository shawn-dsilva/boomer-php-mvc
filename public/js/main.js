$(document).ready(function() {
  $("#login").on("submit", function(e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "/login",
      data: { email: $("#email").val(), password: $("#password").val() },
      success: function(data) {

        if (data === "success") {
          window.location = "/dashboard";
        }
        $("#errorBox").html("<br><b>Error:</b> " + data);
      }
    });
  });
});
