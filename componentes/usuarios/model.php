<?php 

class modelUsuarios {
    
    public static function registro($nick, $email, $clave, $esid){
        $db = new database();
        $sql = 'INSERT INTO usuarios (nick, email, clave, esid) 
                VALUES (:nick, :email, :clave, :esid)';
        $params = array(
            ':nick'          => $nick,
            ':email'         => $email,
            ':clave'         => $clave, 
            ':esid'          => $esid
            
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }
    
    public static function comprobarCredenciales($nick, $clave){ 
        $db = new database();
        $sql = "SELECT id, nick, rolid, email, clave, activo, esid, descripcion, rutaimagen FROM usuarios
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