
<?php if(isset($_GET['enviar'])){ ?>
  <div class="container-fluid" style="background-image: url('http://localhost/musicmatch/img/fondos/4.png') ; height: auto; background-size: 100% 100%; background-repeat: no-repeat;">
  <section class="d-flex justify-content-center align-items-center vh-100" >
    <div
      class="bg-white p-5 rounded-3 border border-3 overflow-hidden text-secondary shadow"
      style="width: 25rem; border-color: #674EA7 !important;"
    >
      <div class="d-flex justify-content-center">
        <img
          src="img/logos/1.png"
          alt="logo-icon"
          style="height: 10rem; width: 10rem;"
        />
      </div>
      <!-- <div class="text-center fs-1 fw-bold">Login</div> -->
      <form class="form" method="POST" action="index.php?option=solicitudes" autocomplete="off">
        <li class="input-group mt-4 border border-white rounded" style="border-color:#674EA7 !important;">
            <div class="input-group-text" style="background-color:#f8da67; color:white;">
                <img
                src="img\iconos\music-guitar.svg"
                alt="Instrumento"
                style="height: 1rem"
                />
            </div>
            <select id="tocaid" name="tocaid" class="form-control bg-light" style="color:#674EA7;">
                    <option value=""  <?php echo (!isset($_SESSION['usuario']))?' selected':'';?>>¿Qué tocas?</option>
                    <option value="1" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['esid'] == 1))?' selected':'';?>>Somos un grupo</option>
                    <option value="2" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['esid'] == 2))?' selected':'';?>>Toco la bateria</option>
                    <option value="3" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['esid'] == 3))?' selected':'';?>>Toco el bajo</option>
                    <option value="4" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['esid'] == 4))?' selected':'';?>>Toco la guitarra</option>
                    <option value="5" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['esid'] == 5))?' selected':'';?>>Toco los teclados</option>
                    <option value="6" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['esid'] == 6))?' selected':'';?>>Soy cantante</option>
            </select><br><br>
        </li>
        <li class="input-group mt-1 border border-white rounded" style="border-color:#674EA7 !important;">
            <div class="input-group-text" style="background-color:#f8da67; color:white;">
                <img
                src="img\iconos\music-guitar.svg"
                alt="Instrumento"
                style="height: 1rem"
                />
            </div>
            <select id="necesitaid" name="necesitaid" class="form-control bg-light" style="color:#674EA7;">
                    <option value=""  selected>¿Qué necesitas?</option>
                    <option value="1">Necesito un grupo</option>
                    <option value="2">Necesito una baterista</option>
                    <option value="3">Necesito una bajista  </option>
                    <option value="4">Necesito guitarrista</option>
                    <option value="5">Necesito una teclista</option>
                    <option value="6">Necesito una cantante</option>
            </select><br><br>
        </li>
        <button class="btn w-100 mt-4 fw-semibold shadow-sm" style="background-color:#f8da67; color:#674EA7; border-color:#674EA7;" type="submit" name="enviarsolicitud" value="enviarsolicitud">
          Enviar Solicitud
        </button>
      </form>
    </div>
</section>
</div>
<?php } ?>

<?php if(isset($_GET['ver'])){ 

if(isset($solicitudes) AND ($solicitudes != NULL)) { ?>
  <section class="container-fluid" style="background-image: url('http://localhost/musicmatch/img/fondos/4.png') ; height: auto; background-size: 100% 100%; background-repeat: no-repeat;">
    <div class= "container">
        <div class="row justify-content-center align-items-center vh-100">
        <div class="col-sm-6">
          <div id="carouselExampleCaptions2" class=" carousel-dark carousel slide" data-bs-ride="carousel">
            
            <div class="carousel-inner">
              <?php
                $cont=0; 
                foreach ($solicitudes as $solicitud) { ?>
                <div class="carousel-item <?php echo $cont == 0?"active":"" ?>">
                  <div class="card text-center rounded-2 border-5" style="background-color:#7fc6f5; border-color:#674EA7;"; >
                      <div class="card-header p-3" style="color:#674EA7;">
                        Solicitud número <?php echo $solicitud['id'] ?>
                      </div>
                      <div class="card-boitle pt-3" style="color:#674EA7; background-color:#C39BD3 !important;">
                        <h5 class="card-text" style="color:#674EA7;">Ofrezco: <?php echo $tocaidstring[$solicitud['tocaid']]['nombre']?> </h5>
                        <h5 class="card-text" style="color:#674EA7;">Necesito: <?php echo $necesitaidstring[$solicitud['necesitaid']]['nombre']?> </h5>
                        <a href="index.php?option=solicitudes&ver=true&cancelar=true" class="btn btn-primary m-3 fw-semibold shadow-sm" style="background-color:#f8da67; color:#674EA7; border-color:#674EA7;">Cancelar Solicitud</a>
                      </div>
                      <div class="card-footer p-3" style="color:#674EA7;">
                        Meet2Play
                      </div>
                  </div>
                </div>
                <?php $cont = 1; } 
              ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>
    </section>
</div>
<?php }else { ?>
  <section class="container-fluid" style="background-image: url('http://localhost/musicmatch/img/fondos/4.png') ; height: auto; background-size: 100% 100%; background-repeat: no-repeat;">
    <div class= "container">
      <div class="row justify-content-center align-items-center vh-100">
        <div class="col-sm-6 p-3 mt-5">
          <!-- <div class="card text-center rounded-2 border-3" style="background-color:#7fc6f5; border-color:#674EA7;"; >
            <div class="card-header">
              No has enviado ninguna solicitud
            </div>
            <div class="card-boitle">
              <a href="index.php?option=solicitudes&enviar=true" class="btn btn-primary m-3 fw-semibold shadow-sm" style="background-color:#f8da67; color:#674EA7; border-color:#674EA7;">Enviar Solicitud</a>
            </div>
            <div class="card-footer text-muted">
              Meet2Play
            </div>
          </div> -->
          <div class="card text-center rounded-2 border-5" style="background-color:#7fc6f5; border-color:#674EA7;"; >
                      <div class="card-header p-3 h5" style="color:#674EA7;">
                        No se ha enviado ninguna solicitud
                      </div>
                      <div class="card-boitle" style="color:#674EA7; background-color:#C39BD3 !important;">
                        <a href="index.php?option=solicitudes&enviar=true" class="btn btn-primary m-3 fw-semibold shadow-sm" style="background-color:#f8da67; color:#674EA7; border-color:#674EA7;">Enviar Solicitud</a>
                      </div>
                      <div class="card-footer p-3" style="color:#674EA7;">
                        Meet2Play
                      </div>
                  </div>
        </div>
      </div>
    </div>
</section>
<?php } }?>

<?php if(isset($_GET['meet'])){
  if(isset($meets) AND ($meets != NULL)) { print_r($meets);
    


 } } ?>

<!-- <?php if(isset($estado) && $estado != '') { include 'librerias/modal.php'; } ?> -->
