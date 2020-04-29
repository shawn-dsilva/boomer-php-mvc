function ajaxSubmit(form, id=null) {
  $(document).ready(function() {
    var formId = '#'+form;
    if($(formId).length) {
      console.log(formId+"exists!");
    } else {
      console.log(formId+"MISSING");
    }
    $(formId).on("submit", function(e) {
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: form,
        data: $(formId).serializeArray(),
        success: function(data) {
          console.log(data);
          if (data === "success") {
            if(form === 'login') {
              $("#successBox").html(`<b>${data} : </b> Login successful, you will be redirected to the Dashboard`);
              $("#successBox").fadeIn();
              $("#successBox").delay(3000).fadeOut(500, function() {
                window.location = "dashboard";
              });
            } else if (form === 'register') {
              $("#successBox").html(`<b>${data} : </b> Registered successfully, you will be redirected to the Login page`);
              $("#successBox").fadeIn();
              $("#successBox").delay(3000).fadeOut(500, function() {
                window.location = "login";
              });
            }
            if(form === 'addpost') {
              $("#postList").html('');
              getPostList();
            }
            if(form === 'editpost') {
              location.reload();
            }
            if(form === 'editprofile') {
              window.location = "profile";
            }
            if(form === 'addcomment') {
              getCommentList(id);
            }
            if(form === 'editcomment') {
              getCommentList(id);
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
  xhttp.open("GET","logout", false);
  xhttp.send();

  document.cookie = "sessionId= ; expires = Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  window.location.href = "login";
}

function getPostList() {
  $(document).ready(function() {
      $.ajax({
        type: "GET",
        url: "getpost",
        success: function(data) {

           data = JSON.parse(data);

           console.log(typeof(data));
           if(Object.entries(data).length === 0) {
            $("#postList").append(`<div class="post" ><h1 style="color:#3b3b3b;">You have no Posts
            </h1><p style="text-align:center; font-size: 1.6rem;"><a href="/createpost">Click here to Create a New Post</a></p>`);
           } else {
           data.forEach(function (item) {

            $("#postList").append(`<div class="post" id=${item.id}><a href="/post/${item.id}"><h2>${item.title}
            </h2></a>
            <p>${item.content}</p>
            <button onclick="window.location.href='/post/${item.id}'"> Read More <i class="far fa-arrow-alt-circle-right"></i></button>
            <button onclick="window.location.href='/editpostform/${item.id}'"><i class="far fa-edit"></i> Edit</button>
            <button style="border:#dc3545; background-color:#dc3545;" onclick="deletePost(${item.id})"><i class="fas fa-trash-alt"></i> Delete</button></div><br>`);
          });
        }

        }
    });
  });
}

function deletePost(itemId) {
  $(document).ready(function() {

      $.ajax({
        type: "POST",
        url: "deletepost",
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
   $(".about-container").toggleClass('flexbox');
$(".count").toggle();
  $(".beforeedit").toggle();
  $(".afteredit").toggle();
}

function counter() {
  var count = $('#about-edit').val().length;
  max=1200;
  $('#count').css('color','green');
  $('#count').text(count+'/'+max);
  if(count > max) {
    $('#count').css('color','red');
  }
}


function getCommentList(postid) {
  $(document).ready(function() {
      $.ajax({
        type: "GET",
        url: "getcomments/"+postid,
        success: function(data) {

          console.log(data);
           data = JSON.parse(data);

           console.log(Object.entries(data).length);
           console.log(data);
            $("#commentList").empty();
           if(Object.entries(data.comments_list).length === 0) {
            $("#commentList").append(`<div class="comment" >  <p style="text-align:center; margin: 2rem auto; font-weight:400; font-size: 1.5rem">There are no comments on this post  </p>
            `);
           }else {
          data.comments_list.forEach(function (item) {

            commentButtons = "";

            if(data.this_user.id === item.user_id) {
              commentButtons = `<div id="commentButtons${item.id}" class="comment-buttons">
              <button onclick="javascript:openCommentEditBox(${item.id}, ${postid})"><i class="far fa-edit"></i> Edit Comment</button>
              <button style="border:#dc3545; background-color:#dc3545;" onclick="deleteComment(${item.id})"><i class="fas fa-trash-alt"></i> Delete Comment</button></div>
            </div>`
            }

            $("#commentList").append(`<div class="comment" id=${item.id}><span><a href="/users/${item.username}"> <i class='fas fa-user'></i>  ${item.name} ( ${item.username } )</a> says : </span><br>
            <div id="commentEditContainer${item.id}"></div>
            <p id="commentContent${item.id}">${item.content}</p>

            <span id="commentTimeDate${item.id}">Posted on ${item.created_at}</span>
            ${commentButtons}
            </div><br>`);
          });
        }

        }
    });
  });
}

function deleteComment(commentId) {
  $.ajax({
    type: "GET",
    url: "removecomment/"+commentId,
    success: function(data) {
      console.log(data);
      if(data === 'success') {
        $("#"+commentId).remove();
      }
    }
  })
}

function openCommentEditBox(commentId, postId) {
$(`#commentContent${commentId}`).toggle();
$(`#commentButtons${commentId}`).toggle();
$(`#commentTimeDate${commentId}`).toggle();
var content =  $(`#commentContent${commentId}`).text();

if ($(`#commentEditContainer${commentId}`).is(':empty')){
  $(`#commentEditContainer${commentId}`).prepend(`
  <form id="editcomment" >
  <input type="hidden" name="id" value="${commentId}"></input>
  <textarea  rows="8" name="content" >${content}</textarea>
  <button type="submit" ><i class="fas fa-save"></i>  Submit Changes</button>
  <button type="button" style="border:#dc3545; background-color:#dc3545;" onclick="openCommentEditBox(${commentId})">
  <i class="fas fa-times"></i>  Cancel Changes</button>
  </form>`)
  ajaxSubmit('editcomment', postId);
} else {
  $(`#commentEditContainer${commentId}`).empty();
}


}
