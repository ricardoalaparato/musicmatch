<?php if(!isset($_SESSION['usuario'])) { ?>
<section class="container-fluid" style="background-image: url('http://localhost/musicmatch/img/fondos/6.png') ; height: auto; background-size: 100% 100%; background-repeat: no-repeat;">
  <div class="container">
    <div class="row p-5">
      <div class="col m-3">
        <div class="card text-center" >
          <img src="img\fichas\9.png" class="card-img-top" alt="...">
          <div class="card-body" style="background-color:  #f1c40f ;">
            <h2 class="card-title mt-4">¿Sois un grupo...</h2>
            <h4 class="card-text">y os falta algún instrumento?</h4>
            <a href="index.php?option=usuarios&registro=true" class="btn p-2 m-4" style="background-color:#5b2c6f; color:white;">Ven a Meet2Play</a>
          </div>
        </div>
      </div>
      <div class="col m-3">
        <div class="card text-center">
          <img src="img\fichas\2.png" class="card-img-top" alt="...">
          <div class="card-body" style="background-color: #f1c40f ;">
            <h2 class="card-title mt-4">¿Tocas algún instrumento...</h2>
            <h4 class="card-text">y estás buscando un grupo?</h4>
            <a href="index.php?option=usuarios&registro=true" class="btn p-2 m-4" style="background-color:#5b2c6f; color:white;">Ven a Meet2Play</a>
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
          <img src="img/fichas/4.png" class="img-fluid rounded-circle w-50" alt="Foto de perfil">
        </div>
        <div class="col-sm-8 text-center mt-5 ">          
            <div class="card w-100" >
              <div class="card-body">
                <h5 class="card-title"><?php echo $usuario['nick'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $usuario['rutaimagen'] ?></h6>
                <p class="card-text"><?php echo $usuario['descripcion'] ?></p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-sm-6 p-5">
          <div id="carouselExampleCaptions" class=" carousel-dark carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <?php
                $cont=0;
                foreach ($restousuarios as $restousuario){ ?>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $cont ?>" class="<?php echo $cont == 0?"active":"" ?>" aria-current="true" aria-label="Slide <?php echo ($cont + 1) ?>"></button>
                  <?php $cont = $cont + 1; } 
              ?>
            </div>
            <div class="carousel-inner">
              <?php
                $cont=0; 
                foreach ($restousuarios as $restousuario) { ?>
                <div class="carousel-item <?php echo $cont == 0?"active":"" ?>">
                  <img src="img/fichas/<?php echo $restousuario['rutaimagen'] ?>" class="d-block w-100 rounded-circle" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h2><?php echo $restousuario['nick'] ?></h2>
                    <h5><?php echo $restousuario['descripcion'] ?></h5>
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