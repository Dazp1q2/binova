<?php
require_once 'Usuario.php';

class Arrendador extends Usuario {
    public function __construct($nombre_usuario, $correo, $contrasena) {
        parent::__construct($nombre_usuario, $correo, $contrasena, 1); // Asignamos el rol de arrendador
    }
}
