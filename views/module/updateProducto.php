<?php
//Recibe el dato mediante metodo GET
if(isset($_GET["id"])){
  $id = $_GET["id"];
}
// Hace la consulta del producto
$producto = Datos::unProductoModel($id, "productos");
?>
<div class="page-wrapper">
  <div class="card">
    <div class="card-header">
      <h5>Actualizar Producto</h5>
      <span>Llene el formulario para actualizar el producto.</span>
    </div>
    <div class="card-block">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Código:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="codigoEdi" value="<?php echo $producto['codigo']; ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nombre:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombreEdi" value="<?php echo $producto['nombre']; ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Precio:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="precioEdi" value="<?php echo $producto['precio']; ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Stock:</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="stockEdi" value="<?php echo $producto['stock']; ?>" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Categoría:</label>
          <div class="col-sm-10">
            <select name="categoriaEdi" class="form-control form-control-inverse">
              <?php 
              //Solicita los registros de la tabla
              $lista = Datos::allFromTable("categorias");
              foreach($lista as $d): 
              ?>
              <option value="<?php echo $d["id"]; ?>" <?php if($d['id']==$producto['categoria']) echo 'selected'; ?>><?php echo $d["nombre"]; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2"></label>
          <div class="col-sm-10">
            <input type="submit" class="btn btn-primary m-b-0" value="Actualizar">
          </div>
        </div>
       </div>
      </form>
    </div>
  </div>
</div>
<?php
//Enviar los datos al controlador mcvcontroler (es la clase principal de controller.php)
$editar = new MvcController();
//se invoca la funcion registrousuariocontroller de la clase mvccontroller
$editar -> editarProductoController($id);
?>