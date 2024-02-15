<?php
// BBDD

//include 'librerias/db.pdo.php'; TODO db.pdo.php

// Carga controlador para un componenente
function loader($componente){
	ob_start();
	include 'componentes/'.$componente.'/controller.php';
	$buffer = ob_get_clean();
	return $buffer;
}

// Inicio sesion	
session_start();

// Obtiene el nombre del componente solicitado si hay ($_GET['option']) o uno por defecto
if(isset($_GET['option'])){
    $componente = $_GET['option'];
} else {
    $componente = 'home';
}