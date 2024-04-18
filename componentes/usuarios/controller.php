<?php

$estado = '';

include 'librerias/config.php';
include 'componentes/usuarios/model.php';
// include 'componentes/gestion/usuarios/model.php';

if (isset($_POST["login"])){

    if(sanea($_POST['nick'], 'string', 1, 45, '')) {
        $nick = sanea($_POST['nick'], 'string', 1, 45, '');
    } else {
        $estado .= ' Error - El nick es incorrecto. ';
    }
    
    if(sanea($_POST['clave'], 'string', 8, 45, '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/')) {
        $clave = sanea($_POST['clave'], 'string', 8, 45, '');
        $clave = hash('sha256', $salt.$clave);
    } else {
        $estado .= ' Error - La contrase&ntilde;a debe tener al menos 8 caracteres, y contener may&uacute;sculas, min&uacute;sculas y n&uacute;meros. ';
        echo ('Hola Pauluca guapa'); }   
    if($estado == '' && $usuario = modelUsuarios::comprobarCredenciales($nick, $clave)) {
        
        if($usuario['activo'] == 1) {
            $_SESSION['usuario'] = $usuario;
            $estado .= ' Usuario '.$usuario['nick'].' logueado con &eacute;xito. ';
            $estado .= " Volvemos a la portada en 3 segundos... ";    
            header("Refresh:3; url=index.php");
            
        } elseif ($usuario['activo'] == 0) {
            $_SESSION['usuario'] = NULL;
            $estado .= ' Error - El usuario '.$usuario['nick'].' no est&aacute; activo. ';
            $estado .= ' Contacte con el administrador. ';
        }
            
    }else{
        $_SESSION['usuario'] = NULL;
        $estado .= ' Error - Contrase&ntilde;a o usuario incorrectos.';
        echo 'que vamos a hacer esta noche cerebro';
        echo $estado;
    }
} 

if(isset($_GET['logout'])){
    session_unset();
    header('Location: index.php');
    exit();
}

    
    
    


include 'componentes/usuarios/view.php';