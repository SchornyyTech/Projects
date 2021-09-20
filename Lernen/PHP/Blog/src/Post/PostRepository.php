<?php
namespace App\Post;

use App\Core\AbstractRepository;

class PostRepository extends AbstractRepository{

    public function getTableName() {
        return "posts";
    }

    public function getModelName() {
        return "App\\Post\\PostModel";
    }

}

?>