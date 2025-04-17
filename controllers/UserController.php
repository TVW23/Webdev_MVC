<?php
require_once 'core/Controller.php';
require_once 'models/UserModel.php';

class UserController extends Controller {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new UserModel();
            $model->register($_POST['username'], $_POST['password']);
            
            header('Location: /webdev_MVC/views/login.php');
            exit;
        }

        $this->view('register');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new UserModel();
            $user = $model->login($_POST['username'], $_POST['password']);

            if ($user) {
                $_SESSION['user'] = $user['username'];

                header('Location: /webdev_MVC/');
                exit;
            } else {
                $error = 'Inloggen mislukt';
                $this->view('login', ['error' => $error]);
                return;
            }
        }

        $this->view('login');
    }

    public function logout() {
        session_destroy();
        header('Location: /webdev_MVC/');
        exit;
    }
}
?>