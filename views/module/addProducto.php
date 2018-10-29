<div class="page-wrapper">
  <div class="card">
    <div class="card-header">
      <h5>Agregar Producto</h5>
      <span>Llene el formulario para agregar un nuevo producto.</span>
    </div>
    <div class="card-block">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Código:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="codigoReg" placeholder="Código único del producto" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nombre:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombreReg" placeholder="Nombre del producto" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Precio:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="precioReg" placeholder="Precio del producto" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Stock:</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="stockReg" placeholder="Stock Inicial" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Categoría:</label>
          <div class="col-sm-10">
            <select name="categoriaReg" class="form-control form-control-inverse">
              <?php 
              //Solicita los registros de la tabla
              $lista = Datos::allFromTable("categorias");
              foreach($lista as $d): 
              ?>
              <option value="<?php echo $d["id"]; ?>"><?php echo $d["nombre"]; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2"></label>
          <div class="col-sm-10">
            <input type="submit" class="btn btn-primary m-b-0" value="Registrar">
          </div>
        </div>
       </div>
      </form>
    </div>
  </div>
</div>
<?php
//Enviar los datos al controlador mcvcontroler (es la clase principal de controller.php)
$registro = new MvcController();
//se invoca la funcion registrousuariocontroller de la clase mvccontroller
$registro -> registroProductoController();
?>