<br><br><br>

<h1 style="text-shadow: 2px 2px 5px red; color: pink">LISTADO DE USUARIOS</h1>
<br>
<div class="container">
  <table id="mytable" class="table table-bordred table-striped table-hover table-light">
    <thead class="table-danger">
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Usuario</th>
      <th>Email</th>
      <th>Perfil</th>
      <th>Baja</th>

    </thead>
    <tbody>
      <?php foreach($usuario as $row){?>
      <tr>
        <td><?php echo $row['nombre'];?></td>
        <td><?php echo $row['apellido'];?></td>
        <td><?php echo $row['usuario'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['descripcion'];?></td>
        <td><?php echo $row['baja'];?></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>