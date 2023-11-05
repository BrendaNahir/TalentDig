<!-- menú de navegación-->

<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-pink fixed-top">
  <div class="container-fluid">
    <a href="<?php echo base_url('principal') ?>" alt="" width="80">
      <img src="assets/img/logoEmpresa.png" alt="Logo" width="80">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if (session()->perfil_id == 1) : ?>

      <a class="btn btn-outline-danger" type="submit">ADMIN:<?php echo session('nombre'); ?> </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Editar usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Agregar productos</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url("listar_productos_admi");?>">Listar productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Listar ventas</a>
          </li>
        </ul>

        <form class="d-flex">
          <a class="btn btn-outline-danger" type="submit" href="<?php echo base_url("/logout"); ?>">Cerrar sesión</a>
        </form>


      </div>


    <?php elseif (session()->perfil_id == 2) : ?>
      <a class="btn btn-outline-danger" type="submit">CLIENTE:<?php echo session('nombre'); ?> </a>

      <!-- navbar para clientes que pueden comprar -->

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("quienes_somos"); ?>">¿Quiénes Somos?</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("acerca_de"); ?>">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("carrito");?>">Carrito</a>
          </li>
          <li class="nav-item">

          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url("listar_productos");?>">Productos</a>
        </li>

        </ul>

        <form class="d-flex">
          <a class="btn btn-outline-danger" type="submit" href="<?php echo base_url("/logout"); ?>">Cerrar sesión</a>
        </form>
      </div>
    <?php else : ?>

      
      <!-- navbar para clientes no logueados-->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("quienes_somos"); ?>">¿Quiénes Somos?</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("acerca_de"); ?>">Acerca de</a>
          </li>
          <!--li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Productos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Producto1</a></li>
              <li><a class="dropdown-item" href="#">Producto2</a></li>
              <li><a class="dropdown-item" href="#">Producto3</a></li>
            </ul>
          </li-->
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url("listar_productos");?>">Productos</a>
        </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("registro"); ?>">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url("login"); ?>">Iniciar sesión</a>
          </li>
        </ul>
      </div>
      <form class="d-flex" role="buscar">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-danger" type="submit">Buscar</button>
      </form>
    <?php endif; ?>

  </div>
</nav>