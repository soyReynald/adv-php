<?php

require_once 'app/models/Post.php';

class Home extends Controller {

    public function index(){

        $post = new Post;
        if(isset(Session::get('User')->id_group) && Session::get('User')->id_group < 3){
            $allposts = $post->all();
        } else {
            $allposts = $post->visible();
        }
        

        $data = [
            "posts"=>$allposts
        ];

        $this->view('home', $data);

    }

}

?>