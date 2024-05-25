<header> 

    <nav class="navbar" style="background-color:#7fc6f5;">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="img/logos/1.png" alt="Logo" width="125" height="125" class="d-inline-block rounded-circle"></a>
            <nav class="nav nav-justified">
                <?php if (!isset($_SESSION['usuario'])){ ?>
                    <!-- <a class="nav-link active h3" style="color:#674EA7;" aria-current="page" href="index.php?option=home">Home</a> -->
                    <a class="nav-link h3" style="color:#674EA7;" href="#">Contacto</a>
                    <a class="nav-link h3" style="color:#674EA7;" href="index.php?option=usuarios">Login</a>
                    <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
                <?php } else { ?>
                        <a class="nav-link h3" style="color:#674EA7;" href="index.php?option=usuarios&logout=true">Logout </a>
                        <?php if ($_SESSION['usuario']['rolid'] > 1 ) {?>
                            <a class="nav-link h3 " style="color:#674EA7;" href="index.php?option=perfil"> Perfil </a>
                            <li class="nav-item dropdown h3" >
                                <a class="nav-link dropdown-toggle" style="color: #674EA7;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Solicitudes</a>
                                <ul class="dropdown-menu" style="background-color:#63ADF0;" >
                                    <li><a class="dropdown-item" style="color:#674EA7;" href="#">Ver Solicitudes</a></li>
                                    <li><a class="dropdown-item" style="color:#674EA7;" href="index.php?option=solicitudes&enviar=true">Enviar Solicitud</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" style="color:#674EA7;" href="#">Meets</a></li>
                                </ul>
                            </li>
                            <?php } else {?>
                                <a class="nav-link h3 " style="color:#674EA7;" href="#"> Perfil </a>
                                <a class="nav-link h3 " style="color:#674EA7;" href="#"> Gestion </a>
                            <?php } ?>
                        <?php } ?>
            </nav>
        </div>
    </nav>

</header>