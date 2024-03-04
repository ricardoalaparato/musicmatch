<?php

class modelUsuarios {
    
    public static function registro($nick, $clave, $nombre, $apellidos, $dni, $email, $id_tipo){
        $db = new database();
        $sql = 'INSERT INTO usuarios (nick, clave, nombre, apellidos, dni, email, id_tipo) 
                VALUES (:nick, :clave, :nombre, :apellidos, :dni, :email, :id_tipo)';
        $params = array(
            ':nick'          => $nick,
            ':clave'         => $clave,
            ':nombre'        => $nombre, 
            ':apellidos'     => $apellidos, 
            ':dni'           => $dni, 
            ':email'         => $email,
            ':id_tipo'       => $id_tipo
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }
    
    public static function comprobarCredenciales($nick, $clave){ 
        $db = new database();
        $sql = "SELECT id, nick, activo, id_tipo FROM usuarios
                WHERE nick = :nick 
                AND clave = :clave";
        $params = array(
            ':nick'  => $nick,
            ':clave' => $clave
        );
        $db->query($sql,$params);
        return $db->cargaFila();        
    }
    
    public static function getTipos(){
        $db = new database();
        $sql = "SELECT id, tipo FROM tipo_usuario";
        $db->query($sql);
        return $db->cargaMatriz();  
    }    
}