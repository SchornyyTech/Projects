<?php

namespace App\Post;

use App\Core\AbstractController;

class PostController extends AbstractController{

    public function __construct(PostRepository $postRepo, CommentRepository $commentRepository){
        $this->postRepo = $postRepo;
        $this->commentRepo = $commentRepository;
    }

    public function index() {
        $posts = $this->postRepo->all();

        $this->render("post/index", [
            'posts' => $posts
        ]);

    }

    public function show() {

        $id = $_GET["id"];

        if(isset($_POST['content'])) {
            $content = $_POST['content'];
            $this->commentRepo->insertForPost($id, $content);
        }

        $post = $this->postRepo->find($id);
        $comments = $this->commentRepo->allByPost($id);

        $this->render("post/show", [
            'post' => $post,
            'comments' => $comments
        ]);
    }
  
}

?>