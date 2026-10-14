<?php

namespace app\controllers;

use Controller;
use app\models\UserModel;

class AuthController extends Controller
{
    public function actionLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lógica para validar login
        }

        include_once 'app/views/auth/login.php';
    }

    public function actionRegistro()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lógica para registrar usuario usando UserModel
        }

        include_once 'app/views/auth/registro.php';
    }
}
