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

    public static function mostrarSolicitudes($id){
        $db = new database();
        $sql = 'SELECT id, tocaid, necesitaid  FROM solicitudes WHERE usuarioid = :usuarioid ';
        $params = array(
            ':usuarioid'   => $id,
        );
        $db->query($sql, $params);
        return $db->cargaMatriz();   
    }

    public static function cancelarSolicitud($id){
        $db = new database();
        $sql = "DELETE FROM solicitudes WHERE id = :id";
        $params = array(
            ':id'        => $id
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }  
    
    public static function meets($id) {
        $db = new database();
        $sql ="SELECT usuarios.nick, usuarios.email, usuarios.descripcion, usuarios.rutaimagen, pide.necesitaid, pide.tocaid FROM solicitudes AS pide, solicitudes AS ofrece, usuarios WHERE
            ofrece.usuarioid = :id /* usuario activo */ AND 
            pide.necesitaid = ofrece.tocaid AND
            pide.tocaid = ofrece.necesitaid AND
            usuarios.id = pide.usuarioid";
        $params = array(
            ':id'  => $id
        );
        $db->query($sql, $params);
        return $db->cargaMatriz();

    }


}

    

