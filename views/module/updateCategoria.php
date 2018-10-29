<?php
//Recibe el dato mediante metodo GET
if(isset($_GET["id"])){
  $id = $_GET["id"];
}
// Hace la consulta del producto
$cate = Datos::unProductoModel($id, "categorias");
?>
<div class="page-wrapper">
  <div class="card">
    <div class="card-header">
      <h5>Editar Categoría</h5>
      <span>Llene el formulario para agregar una nueva categoría.</span>
    </div>
    <div class="card-block">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nombre:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombreEdi" value="<?php echo $cate['nombre']; ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Descripción:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="descripcionEdi" value="<?php echo $cate['descripcion']; ?>">
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
    $registro = new MvcController();

    //se invoca la funcion registrousuariocontroller de la clase mvccontroller;
    $registro -> editarCategoriaController($id);

?>