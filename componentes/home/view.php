<?php if(!isset($_SESSION['usuario'])) { ?>
<section class="container-fluid" style="background-image: url('http://localhost/musicmatch/img/fondos/6.png') ; height: auto; background-size: 100% 100%; background-repeat: no-repeat;">
  <div class="container">
    <div class="row p-5">
      <div class="col m-3">
        <div class="card text-center border-5" style="border-color:#674EA7;" >
          <img src="img\fichas\14.png" class="card-img-top" alt="...">
          <div class="card-body" style="background-color:  #f1c40f ;">
            <h2 class="card-title mt-4">¿Sois un grupo...</h2>
            <h4 class="card-text">y os falta algún instrumento?</h4>
            <a href="index.php?option=usuarios&registro=true" class="btn p-2 m-4 border-1" style="background-color:#63ADF0; color:white;border-color:#674EA7 !important;">Ven a Meet2Play</a>
          </div>
        </div>
      </div>
      <div class="col m-3">
        <div class="card text-center border-5" style="border-color:#674EA7;" >
          <img src="img\fichas\2.png" class="card-img-top" alt="...">
          <div class="card-body" style="background-color: #f1c40f ;">
            <h2 class="card-title mt-4">¿Tocas algún instrumento...</h2>
            <h4 class="card-text">y estás buscando un grupo?</h4>
            <a href="index.php?option=usuarios&registro=true" class="btn p-2 m-4 border-1" style="background-color:#63ADF0; border-color:#674EA7 !important; color:white;">Ven a Meet2Play</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } else { $usuario=$_SESSION['usuario'];?>
<section class="container-fluid" style="background-image: url('http://localhost/musicmatch/img/fondos/4.png') ; height: auto; background-size: 100% 100%; background-repeat: no-repeat;">
  <div class= "container">
    <div class="row align-items-center">
        <div class="col-sm-4 text-center mt-5">
          <img src="img/fichas/<?php echo $usuario['rutaimagen'] ?>" class="img-fluid rounded-circle w-50" alt="Foto de perfil">
        </div>
        <div class="col-sm-8 mt-5 ">          
            <div class="card w-100 border-3 rounded-pill" style="background-color:#7fc6f5; border-color:#674EA7;" >
              <div class="card-body">
                <h3 class="card-title text-center" style="color:#674EA7;"><?php echo $usuario['nick'] ?></h3>
                <?php if ($_SESSION['usuario']['rolid'] > 1 ) {?>
                  <h6 class="card-subtitle mb-2  text-center text-muted"><?php echo $usuarioinstrumento['nombre'] ?></h6>
                  <p class="card-text p-2 ml-2 text-center" style="color:#e1e6e7;"><?php echo $usuario['descripcion'] ?></p>
                <?php } ?>
              </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-sm-4 p-3">
          <div id="carouselExampleCaptions" class=" carousel-dark carousel slide" data-bs-ride="carousel">
            
            <div class="carousel-inner">
              <?php
                $cont=0; 
                foreach ($restousuarios as $restousuario) { ?>
                <div class="carousel-item <?php echo $cont == 0?"active":"" ?>">
                  <div class="card rounded-2 text-dark border-3 mb-3" style="width: 50 rem; background-color:#7fc6f5; border-color:#674EA7;";>
                      <img class="card-img-top" src="img/fichas/<?php echo $restousuario['rutaimagen'] ?>" alt="Card image cap">
                      <div class="card-body text-center">
                        <h3 class="card-text" style="color:#674EA7;"><?php echo $restousuario['nick'] ?></h3>
                        <h5 class="card-text" style="color:#e1e6e7;"><?php echo $esidstring[$restousuario['esid']]['nombre']?></h5>
                        <?php if ($_SESSION['usuario']['rolid'] == 1 ) { ?>
                          <a href="index.php?option=gestion&eliminar=true" class="btn btn-primary m-3 fw-semibold shadow-sm" style="background-color:#f8da67; color:#674EA7; border-color:#674EA7;">Eliminar usuario</a>
                        <?php } ?>
                      </div>
                  </div>
                  
                </div>
                <?php $cont = 1; } 
              ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>
  </div>
</section>
<?php } ?>