<br>
<h1 style="text-shadow: 2px 2px 5px red; color: pink">INICIAR SESIÓN</h1>

<br>

<div class="container text-center">

<!-- Muestra mensaje de que fue registrado correctamente-->
<?= csrf_field(); ?>
    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
    <?php endif ?>

  <!-- inicio del formulario -->
  <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
    <div class="mb-3">
      <!-- mensaje de error-->
      <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-warning">
          <?= session()->getFlashdata('msg') ?>
        </div>
      <?php endif; ?>

      <label for="exampleFormControlInput1" class="form-label">Ingrese su email</label>
      <input name="email" type="femail" class="form-control" placeholder="email">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Ingrese una contraseña</label>
      <input name="pass" type="password" class="form-control" placeholder="contraseña">
    </div>

    <input type="reset" value="Cancelar" class="btn btn-secondary">
    <button type="submit" class="btn btn-danger">Ingresar</button>
    <p>¿Todavía no te registraste?<a href="<?php echo base_url('/registro'); ?>">Registrarse</a></p>
  </form>
  <br>

  <br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<br>