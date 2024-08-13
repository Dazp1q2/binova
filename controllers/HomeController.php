<?php
// controllers/HomeController.php

class HomeController {
    public function index() {
        // Cargar la vista de inicio
        require_once '../views/home.php';
    }
}
