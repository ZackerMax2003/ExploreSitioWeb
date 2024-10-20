<?php
// Incluir el controlador
require_once __DIR__.'/../Controller/LocalController.php';

// Capturar los datos del formulario
$nombre_empresa = $_POST['nombre_empresa'] ?? null;
$nit = $_POST['nit'] ?? null;
$direccion = $_POST['direccion'] ?? null;
$telefono = $_POST['telefono'] ?? null;
$descripcion = $_POST['descripcion'] ?? null;
$servicios = $_POST['servicios'] ?? null;
$mapa = $_POST['mapa'] ?? null;
$nombre_categoria = $_POST['role'] ?? null;
$img = $_FILES['img'] ?? null;
$horario_apertura = $_POST['horario_apertura'] ?? null; // Capturar horario apertura
$horario_cierre = $_POST['horario_cierre'] ?? null; // Capturar horario cierre

// Crear una instancia del controlador
$localController = new LocalController();

// Llamar al método para registrar el local
$localController->registerLocal($nombre_empresa, $nit,
 $direccion, $telefono, $descripcion, 
 $servicios, $mapa, $nombre_categoria, $img, $horario_apertura, $horario_cierre);
?>
