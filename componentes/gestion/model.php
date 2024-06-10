<?php

class modelGestion{
    
    
    public static function eliminarUsuario($id){
        $db = new database();
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $params = array(
            ':id'        => $id
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }  
}