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
          console.log(data);
          if (data === "success") {
            if(form === 'login') {
              $("#successBox").html(`<b>${data} : </b> Login successful, you will be redirected to the Dashboard`);
              $("#successBox").fadeIn();
              $("#successBox").delay(3000).fadeOut(500, function() {
                window.location = "/dashboard";
              });
            } else if (form === 'register') {
              $("#successBox").html(`<b>${data} : </b> Registered successfully, you will be redirected to the Login page`);
              $("#successBox").fadeIn();
              $("#successBox").delay(3000).fadeOut(500, function() {
                window.location = "/login";
              });
            }
            if(form === 'addpost') {
              $("#postList").html('');
              getPostList();
            }
            if(form === 'editpost') {
              location.reload();
            }

          } else {
          $("#errorBox").html("<b>Error:</b> " + data);
          $("#errorBox").fadeIn();
          $("#errorBox").delay(5000).fadeOut(1000);
          }
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

            $("#postList").append(`<div class="post" id=${item.id}><h3>${item.title}
            </h3><p>${item.content}</p>
            <button onclick="deletePost(${item.id})">Delete</button></div><br>`);
          });


        }
    });
  });
}

function deletePost(itemId) {
  $(document).ready(function() {
      $.ajax({
        type: "POST",
        url: "/deletepost",
        data: {id: itemId},
        success: function(data) {
          if(data == 'success') {
            $("#postList").html('');
            getPostList();
          }
        }
    });
  });
}

function openEditBox() {
  $(document).ready(function() {
      var title = $('#title').text();
      var content = $('#content').text();
      var id = $('#id').text();

      var form = $("<form id='editpost'></form>");
      form.append(`Title: <br>
      <input type="text" id="title" name="title" value="${title}"><br>`);
      form.append(`Content: <br>
      <textarea name="content" id="content" rows="10" cols="30">${content}</textarea>`);
      form.append(`<input type="hidden" id="post_id" name="post_id" value="${id}">`);
      form.append(` <br><br>
      <input type="submit">`);
      form.append(`<script>ajaxSubmit('editpost')</script>`);

      $("#onePost").hide();
      $("#editBox").html(form);
      $("#editBox").append(`<button onclick="javascript:closeEditBox()">
      Cancel</button>`);
      $("#editBox").show();

    });
}

function closeEditBox() {
  $("#editBox").hide();
  $("#onePost").show();
}

function openProfileEdit() {
  $(".profile-content-item").toggle();
  $(".profile-edit-item").toggle();

  $(".beforeedit").toggle();
  $(".afteredit").toggle();
}