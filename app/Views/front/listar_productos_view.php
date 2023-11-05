<br>
<br>
<br>
<br>


<h1 style="text-shadow: 2px 2px 5px red; color: pink">PRODUCTOS</h1>
 <br>


 <div class="container text-center">
<?php 
echo form_open('mostrar_por_categoria', ['class' => 'form-signin', 'role' => 'form'] );
 $lista['0'] = 'Todos';
    foreach ($categorias as $row){
    $id_categoria = $row['id_categoria'];
    $descripcion_categoria = $row['descripcion_categoria'];
    $lista[$id_categoria] = $descripcion_categoria;
  }
echo form_dropdown('categoria', $lista,'class="form-control"');
?>
  <?php echo form_submit('Buscar','Buscar', "class='btn btn-outline-danger'"); ?>
  <?php echo form_close();?>
</div>


<br>

 <div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($producto as $row) {?>
    <?php if (($row['stock']>0)){?>

      
    <div class="col">
    <div class="card h-100 text-center" style="height: 100%;">
      <img class="card-img-top" src="<?php echo base_url('assets/img/'.$row['imagen']);?>" alt="Card image cap">

       <div class="card-body">
        <h4 style="text-shadow: 2px 2px 5px red;text-align: center;"><?php echo $row['nombre_producto'] ?> (
          <?php echo $row['stock'] ?> )</h4>
         <p class="text-dark"><?php echo $row['descripcion'] ?></p>
        <h5 style="text-shadow: 2px 2px 5px red;text-align: center;"> $ <?php echo $row['precio'] ?></h5>
          

 <!-- si el perfil es 2 (usuario registrado), se agrega el botón de agregar al carrito -->    
 <?php 
if (session()->perfil_id == 2){
    echo '<button type="submit" class="btn btn-danger">Agregar al carrito</button>';
} else {
    echo '<p>Para realizar una compra debes registrarte <a href="'. base_url('/registro') .'">Registrarse</a></p>';
}
?>

     </div>
    </div>
     </div>
  <?php } ?>
  <?php } ?>
   </div> 
 </div>

  <br>