<section>


  <form class="row g-3" method="POST" action="index.php?option=usuarios">
    <div class="col-auto">
      <label for="nick" class="visually-hidden">Usuario</label>
      <input type="text" class="form-control" id="nick" name="nick" placeholder="Usuario">
    </div>
    <div class="col-auto">
      <label for="clave" class="visually-hidden">Password</label>
      <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña">
    </div>
    <div class="col-auto">
      <button type="submit" name="login" value="login" title="Pulsa para enviar tu mensaje" class="btn btn-primary mb-3">Entrar</button>
    </div>
  </form>

  <?php if(isset($estado) && $estado != '') { include 'librerias/modal.php'; } ?>

</section>