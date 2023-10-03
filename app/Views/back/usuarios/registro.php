<br>
<br>
<br>
<br>
<h1 style="text-shadow: 2px 2px 5px red; color: pink">REGISTRO</h1>
<br>
<br>

<?php $validation = \Config\Services::validation(); ?>
<form method="post" action="<?php echo base_url('/enviar-form') ?> ">

    <div class="container text-center">
    <!-- mensajes de error-->
    <?= csrf_field(); ?>
    <?= csrf_field(); ?>
    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
    <?php endif ?>
    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
    <?php endif ?>

        <div class="form">
            <label for="exampleFormControlInput1" class="form-label">Ingrese su nombre</label>
            <input name="nombre" type="text" class="form-control" placeholder="nombre">
            <?php if ($validation->getError('nombre')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('nombre'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Ingrese su apellido</label>
            <input type="text" name="apellido" class="form-control" placeholder="apellido">
            <?php if ($validation->getError('apellido')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('apellido'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ingrese su email</label>
            <input name="email" type="email" class="form-control" placeholder="email">
            <?php if ($validation->getError('email')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('email'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ingrese un usuario</label>
            <input type="text" name="usuario" class="form-control" placeholder="usuario">
            <?php if ($validation->getError('usuario')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('usuario'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Ingrese una contraseña</label>
            <input name="pass" type="password" class="form-control" placeholder="contraseña">
            <?php if ($validation->getError('pass')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('pass'); ?>
                </div>
            <?php } ?>
        </div>

        <!--input type="submit" value="Registrarse" class="btn btn-success"-->
        <input type="reset" value="Cancelar" class="btn btn-secondary">
        <button type="submit" class="btn btn-danger">Registrarse</button>
        <br>
        <br>
        <p>¿Ya tienes una cuenta?<a class="link" href="<?= base_url('login') ?>">Iniciar Sesion</a></p>
</form>
</div>