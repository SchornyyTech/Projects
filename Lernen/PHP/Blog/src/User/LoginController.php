<?php

namespace App\User;

use App\Core\AbstractController;

class LoginController extends AbstractController {

    public function __construct(UserRepository $userRepo) {
        $this->userRepo = $userRepo;
    }

    public function dashboard() {
        if(isset($_SESSION['login'])) {

        } else {
            echo "Nutzer ist nicht eingeloggt";
        }
    }

    public function login() {
        $error = null;
        if(!empty($_POST['username']) AND !empty($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userRepo->findByUsername($username);

            if(!empty($user)) {
                if(password_verify($password, $user->password)) {
                    $_SESSION['login'] = $user->username;
                    session_regenerate_id(true);
                } else {
                    $error = "Das password stimmt nicht!";
                }
            } else {
                $error = "Der Nutzer konnte nicht gefunden werden.";
            }

        }

        $this->render("user/login", [
            'error' => $error
        ]);
    }

}


?>