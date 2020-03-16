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
            if(form === 'addpost') {
              $("#postList").html('');
              getPostList();
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
      var form = $("<form></form>");
      form.append(`Title: <br>
      <input type="text" id="title" name="title" value="${title}"><br>`);
      form.append(`Content: <br>
      <textarea name="content" id="content" rows="10" cols="30">${content}</textarea>`);
      form.append(` <br><br>
      <input type="submit">`);
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