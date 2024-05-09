<?php

class modelPerfil {

    public static function actualizarPerfil( $id, $nick, $email, $clave, $esid, $descripcion, $rutaimagen) {
        $db = new database();
        $sql = 'UPDATE usuarios
                SET nick = :nick, email = :email, clave = :clave, 
                 esid = :esid, descripcion = :descripcion, rutaimagen = :rutaimagen
                WHERE id = :id';
        $params = array(
            ':id'           => intval($id),
            ':nick'         => $nick,
            ':email'        => $email,
            ':clave'        => $clave,
            ':esid'         => intval($esid),
            ':descripcion'  => $descripcion,
            ':rutaimagen'   => $rutaimagen
            
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }

}