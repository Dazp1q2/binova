<?php
require_once 'Usuario.php';

class Arrendatario extends Usuario {
    public function __construct($nombre_usuario, $correo, $contrasena) {
        parent::__construct($nombre_usuario, $correo, $contrasena, 2); // Asignamos el rol de arrendatario
    }
}
