<?php 

class modelSolicitudes {
    
    public static function envSolicitud($usuarioid, $tocaid, $necesitaid){
        $db = new database();
        $sql = 'INSERT INTO solicitudes (usuarioid, tocaid, necesitaid) 
                VALUES (:usuarioid, :tocaid, :necesitaid)';
        $params = array(
            ':usuarioid'   => $usuarioid,
            ':tocaid'      => $tocaid, 
            ':necesitaid'  => $necesitaid
            
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }

}