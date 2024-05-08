<?php
if(isset($_FILES['archivo'])){
if ($_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
    $nombreArchivo = $_FILES['archivo']['name'];
    $ubicacionTemporal = $_FILES['archivo']['tmp_name'];
    $ubicacionFinal = 'img/' . $nombreArchivo;
  
    if (move_uploaded_file($ubicacionTemporal, $ubicacionFinal)) {
      echo 'El archivo se ha subido correctamente.';
    } else {
      echo 'Error al subir el archivo.';
    }
  } else {
    echo 'Error: ' . $_FILES['archivo']['error'];
  }
  
}


include 'componentes/perfil/view.php';