<section>

<?php if(!isset($_GET['usuarios'])){   

  echo '¡Hola ' . $_GET['papa'] . '!'; ?>

  <form class="row g-3" method="POST" action="usuarios">
    <div class="col-auto">
      <label for="inputemail" class="visually-hidden">Email</label>
      <input type="text" class="form-control" id="inputemail" placeholder="Usuario">
    </div>
    <div class="col-auto">
      <label for="inputPassword2" class="visually-hidden">Password</label>
      <input type="password" class="form-control" id="inputPassword2" placeholder="Contraseña">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Entrar</button>
    </div>
  </form>

<?php }; ?>

</section>