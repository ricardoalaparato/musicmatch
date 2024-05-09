
<div class="container-fluid" style="background-image: url('http://localhost/musicmatch/img/fondos/4.png') ; height: auto; background-size: 100% 100%; background-repeat: no-repeat;">
  <section class="d-flex justify-content-center align-items-center vh-100" >
    <div
      class="bg-white p-5 rounded-3 overflow-hidden text-secondary shadow"
      style="width: 50rem"
    >
      <div class="d-flex justify-content-center">
        <img
          src="img/logos/1.png"
          alt="login-icon"
          style="height: 10rem"
        />
      </div>
      <!-- <div class="text-center fs-1 fw-bold">Registro</div> -->
      <form class="form" method="POST" action="index.php?option=perfil" enctype="multipart/form-data" autocomplete="on">
        <li class="input-group mt-4">
          <div class="input-group-text" style="background-color:#5b2c6f; color:white;">
            <img
              src="img/iconos/username-icon.svg"
              alt="username-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            type="text"
            placeholder="Tu nombre de usuario"
            id="nick"
            name="nick"
            value="<?php echo $_SESSION['usuario']['nick'];?>"
          />
        </li>
        <li class="input-group mt-1">
          <div class="input-group-text" style="background-color:#5b2c6f; color:white;">
            <img
              src="img/iconos/email-address-icon.svg"
              alt="email-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            type="email"
            placeholder="Tu direccion de correo"
            id="email"
            name="email"
            value="<?php echo $_SESSION['usuario']['email'];?>"
          />
        </li>
        <li class="input-group mt-1">
          <div class="input-group-text" style="background-color:#5b2c6f; color:white;">
            <img
              src="img\iconos\password-icon.svg"
              alt="password-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            type="password"
            placeholder="Tu clave"
            id="clave"
            name="clave"
            
          />
        </li>
        <li class="input-group mt-1">
          <div class="input-group-text" style="background-color:#5b2c6f; color:white;">
            <img
              src="img\iconos\password-icon.svg"
              alt="password-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            type="password"
            placeholder="Otra vez"
            id="clave2"
            name="clave2"
            
          />
        </li>
      <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['rolid'] == 1) {?>
        <li class="input-group mt-1">
           <!-- <label for="activo" title="Introduce el estado del usuario">Activo</label> -->
           <div class="input-group-text" style="background-color:#5b2c6f; color:white;">
            <img
              src="img\iconos\active.svg"
              alt="activo"
              style="height: 1rem"
            />
          </div>
           <select id="activo" name="activo" class="form-control bg-light">
                  <option value="" <?php echo (!isset($_SESSION['usuario']))?' selected':'';?>>¿Activo?</option>
                  <option value="0" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['activo'] == 0))?' selected':'';?>>No</option>
                  <option value="1" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['activo'] == 1))?' selected':'';?>>S&iacute;</option>
            </select><br><br>
        </li>
        <?php } else {?>  
          
            <input type="hidden" id="rolid" name="rolid" value="3" />
                              
        <?php }?>
        <li class="input-group mt-1">
           <div class="input-group-text" style="background-color:#5b2c6f; color:white;">
            <img
              src="img\iconos\music-guitar.svg"
              alt="Instrumento"
              style="height: 1rem"
            />
          </div>
           <select id="esid" name="esid" class="form-control bg-light">
                  <option value="" <?php echo (!isset($_SESSION['usuario']))?' selected':'';?>>Elige tu instrumento</option>
                  <option value="6" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['esid'] == 6))?' selected':'';?>>Somos un grupo</option>
                  <option value="1" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['esid'] == 1))?' selected':'';?>>Toco la bateria</option>
                  <option value="2" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['esid'] == 2))?' selected':'';?>>Toco el bajo</option>
                  <option value="3" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['esid'] == 3))?' selected':'';?>>Toco la guitarra</option>
                  <option value="4" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['esid'] == 4))?' selected':'';?>>Toco los teclados</option>
                  <option value="5" <?php echo (isset($_SESSION['usuario']) && ($_SESSION['usuario']['esid'] == 5))?' selected':'';?>>Soy cantante</option>
            </select><br><br>
        </li>

        <li class="input-group mt-1">
          <div class="input-group-text" style="background-color:#5b2c6f; color:white;">
            <img
              src="img/iconos/card-text.svg"
              alt="card-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            type="text"
            placeholder="Una breve descripción de tí"
            id="descripcion"
            name="descripcion"
            value="<?php echo $_SESSION['usuario']['descripcion'];?>"
          />
        </li>

        <li class="input-group mt-1">
          <div class="input-group-text" style="background-color:#5b2c6f; color:white;">
            <img
              src="img/iconos/card-text.svg"
              alt="card-icon"
              style="height: 1rem"
            />
          </div>
          <input
            class="form-control bg-light"
            type="file"
            placeholder=""
            id="archivo"
            name="archivo"
            
            
          />
          
        </li>

        <button class="btn text-white w-100 mt-4 fw-semibold shadow-sm" style="background-color:#5b2c6f;" type="submit" name="actualizar" value="actualizar">
          Actualizar Perfil
        </button>
      </form>
    </div>
  </section>

</div>


<div class="container-fluid" style="background-image: url('http://localhost/musicmatch/img/fondos/4.png') ; height: auto; background-size: 100% 100%; background-repeat: no-repeat;">
<section class="d-flex justify-content-center align-items-center vh-100" >
<form class="form" method="POST" action="index.php?option=perfil" enctype="multipart/form-data" autocomplete="on">
  
    <li>
      <label for="formFile" class="form-label mt-4">Selecciona foto</label>
      <input class="form-control" type="file" id="formFile" name="archivo">
    </li>
    <button type="submit" id="subirfoto2"  class="btn btn-primary">Subir Foto</button>
    
</form> 
</section>
</div>
