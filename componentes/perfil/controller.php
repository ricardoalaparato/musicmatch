<?php

$estado = '';
$perfil = $_SESSION['usuario'];

include 'librerias/config.php';
include 'componentes/perfil/model.php';
include 'componentes/usuarios/model.php';



if(isset($_POST['actualizar'])) {
    
  $id = $perfil['id'];

  if(sanea($_POST['nick'], 'string', 1, 45, '')) {
    $nick = sanea($_POST['nick'], 'string', 1, 45, '');
  } else {
    $estado .= ' Error - El nick es incorrecto. ';
  }

  if(sanea($_POST['email'], 'email', 1, 45, '')) {
    $email = sanea($_POST['email'], 'email', 1, 45, '');
  } else {
    $estado .= ' Error - El correo electronico es incorrecto. ';
  }

  if(sanea($_POST['clave'], 'string', 8, 45, '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/')) {
      $clave = sanea($_POST['clave'], 'string', 8, 45, '');
      $clave = hash('sha256', $salt.$clave);
  } else {
      $estado .= ' Error - La contrase&ntilde;a debe tener al menos 8 caracteres, y contener may&uacute;sculas, min&uacute;sculas y n&uacute;meros. ';
  }

  if(sanea($_POST['esid'], 'int', 1, 11, '')) {
      $esid = sanea($_POST['esid'], 'int', 1, 11, '');
  } else {
      $estado .= ' Error - El instrumento es incorrecto. ';
  }

  if(sanea($_POST['descripcion'], 'string', 1, 500, '')) {
      $descripcion = sanea($_POST['descripcion'], 'string', 1, 500, '');
  } else {
      $estado .= ' Error - La descripcion es demasiado larga. ';
  }

  if (isset($_FILES['archivo']['name']) && $_FILES['archivo']['name'] != NULL) {
      if(sanea($_FILES['archivo']['name'], 'string', 1, 250, '')) {
        if ($_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
          $nombreArchivo = $_FILES['archivo']['name'];
          $ubicacionTemporal = $_FILES['archivo']['tmp_name'];
          $ubicacionFinal = 'img/fichas/' . $nombreArchivo;
        
          if (move_uploaded_file($ubicacionTemporal, $ubicacionFinal)) {
            echo 'El archivo se ha subido correctamente.';
          } else {
            echo 'Error al subir el archivo.';
          }
        } else {
          echo 'Error: ' . $_FILES['archivo']['error'];
        }
          $rutaimagen = $nombreArchivo;

      } else {
          $estado .= ' Error - La ruta de imagen es incorrecta. ';
      }
  } else {
    $rutaimagen = $perfil['rutaimagen'];
  }



  if($estado == '' && modelPerfil::actualizarPerfil( $id, $nick, $email, $clave, $esid, $descripcion, $rutaimagen) == 1) {
        
    $_SESSION['usuario'] = modelUsuarios::comprobarCredenciales($nick,$clave);
    header('Location: index.php');

  } else {
    $estado .= ' Error - La actualizacion ha fallado';
  }

}

include 'componentes/perfil/view.php';