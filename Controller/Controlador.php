<?php
namespace Controller;

class Controlador {
    public function cargarVista($nomAchivo, $datos = []) {
        require_once "../Public/{$nomAchivo}.php";
    }
}
