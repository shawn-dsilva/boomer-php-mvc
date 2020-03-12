function ajaxSubmit(form) {
  $(document).ready(function() {
    var formId = '#'+form;
    $(formId).on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "/"+form,
        data: $(formId).serializeArray(),
        success: function(data) {

          if (data === "success") {
            if(form === 'login') {
            window.location = "/dashboard";
            } else {
              window.location = "/login";
            }
          }
          $("#errorBox").html("<br><b>Error:</b> " + data);
        }
      });
    });
  });
}

function logout() {

  xhttp = new XMLHttpRequest();
  xhttp.open("GET","/logout", false);
  xhttp.send();

  document.cookie = "sessionId= ; expires = Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  window.location.href = "/login";
}

function getPostList() {
  $(document).ready(function() {
      $.ajax({
        type: "GET",
        url: "/getpost",
        success: function(data) {

           data = JSON.parse(data);

           data.forEach(function (item) {

            $("#postList").html(item.title);

            console.log(item.title);
          });


        }
    });
  });
}