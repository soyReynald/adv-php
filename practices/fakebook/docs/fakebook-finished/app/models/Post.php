<?php

class Post extends Model {

    public function __construct($post = []){

        parent::__construct();

        if(count($post) > 0){

            $msg = $this->clean($post['msg']);
            $idUser = Session::get('User')->id;

            $sqlPost = "INSERT INTO posts (id_user, post, date) VALUES ($idUser, '$msg', NOW())";
            return $this->query($sqlPost);

        }

    }
    
    public function one($id){

        $sqlOne = "SELECT * FROM posts WHERE id = $id";
        $rsOne = $this->query($sqlOne);

        if($rsOne->num_rows > 0){

            return $rsOne->fetch_object();
        
        } else {
        
            return false;
        
        }
        
    }

    public function all(){

        $sqlAll = "SELECT posts.*, name, user FROM posts, users WHERE users.id = id_user";

        $rsAllPosts = $this->query($sqlAll);
        $allPosts = array();
        
        while($row = $rsAllPosts->fetch_object()){
            $allPosts[] = $row;
        }

        return $allPosts;

    }

    public function visible(){

        $sqlVisible = "SELECT posts.*, name, user FROM posts, users WHERE users.id = id_user AND visible = 1";
        $rsVisible = $this->query($sqlVisible);

        $visiblePosts = array();
        if($rsVisible)
            while($row = $rsVisible->fetch_object()){
                $visiblePosts[] = $row;
            }

        return $visiblePosts;

    }

    public function toggle($idPost){

        $idPost = $this->clean($idPost);

        $sqlToggle = "UPDATE posts SET visible = IF(visible = 1, 0, 1) WHERE id = $idPost";

        if(Session::get('User')->id_group < 3){
            return $this->query($sqlToggle);
        } else {
            return false;
        }

    }

    public function delete($id){

        $sqlPost = "SELECT id_user FROM posts WHERE id = $id";
        $rsPost = $this->query($sqlPost);

        $post = $rsPost->fetch_object();

        if($post->id_user == Session::get('User')->id || Session::get('User')->id_group == 1){
            
            $sqlDelete = "DELETE FROM posts WHERE id = $id";

            return $this->query($sqlDelete);
        
        } else {

            return false;

        }

    }

    public function change($idPost, $content){

        $content = $this->clean($content);

        $sqlSelect = "SELECT id_user FROM posts WHERE id = $idPost";
        $rsPost = $this->query($sqlSelect);

        $post = $rsPost->fetch_object();

        $sqlChangePost = "UPDATE posts SET post = '$content' WHERE id= $idPost";

        if(isset(Session::get('User')->id) && (Session::get('User')->id == $post->id_user || Session::get('User')->id_group < 3 )){
            
            return $this->query($sqlChangePost);
        
        } else {
        
            return false;
        
        }

    }

}

?>