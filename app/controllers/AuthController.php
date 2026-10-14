<?php

namespace app\controllers;

use Controller;
use app\models\UserModel;

class AuthController extends Controller
{
    public function actionLogin()
    {
        $error = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            if (!empty($email) && !empty($password)) {
                $user = UserModel::getUserByEmail($email);

                if ($user && password_verify($password, $user->password)) {
                    // Contraseña correcta, creamos sesión
                    $_SESSION['user_id'] = $user->id;
                    $_SESSION['user_nombre'] = $user->nombre;
                    $_SESSION['user_rol'] = $user->rol;

                    // Redirección según rol
                    if ($user->rol === 'admin') {
                        header('Location: /admin/panel');
                    } else {
                        header('Location: /cliente/servicios');
                    }
                    exit;
                } else {
                    $error = "Credenciales incorrectas.";
                }
            } else {
                $error = "Por favor, completa todos los campos.";
            }
        }

        include_once 'app/views/auth/login.php';
    }

    public function actionRegistro()
    {
        $error = null;
        $success = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            if (!empty($nombre) && !empty($email) && !empty($password)) {

                // Verificamos si el email ya existe
                $existeUser = UserModel::getUserByEmail($email);

                if ($existeUser) {
                    $error = "El correo electrónico ya está registrado.";
                } else {
                    // Hasheamos la contraseña
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                    // Insertamos el usuario
                    $resultado = UserModel::insertUser($nombre, $email, $hashedPassword);

                    if ($resultado) {
                        $success = "Registro exitoso. Ahora puedes iniciar sesión.";
                    } else {
                        $error = "Hubo un error al registrar el usuario. Intenta nuevamente.";
                    }
                }
            } else {
                $error = "Por favor, completa todos los campos.";
            }
        }

        include_once 'app/views/auth/registro.php';
    }

    public function actionLogout()
    {
        session_unset();
        session_destroy();
        header('Location: /auth/login');
        exit;
    }
}
