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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> <!-- BOOTSTRAP 5.3.2. -->
            

    </head>
    <body>
        <div class="content"> fddf
            <?php include 'componentes/header/controller.php'; 	// Cabecera ?>
            
            <?php echo loader($componente);?>
            
            <?php include 'componentes/footer/footer.php';		// Pie ?>  
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> <!-- script de bootstrap -->
    </body>
</html>