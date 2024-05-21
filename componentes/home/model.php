<?php

class modelHome {

    public static function restoUsuarios ($id) {
        $db = new database();
        $sql = "SELECT id, nick, rolid, activo, esid, descripcion, rutaimagen FROM usuarios
                WHERE id != :id
                AND rolid = 2 ";
        $params = array(
            ':id' => $id
        );
        $db->query($sql,$params);
        return $db->cargaMatriz();
    }

    public static function esidToString ($esid) {
        $db = new database();
        $sql = "SELECT nombre FROM instrumentos
                WHERE id = :id ";
        $params = array(
            ':id' => $esid
        );
        $db->query($sql,$params);
        return $db->cargaFila();  
    }


}

