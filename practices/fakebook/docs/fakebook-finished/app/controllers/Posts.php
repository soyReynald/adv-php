<?php

require_once 'app/models/Post.php';

class Posts extends Controller {

    public function index(){
        $this->redirect('/');
    }

    public function new(){

        $post = new Post(['msg'=>$_POST['post']]);

        if($post){
            $this->redirect('/');
        }

    }

    public function toggle($idPost){

        $post = new Post;

        if($post->toggle($idPost)){
            $this->redirect('/');
        } else {
            exit('_ACCESS_DENIED_');
        }

    }

    public function delete($id){

        $post = new Post;
        if($post->delete($id)){
            $this->redirect('/');
        } else {
            exit('_ERROR_DELETING_POST');
        }

    }

    public function edit($id){

        $post = new Post;

        $content = $post->one($id);

        $this->view('edit-post', ['id'=>$id, 'post'=>$content->post]);

    }

    public function change(){

        $post = new Post;

        $idPost = $_POST['id'];
        $content = $_POST['post'];

        if($post->change($idPost, $content)){

            $this->redirect('/');

        } else {

            exit('_ERROR_UPDATING_POST_');

        }

    }

}

?>