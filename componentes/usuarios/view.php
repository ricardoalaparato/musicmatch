
<!-- TODO: Sustituir los div por etiquetas adecuadas -->
<div class="container-fluid" style="background-image: url('http://localhost/musicmatch/img/fondos/4.png') ; height: auto; background-size: 100% 100%; background-repeat: no-repeat;">
<section class="d-flex justify-content-center align-items-center vh-100" >
<?php if(!isset($_GET['registro'])){ ?>
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
      <form class="form" method="POST" action="index.php?option=usuarios" autocomplete="off">
        <li class="input-group mt-4 border border-white rounded" style="border-color:#674EA7 !important;">
          <div class="input-group-text" style="background-color:#f8da67; color:white;">
            <img
              src="img/iconos/username-icon.svg"
              alt="username-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            style="color:#674EA7;"
            type="text"
            placeholder="Tu nombre de usuario"
            id="nick"
            name="nick"
          />
        </li>
        <li class="input-group mt-1 border border-white rounded" style="border-color:#674EA7 !important;">
          <div class="input-group-text" style="background-color:#f8da67; color:white;">
            <img
              src="img/iconos/password-icon.svg"
              alt="password-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            style="color:#674EA7;"
            type="password"
            placeholder="Tu clave"
            id="clave"
            name="clave"
          />
        </li>
        
        <button class="btn w-100 mt-4 fw-semibold shadow-sm" style="background-color:#f8da67; color:#674EA7; border-color:#674EA7;" type="submit" name="login" value="login">
          Login
        </button>
      </form>
      <div class="d-flex gap-1 justify-content-center mt-1">
        <div>¿No tienes cuenta?</div>
        <a href="index.php?option=usuarios&registro=true" class="text-decoration-none fw-semibold" style="color:violet;">Registrate</a>
      </div>
    </div>
      


<?php } else { ?>
<!-- Empieza form registro -->


    <div
      class="bg-white p-5 border border-3 rounded-3 overflow-hidden text-secondary shadow"
      style="width: 25rem; border-color: #674EA7 !important;"
    >
      <div class="d-flex justify-content-center">
        <img
          src="img/logos/1.png"
          alt="login-icon"
          style="height: 10rem"
        />
      </div>
      <!-- <div class="text-center fs-1 fw-bold">Registro</div> -->
      <form class="form" method="POST" action="index.php?option=usuarios" autocomplete="on">
      <li class="input-group mt-4 border border-white rounded" style="border-color:#674EA7 !important;">
          <div class="input-group-text" style="background-color:#f8da67; color:white;">
            <img
              src="img/iconos/username-icon.svg"
              alt="username-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            style="color:#674EA7;"
            type="text"
            placeholder="Tu nombre de usuario"
            id="nick"
            name="nick"
          />
        </li>
        <li class="input-group mt-1 border border-white rounded" style="border-color:#674EA7 !important;">
          <div class="input-group-text" style="background-color:#f8da67; color:white;">
            <img
              src="img/iconos/email-address-icon.svg"
              alt="email-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            style="color:#674EA7;"
            type="email"
            placeholder="Tu direccion de correo"
            id="email"
            name="email"
          />
        </li>
        <li class="input-group mt-1 border border-white rounded" style="border-color:#674EA7 !important;">
          <div class="input-group-text" style="background-color:#f8da67; color:white;">
            <img
              src="img\iconos\password-icon.svg"
              alt="password-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            style="color:#674EA7;"
            type="password"
            placeholder="Tu clave"
            id="clave"
            name="clave"
          />
        </li>
        <li class="input-group mt-1 border border-white rounded" style="border-color:#674EA7 !important;">
          <div class="input-group-text" style="background-color:#f8da67; color:white;">
            <img
              src="img\iconos\password-icon.svg"
              alt="password-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            style="color:#674EA7;"
            type="password"
            placeholder="Otra vez"
            id="clave2"
            name="clave2"
          />
        </li>
      <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['rolid'] == 1) {?>
        <li class="input-group mt-1 border border-white rounded" style="border-color:#674EA7 !important;">
           <!-- <label for="activo" title="Introduce el estado del usuario">Activo</label> -->
           <div class="input-group-text" style="background-color:#f8da67; color:white;">
            <img
              src="img\iconos\active.svg"
              alt="activo"
              style="height: 1rem"
            />
          </div>
           <select id="activo" name="activo" class="form-control bg-light" style="color:#674EA7;">
                  <option value="" <?php echo (!isset($usuario))?' selected':'';?>>¿Activo?</option>
                  <option value="0" <?php echo (isset($usuario) && ($usuario['activo'] == 0))?' selected':'';?>>No</option>
                  <option value="1" <?php echo (isset($usuario) && ($usuario['activo'] == 1))?' selected':'';?>>S&iacute;</option>
            </select><br><br>
        </li>
        <?php } else {?>  
          
            <input type="hidden" id="rolid" name="rolid" value="3" />
                              
        <?php }?>
        <li class="input-group mt-1 border border-white rounded" style="border-color:#674EA7 !important;">
           <div class="input-group-text" style="background-color:#f8da67; color:white;">
            <img
              src="img\iconos\music-guitar.svg"
              alt="Instrumento"
              style="height: 1rem"
            />
          </div>
           <select id="esid" name="esid" class="form-control bg-light" style="color:#674EA7;">
                  <option value="" <?php echo (!isset($usuario))?' selected':'';?>>Elige tu instrumento</option>
                  <option value="1" <?php echo (isset($usuario) && ($usuario['esid'] == 6))?' selected':'';?>>Somos un grupo</option>
                  <option value="2" <?php echo (isset($usuario) && ($usuario['esid'] == 1))?' selected':'';?>>Toco la bateria</option>
                  <option value="3" <?php echo (isset($usuario) && ($usuario['esid'] == 2))?' selected':'';?>>Toco el bajo</option>
                  <option value="4" <?php echo (isset($usuario) && ($usuario['esid'] == 3))?' selected':'';?>>Toco la guitarra</option>
                  <option value="5" <?php echo (isset($usuario) && ($usuario['esid'] == 4))?' selected':'';?>>Toco los teclados</option>
                  <option value="6" <?php echo (isset($usuario) && ($usuario['esid'] == 5))?' selected':'';?>>Soy cantante</option>
            </select><br><br>
        </li>
        

        <button class="btn w-100 mt-4 fw-semibold shadow-sm" style="background-color:#f8da67; color:#674EA7; border-color:#674EA7;" type="submit" name="registro" value="registro">
          Regístrate
        </button>
      </form>
    </div>
  <?php }; ?>
  <?php if(isset($estado) && $estado != '') { include 'librerias/modal.php'; } ?> 
</section> 
</div> 
  
            



