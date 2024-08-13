<?php
class Usuario {
    protected $nombre_usuario;
    protected $correo;
    protected $contrasena;
    protected $rol;

    public function __construct($nombre_usuario, $correo, $contrasena, $rol) {
        $this->nombre_usuario = $nombre_usuario;
        $this->correo = $correo;
        $this->contrasena = password_hash($contrasena, PASSWORD_BCRYPT);
        $this->rol = $rol;
    }

    public function guardar() {
        include '../config/db.php';

        $query = $conn->prepare("INSERT INTO usuarios (nombre_usuario, correo, contrasena, rol_id) VALUES (?, ?, ?, ?)");
        $query->bind_param('sssi', $this->nombre_usuario, $this->correo, $this->contrasena, $this->rol);
        return $query->execute();
    }

    public static function buscarPorCorreoONombre($input) {
        include '../config/db.php';

        $query = $conn->prepare("SELECT * FROM usuarios WHERE correo = ? OR nombre_usuario = ?");
        $query->bind_param('ss', $input, $input);
        $query->execute();
        return $query->get_result()->fetch_assoc();
    }
}
