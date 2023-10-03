<br>
<br>
<br>
<br>
<h1 style="text-shadow: 2px 2px 5px red; color: pink">REGISTRO</h1>
<br>
<br>

<div class="container text-center">
  <div class="mb-3 text-center">
    <strong><label for="Nombre" class="form-label">Nombre</label></strong>
    <input type="nombre" class="form-control" id="nombre" aria-describedby="nombre">
    <div id="nombre" class="form-text"></div>
  </div>
  <div class="mb-3 text-center">
    <strong><label for="Apellido" class="form-label">Apellido</label></strong>
    <input type="Apellido" class="form-control" id="Apellido" aria-describedby="Apellido">
    <div id="Apellido" class="form-text"></div>
  </div>
  <div class="mb-3 text-center">
    <div class="mb-3 text-center">
      <strong><label for="Nombre" class="form-label">Email</label></strong>
      <input type="Email" class="form-control" id="Email" aria-describedby="Email">
      <div id="Email" class="form-text"></div>
    </div>
    <div class="mb-3 text-center">
      <strong><label for="usuario" class="form-label">Elija un usuario</label></strong>
      <input type="usuario" class="form-control" id="usuario" aria-describedby="Usuario">
      <div id="Usuario" class="form-text"></div>
    </div>
    <div class="mb-3 text-center">
      <strong><label for="Contraseña" class="form-label">Elija una contraseña</label></strong>
      <input type="password" class="form-control" id="Contraseña" aria-describedby="Contraseña">
      <div id="Contraseña" class="form-text"></div>
    </div>




    <button type="submit" class="btn btn-danger">Registrarse</button>
    <p>¿Ya tienes una cuenta?<a class="link" href="<?= base_url('login') ?>">Iniciar Sesion</a></p>
  </div>
  <br>
  <br>