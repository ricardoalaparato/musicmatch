<?php


    include 'model.php';

    
    if (isset($_SESSION['usuario'])) {

        $restousuarios = modelHome::restoUsuarios($_SESSION['usuario']['id']);
    }


    include 'view.php';