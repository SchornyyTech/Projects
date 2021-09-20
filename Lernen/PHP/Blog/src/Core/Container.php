<?php

namespace App\Core;

use App\Post\CommentRepository;
use App\Post\PostController;
use App\Post\PostRepository;
use App\User\LoginController;
use App\User\UserRepository;
use PDO;
use PDOException;

class Container{

    private $recipes = [];
    private $instances = [];

    public function __construct(){
        $this->recipes = [
            'postController' => function() {
                return new PostController($this->make('postRepo'), $this->make('commentRepo'));
            },
            'postRepo' => function() {
                return new PostRepository($this->make("pdo"));
            },
            'commentRepo' => function() {
                return new CommentRepository($this->make("pdo"));
            },
            'userRepo' => function() {
                return new UserRepository($this->make("pdo"));
            },
            'loginController' => function() {
                return new LoginController($this->make("userRepo"));
            },
            'pdo' => function() {
                 try {
                     $pdo = new PDO(
                    'mysql:host=localhost;dbname=blog;charset=utf8'
                    , 'root'
                    , '');
                 } catch (PDOException $e) {
                     echo "Verbindung zur Datenbank fehlgeschlagen!";
                     die();
                 }
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                return $pdo;
            }
        ];
    }

    public function make($name) {
        if(!empty($this->instances[$name])) {
            return $this->instances[$name];
        }
        if(isset($this->recipes[$name])) {
            $this->instances[$name] = $this->recipes[$name]();
        }

        return $this->instances[$name];
    }

}

?>