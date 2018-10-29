<?php
  //Solicita los registros de la tabla
  $lista = Datos::allFromTable("fullProd");
?>
<div class="page-wrapper">
  <div class="card">
    <div class="card-header">
      <h5>PRODUCTOS</h5>
      <span>Muestra los productos existentes.</span>
      <div class="card-header-right">
				<a href="index.php?action=addProducto">
          <button class="btn btn-success" >
            <i class="icofont icofont-ui-add"></i>Agregar Producto
          </button>
        </a>
			</div>
    </div>
    <div class="card-block table-border-style">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Código</th>
              <th>Nombre</th>
              <th>Categoría</th>
              <th>Precio</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($lista as $prod): ?>
            <tr class="table-active">
              <td><?php echo $prod['codigo']; ?></td>
              <td><?php echo $prod['nombre']; ?></td>
              <td><?php echo $prod['categoria']; ?></td>
              <td><?php echo $prod['precio']; ?></td>
              <div class="card-block icon-btn">
                <td>
                    <a href="index.php?action=viewProducto&id=<?php echo $prod['id']; ?>"><button class="btn btn-warning"><i class="ti-eye"></button></i></a>
                </td>
              </div>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>  
</div>