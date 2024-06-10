<?php

$estado = '';
$titulo = '';


include 'librerias/config.php';
include 'componentes/solicitudes/model.php';
include 'componentes/home/model.php';

$usuarioid = $_SESSION['usuario']['id'];

if(isset($_POST['enviarsolicitud'])) {
    
    

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
        $titulo .= 'Meet2Play';
        $estado .= 'La solicitud ha sido enviada';
        
         
         // $_SESSION['usuario'] = modelUsuarios::comprobarCredenciales($nick, $clave);
        header('Location: index.php' );
    } else {
     $estado .= ' Error - El envio ha fallado.';
    }

}

if(isset($_GET['ver'])) {
    $solicitudes = modelSolicitudes::mostrarSolicitudes($usuarioid);
    foreach ($solicitudes as $solicitud){
        $tocaidstring[$solicitud['tocaid']] = modelHome::esidToString($solicitud['tocaid']);
        $necesitaidstring[$solicitud['necesitaid']] = modelHome::esidToString($solicitud['necesitaid']);
        }
        if(isset($_GET['cancelar'])) {
            if($estado == '' && modelSolicitudes::cancelarSolicitud($solicitud['id']) == 1) {
                header('Location: index.php?ver=true');
                // print_r ($solicitud);
            } else {
              $estado .= ' Error - La actualizacion ha fallado';
              echo ($estado) ;
            }
        }
    
    
    }
if(isset($_GET['meet'])) {
    $meets = modelSolicitudes::meets($usuarioid);
    foreach ($meets as $meet){
       $necesitaidstring[$meet['necesitaid']] = modelHome::esidToString($meet['necesitaid']);
       $tocaidstring[$meet['tocaid']] = modelHome::esidToString($meet['tocaid']);
    }


}
    



include 'componentes/solicitudes/view.php';

