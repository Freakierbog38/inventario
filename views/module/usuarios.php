<?php
  //Solicita los registros de la tabla
  $lista = Datos::allFromTable("usuarios");
?>
<div class="page-wrapper">
  <div class="card">
    <div class="card-header">
      <h5>USUARIOS</h5>
      <span>Muestra los usuarios registrado.</span>
      <div class="card-header-right">
				<a href="index.php?action=addUser">
          <button class="btn btn-success" >
            <i class="icofont icofont-ui-add"></i>Agregar Usuario
          </button>
        </a>
			</div>
    </div>
    <div class="card-block table-border-style">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombres</th>
              <th>Usuario</th>
              <th>Correo</th>
              <th>Agregado</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($lista as $user): ?>
            <tr class="table-active">
              <td><?php echo $user['id']; ?></td>
              <td><?php echo $user['nombre']; ?></td>
              <td><?php echo $user['correo']; ?></td>
              <td><?php echo $user['fecha_registro']; ?></td>
              <div class="card-block icon-btn">
                <td>
                    <a href="index.php?action=updateUser&id=<?php echo $user['id']; ?>"><button class="btn btn-warning"><i class="ti-pencil-alt"></button></i></a>
                    <a href="index.php?action=deleteUser&id=<?php echo $user['id']; ?>"><button class="btn btn-danger"><i class="ti-trash"></button></i></a>
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
