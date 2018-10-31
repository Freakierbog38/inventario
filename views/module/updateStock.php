<?php
//Recibe el dato mediante metodo GET
if(isset($_GET["id"]) && isset($_GET["accion"])){
  $id = $_GET["id"];
  $accion = $_GET["accion"];
}
?>
<div class="page-wrapper">
  <div class="card">
    <div class="card-header">
      <h5><?php if($accion < '1') echo "Agregar"; else echo "Eliminar"; ?> Stock</h5>
    </div>
    <div class="card-block">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Referencia:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="refUp">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Cantidad:</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="cantUp">
          </div>
        </div>
        <div class="from-group row">
          <div class="col-sm-2">
            <input type="submit" class="btn btn-danger" value="Actualizar">
          </div>
        </div>
    </form>
  </div>  
</div>
<?php
    //Enviar los datos al controlador mcvcontroler (es la clase principal de controller.php)
    $registro = new MvcController();

    //se invoca la funcion registrousuariocontroller de la clase mvccontroller;
    $registro -> updateStockController($id, $accion);
?>