<?php

include_once('../app/models/PostModel.php');
include_once('../core/sessions/SessionsController.php');
include_once('../core/utils/Validator.php');
include_once('../app/models/UserModel.php');
include_once('../core/controller/BaseController.php');


class PostController extends BaseController
{
    public $post_model;

    public function __construct($mwReturns,$params)
    {
      parent::__construct($mwReturns, $params);
      $this->post_model = new PostModel();
    }

    public function getAllPosts() {
        $posts['post_data'] = $this->post_model->getAllPosts();

        foreach($posts['post_data'] as $index => $post) {
            // Changes date to human readable form per comment item in array
            $post['created_at'] = date('l, F jS, Y \a\t\ g:i A', strtotime($post['created_at']));
            // adds updated comment item back to main array
            $posts['post_data'][$index] = $post;
        }
        self::getView('AllPostsList', $posts);
    }

    public function addPost () {

        $data=array(
          'title' => $_POST['title'],
          'content' => strip_tags($_POST['content']),
          'user_id' => sessionUserData($_COOKIE['sessionId'])["id"]
        );

        if (strlen($data['content']) >= 350 || strlen($data['content']) <= 700) {
            $this->post_model->insertPost($data);
            echo('success');
        } else {
            echo('A Blog Post needs to be between 350 to 700 Characters');
        }
    }

    public function getPosts() {
        $userId = sessionUserData($_COOKIE['sessionId'])["id"];
        $posts = $this->post_model->getPost($userId);
        echo(json_encode($posts));
    }

    public function getOnePost() {

        $data['user_data'] = sessionUserData($_COOKIE['sessionId']);
        // if($params['user_id'] == $userId) {
        $data['post'] = $this->post_model->getSinglePost($this->params['postid']);
        $data['post']['created_at'] = date('l, F jS, Y \a\t\ g:i A', strtotime($data['post']['created_at']));
        // echo(json_encode($post));
        return self::getView('SinglePost', $data);
        // } else echo 'Error : Access Denied';

    }

    public function removePost() {
        $id = $_POST['id'];
        $userId = sessionUserData($_COOKIE['sessionId'])["id"];
        $this->post_model->deletePost($userId, $id);
        echo('success');
    }

    public function getEditPostForm() {
        $data['user_data'] = sessionUserData($_COOKIE['sessionId']);
        if(!$data['user_data']) {
            $data['errcode'] = 401;
            $data['msg'] = 'You have to be Logged In to do that.<br><a href="/login"> Login Here</a>';
            return self::getView('Error404',$data );
        }
        // if($params['user_id'] == $userId) {
        $data['post'] = $this->post_model->getSinglePost($this->params['postid']);
        if($data['post']['user_id'] == $data['user_data']['id']) {
            return self::getView('EditPost', $data);
        } else {
            $data['errcode'] = 403;
            $data['msg'] = 'You Can only Edit your own Posts,<br><a href="/postlist"> View All Your Blog Posts</a>';
            return self::getView('Error404',$data );
        }

    }

    public function editPost () {

        $data=array(
          'id' => $_POST['post_id'],
          'title' => $_POST['title'],
          'content' => $_POST['content'],
          'user_id' => sessionUserData($_COOKIE['sessionId'])["id"]
        );
        $this->post_model->updatePost($data);
        echo('success');
    }

    public function addComment () {

        $data=array(
          'content' => $_POST['content'],
          'user_id' => sessionUserData($_COOKIE['sessionId'])["id"],
          'post_id' => $_POST['post_id']
        );
        $this->post_model->insertComment($data);
        echo('success');
    }

    public function getComments() {
        $postId = $this->params['postid'];
        $comments = $this->post_model->getComments($postId);

        foreach($comments as $index => $comment) {
            // Changes date to human readable form per comment item in array
            $comment['created_at'] = date('l, F jS, Y \a\t\ g:i A', strtotime($comment['created_at']));
            // adds updated comment item back to main array
            $comments[$index] = $comment;
        }

        $data['this_user'] = sessionUserData($_COOKIE['sessionId']);
        $data['comments_list'] = $comments;

        echo(json_encode($data));
    }

    public function removeComment() {
        $commentId = $this->params['commentid'];
        $userId = sessionUserData($_COOKIE['sessionId'])["id"];
        $comment =  $this->post_model->getSingleComment($commentId);
        if($userId != $comment['user_id']) {
            echo('ERROR : You Can only Delete Comments Written by You');
        } else {
            $this->post_model->deleteComment($commentId);
            echo('success');
        }
    }

    public function editComment() {
        // $content = $_POST['content'];
        // echo(json_encode($content));
        $data=array(
            'comment_id' => $_POST['id'],
            'content' => $_POST['content'],
          );

          $comment =  $this->post_model->getSingleComment($data['comment_id']);
          $userId = sessionUserData($_COOKIE['sessionId'])["id"];

          if($userId != $comment['user_id']) {
              echo('ERROR : You Can only Edit Comments Written by You');
          } else {
              $this->post_model->updateComment($data);
              echo('success');
          }
    }
}