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
            header('Location: index.php');
            
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

if(isset($_POST['registro'])){

    if(sanea($_POST['nick'], 'string', 1, 45, '')) {
        $nick = sanea($_POST['nick'], 'string', 1, 45, '');
    } else {
        $estado .= ' Error - El nick es incorrecto. ';
    }

    if(sanea($_POST['email'], 'email', 1, 45, '')) {
        $email = sanea($_POST['email'], 'email', 1, 45, '');
    } else {
        $estado .= ' Error - El correo electr&oacute;nico es incorrecto. ';
    }
    
    if(sanea($_POST['clave'], 'string', 8, 45, '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/')) {
        $clave = sanea($_POST['clave'], 'string', 8, 45, '');
        $clave = hash('sha256', $salt.$clave);
    } else {
        $estado .= ' Error - La contrase&ntilde;a debe tener al menos 8 caracteres, y contener may&uacute;sculas, min&uacute;sculas y n&uacute;meros. ';
    }
    
    if($_POST['clave'] != $_POST['clave2']) {
        $estado .= ' Error - Las contrase&ntilde;as deben iguales. ';
    }

    if(sanea($_POST['esid'], 'int', 1, 11, '')) {
        $esid = sanea($_POST['esid'], 'int', 1, 11, '');
    } else {
        $estado .= 'Error, el instrumento no es valido';
    }

    if($estado == '' && modelUsuarios::registro($nick, $email, $clave, $esid) == 1){
        $_SESSION['usuario'] = modelUsuarios::comprobarCredenciales($nick, $clave);
        header('Location: index.php');
    } else {
     $estado .= ' Error - El registro ha fallado.';    
    }  


}

    
    
    


include 'componentes/usuarios/view.php';