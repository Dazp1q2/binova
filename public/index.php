<?php
// public/index.php

// Incluir el controlador principal
require_once '../controllers/HomeController.php';

// Instanciar y ejecutar el controlador
$controller = new HomeController();
$controller->index();
