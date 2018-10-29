<?php
  //Solicita los registros de la tabla
  $lista = Datos::allFromTable("categorias");
?>

<div class="page-wrapper">
  <div class="card">
    <div class="card-header">
      <h5>CATEGORIAS</h5>
      <span>Muestra los categorías registradas.</span>
      <div class="card-header-right">
        <a href="index.php?action=addCategoria">
          <button class="btn btn-success" >
            <i class="icofont icofont-ui-add"></i>Agregar Categoría
          </button>
        </a>
      </div>
    </div>
    <div class="card-block table-border-style">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Agregado</th>
              
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($lista as $cate): ?>
            <tr class="table-active">
              <td><?php echo $cate['nombre']; ?></td>
              <td><?php echo $cate['descripcion']; ?></td>
              <td><?php echo $cate['fecha_agregado']; ?></td>
              <div class="card-block icon-btn">
                <td>
                    <a href="index.php?action=updateCategoria&id=<?php echo $cate['id']; ?>"><button class="btn btn-warning"><i class="ti-pencil-alt"></button></i></a>
                    <a href="index.php?action=deleteCategoria&id=<?php echo $cate['id']; ?>"><button class="btn btn-danger"><i class="ti-trash"></button></i></a>
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