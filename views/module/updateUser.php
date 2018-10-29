<?php
//Recibe el dato mediante metodo GET
if(isset($_GET["id"])){
  $id = $_GET["id"];
}
// Hace la consulta del producto
$usuario = Datos::unProductoModel($id, "usuarios");
?>
<div class="page-wrapper">
  <div class="card">
    <div class="card-header">
      <h5>Actualiza Usuario</h5>
      <span>Llene el formulario para actualizar el usuario.</span>
    </div>
    <div class="card-block">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nombre:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombreEdi" value="<?php echo $usuario['nombre']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Apellido:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="apellidoEdi" value="<?php echo $usuario['apellido']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nickname:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nicknameEdi" value="<?php echo $usuario['nombre_usuario']; ?>">
          </div>
        </div>
       <div class="form-group row">
          <label class="col-sm-2 col-form-label">Contraseña:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="contraEdi" value="<?php echo $usuario['password']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Correo:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="correoEdi" value="<?php echo $usuario['correo']; ?>">
          </div>
        </div>
        <div class="from-group row">
          <div class="col-sm-2">
            <input type="submit" class="btn btn-primary" value="Agregar">
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
    $registro -> editarUserController($id);

?>
