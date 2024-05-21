<?php


    include 'model.php';

    
    if (isset($_SESSION['usuario'])) {

        $restousuarios = modelHome::restoUsuarios($_SESSION['usuario']['id']);
        foreach ($restousuarios as $restousuario) {
        $restousuario['esidstring'] = modelHome::esidToString($restousuario['esid']);
        }
    }


    include 'view.php';