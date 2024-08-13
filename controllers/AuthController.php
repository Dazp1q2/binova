<?php
require_once '../models/Arrendador.php';
require_once '../models/Arrendatario.php';

class AuthController {
    public function registrar($data) {
        if ($data['rol'] === 'arrendador') {
            $usuario = new Arrendador($data['nombre_usuario'], $data['correo'], $data['contrasena']);
        } elseif ($data['rol'] === 'arrendatario') {
            $usuario = new Arrendatario($data['nombre_usuario'], $data['correo'], $data['contrasena']);
        }

        if ($usuario->guardar()) {
            header('Location: ../views/auth/login.php');
            exit();
        } else {
            echo "Error al registrar usuario.";
        }
    }

    public function login($data) {
        $usuario = Usuario::buscarPorCorreoONombre($data['input']);

        if ($usuario && password_verify($data['contrasena'], $usuario['contrasena'])) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: ../views/home.php');
            exit();
        } else {
            echo "Error de autenticación.";
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ../views/auth/login.php');
        exit();
    }
}

if (isset($_GET['action'])) {
    $auth = new AuthController();
    if ($_GET['action'] === 'register') {
        $auth->registrar($_POST);
    } elseif ($_GET['action'] === 'login') {
        $auth->login($_POST);
    } elseif ($_GET['action'] === 'logout') {
        $auth->logout();
    }
}
