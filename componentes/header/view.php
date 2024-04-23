<header> 

    <nav class="navbar" style="background-color:#5b2c6f;">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="img/logos/1.png" alt="Logo" width="100" height="100" class="d-inline-block rounded-circle"></a>
            <nav class="nav nav-justified">
                <?php if (!isset($_SESSION['usuario'])){ ?>
                    <!-- <a class="nav-link active h3" style="color:violet;" aria-current="page" href="index.php?option=home">Home</a> -->
                    <a class="nav-link h3" style="color:violet;" href="#">Contacto</a>
                    <a class="nav-link h3" style="color:violet;" href="index.php?option=usuarios">Login</a>
                    <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
                <?php } else { ?>
                        <a class="nav-link h3" style="color:violet;" href="index.php?option=usuarios&logout=true">Logout </a>
                        <?php if ($_SESSION['usuario']['rolid'] > 1 ) {?>
                            <a class="nav-link h3 " style="color:violet;" href="#"> Perfil </a>
                            <a class="nav-link h3 " style="color:violet;" href="#"> Solicitudes </a>
                            <?php } else {?>
                                <a class="nav-link h3 " style="color:violet;" href="#"> Perfil </a>
                                <a class="nav-link h3 " style="color:violet;" href="#"> Gestion </a>
                            <?php } ?>
                        <?php } ?>
            </nav>
        </div>
    </nav>

</header>