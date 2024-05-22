<?php


    include 'model.php';

    
    if (isset($_SESSION['usuario'])) {

        $restousuarios = modelHome::restoUsuarios($_SESSION['usuario']['id']);
        $usuarioinstrumento = modelHome::esidToString($_SESSION['usuario']['esid']);
        
        foreach ($restousuarios as $restousuario) {
        $esidstring[$restousuario['esid']] = modelHome::esidToString($restousuario['esid']);
        }
    }


    include 'view.php';