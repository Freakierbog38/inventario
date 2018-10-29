<div class="page-wrapper">
  <div class="card">
    <div class="card-header">
      <h5>Agregar Usuario</h5>
      <span>Juguetes nuevos!!</span>
    </div>
    <div class="card-block">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nombre:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombreReg" placeholder="Nombre del usuario">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Apellido:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="apellidoReg" placeholder="Apellido del usuario">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Nickname:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nicknameReg" placeholder="Nickname">
          </div>
        </div>
       <div class="form-group row">
          <label class="col-sm-2 col-form-label">Contraseña:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="contraReg" placeholder="Contrasena">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Correo:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="correoReg" placeholder="Correo">
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
    $registro -> registroUserController();
?>
