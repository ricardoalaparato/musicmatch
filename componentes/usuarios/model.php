<?php 

class modelUsuarios {
    
    public static function registro($nick, $email, $clave, $rolid, $activo, $esid){
        $db = new database();
        $sql = 'INSERT INTO usuarios (nick, email, clave, rolid, activo, esid) 
                VALUES (:nick, :email, :clave, :rolid, :activo, :esid)';
        $params = array(
            ':nick'          => $nick,
            ':email'         => $email,
            ':clave'         => $clave, 
            ':rolid'         => $rolid, 
            ':activo'        => $activo, 
            ':esid'          => $esid
            
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }
    
    public static function comprobarCredenciales($nick, $clave){ 
        $db = new database();
        $sql = "SELECT id, nick, rolid, activo, esid, descripcion, rutaimagen FROM usuarios
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
        $sql = "SELECT id, tipo FROM roles";
        $db->query($sql);
        return $db->cargaMatriz();  
    }    
}