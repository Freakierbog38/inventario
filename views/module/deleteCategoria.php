<?php
//Recibe el dato mediante metodo GET
if(isset($_GET["id"])){
  $id = $_GET["id"];
}
?>
<div class="page-wrapper">
  <div class="card">
    <div class="card-header">
      <h5>Eliminar Categoria</h5>
      <span>Ingrese su contraseña para eliminar.</span>
    </div>
    <div class="card-block">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Contraseña:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="contEli">
          </div>
        </div>
        <div class="from-group row">
          <div class="col-sm-2">
            <input type="submit" class="btn btn-danger" value="Eliminar">
          </div>
        </div>
    </form>
  </div>  
</div>
<?php
    //Enviar los datos al controlador mcvcontroler (es la clase principal de controller.php)
    $registro = new MvcController();

    //se invoca la funcion registrousuariocontroller de la clase mvccontroller;
    $registro -> eliminarCategoriaController($id);
?>