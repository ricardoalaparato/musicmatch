<?php

$estado = '';


include 'librerias/config.php';
include 'componentes/solicitudes/model.php';

if(isset($_POST['enviarsolicitud'])) {
    
    $usuarioid = $_SESSION['usuario']['id'];

    if(sanea($_POST['tocaid'], 'int', 1, 11, '')) {
        $tocaid = sanea($_POST['tocaid'], 'int', 1, 11, '');
    } else {
        $estado .= ' Error - No entendemos lo que tocas. ';
    }

    if(sanea($_POST['necesitaid'], 'int', 1, 11, '')) {
        $necesitaid = sanea($_POST['necesitaid'], 'int', 1, 11, '');
    } else {
        $estado .= ' Error - No tenemos lo que necesitas. ';
    }

    if($estado == '' && modelSolicitudes::envSolicitud($usuarioid, $tocaid, $necesitaid) == 1){
        // $_SESSION['usuario'] = modelUsuarios::comprobarCredenciales($nick, $clave);
        header('Location: index.php');
    } else {
     $estado .= ' Error - El envio ha fallado.';
    }

}

include 'componentes/solicitudes/view.php';