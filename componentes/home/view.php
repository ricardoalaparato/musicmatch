<?php if(!isset($_SESSION['usuario'])) { ?>
<section class="container-fluid" style="background-image: url('http://localhost/musicmatch/img/fondos/6.png') ; height: auto; background-size: 100% 100%; background-repeat: no-repeat;">
  <div class="container">

    <div class="row text-center text-white p-5">
      <!-- <h1>meet2play</h1>
      <p class="p-2">el lugar donde se reune la musica</p> -->
    </div>

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
<?php } else { 
 echo 'curriculum';

} ?>