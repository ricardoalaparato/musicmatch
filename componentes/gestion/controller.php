<?php

include 'librerias/config.php';
include 'componentes/home/model.php';

$usuarioid = $_SESSION['usuario']['id'];


if(isset($_GET['eliminar'])) {
    $usuarios = modelHome::restoUsuarios($usuarioid);
    // foreach ($usuarios as $usuario){
    //     $tocaidstring[$solicitud['tocaid']] = modelHome::esidToString($solicitud['tocaid']);
    //     $necesitaidstring[$solicitud['necesitaid']] = modelHome::esidToString($solicitud['necesitaid']);
    //     }
        if(isset($_GET['eliminar'])) {
            if($estado == '' && modelGestion::eliminarUsuario($usuario['id']) == 1) {
                header('Location: index.php?ver=true');
                // print_r ($solicitud);
            } else {
              $estado .= ' Error - La cancelación ha fallado';
              echo ($estado) ;
            }
        }
    
    
}