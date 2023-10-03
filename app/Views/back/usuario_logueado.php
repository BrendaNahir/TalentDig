<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <br><br>
            <?php if (session()->get('perfil_id') == 1) : ?>
                <div>
                    <img class="center" height="200px" width="200px" src="assets\img\admin.png" class="d-block w-100" alt="300px">
                    <h1>BIENVENIDO ADMINISTRADOR</h1>
                    
                </div>
            <?php elseif (session()->get('perfil_id') == 2) : ?>
                <div>
                    <img class="center" height="200px" width="200px" src="assets\img\user.png" class="d-block w-100" alt="300px">
                    <h1>BIENVENIDO CLIENTE</h1>
                    
                  </div>
            <?php endif; ?>
        </div>
    </div>
</div>