<?php 
    include 'librerias/framework.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>MusicMatch</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">  
        <base href="/musicmatch/">   
        <!-- <link href="img/favicon-32x32.png" rel="icon"> TODO-->  
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" > <!--BOOTSTRAP 5.3.2. -->
            

    </head>
    <body>
        <div class="content"> 
            <?php include 'componentes/header/controller.php'; 	// Cabecera ?>
            
            <?php echo loader($componente);?>
            
            <?php include 'componentes/footer/footer.php';		// Pie ?>  
        </div>
        <script src="C:\laragon\www\musicmatch\vendor\twbs\bootstrap\dist\js\bootstrap.min.js"> </script> <!--script de bootstrap -->
    </body>
</html>