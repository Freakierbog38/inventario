<?php

require_once("conexion.php");

class Datos extends Conexion{
  
  
  #Funcion que ingresa un producto
  public function addProductoModel($datosModel, $tabla){
    //Se llama a la clase Conexion y al su método conectar que regresa un pdo y se prepara la instrucción INSERT 
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, nombre, fecha_agregado, precio, stock, categoria, ruta_img) 
      VALUES(:codigo, :nombre, :fecha, :precio, :stock, :categoria, :foto)");
    //Se cambian los valores ocultos con los valores reales
    $stmt->bindParam(":codigo", $datosModel["codigo"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datosModel["nombre"] , PDO::PARAM_STR);
    $stmt->bindParam(":precio", $datosModel["precio"], PDO::PARAM_STR);
    $stmt->bindParam(":stock", $datosModel["stock"] , PDO::PARAM_STR);
    $stmt->bindParam(":categoria", $datosModel["categoria"] , PDO::PARAM_STR);
    $stmt->bindParam(":fecha", $datosModel["fecha"] , PDO::PARAM_STR);
    $stmt->bindParam(":foto", $datosModel["imagen"] , PDO::PARAM_STR);
    
    //Se ejecuta la instrucción, si es exitosa lo hace saber, si no hace saber que no lo fue
    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    
    //Se cierra la conexión
    $stmt->close();
  }
  
  #Funcion que edita un producto
  public function updateProductoModel($datosModel, $tabla){
    //Se llama a la clase Conexion y al su método conectar que regresa un pdo y se prepara la instrucción INSERT 
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET codigo=:codigo, nombre=:nombre, precio=:precio, categoria=:categoria WHERE id=:id");
    //Se cambian los valores ocultos con los valores reales
    $stmt->bindParam(":codigo", $datosModel["codigo"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":precio", $datosModel["precio"], PDO::PARAM_STR);
    $stmt->bindParam(":categoria", $datosModel["categoria"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datosModel['id'], PDO::PARAM_STR);
    
    //Se ejecuta la instrucción, si es exitosa lo hace saber, si no hace saber que no lo fue
    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    
    //Se cierra la conexión
    $stmt->close();
  }
  
  #Funcion que ingresa un usuario
  public function addUsuarioModel($datosModel, $tabla){
    //Se llama a la clase Conexion y al su método conectar que regresa un pdo y se prepara la instrucción INSERT 
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,apellido,nombre_usuario,password,correo,ruta_img,fecha_registro) 
                                          VALUES(:nombre,:apellido,:nombre_usuario,:password,:correo,:foto,:fecha) ");
    
    //Se cambian los valores ocultos con los valores reales
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido", $datosModel["apellido"] , PDO::PARAM_STR);
    $stmt->bindParam(":nombre_usuario", $datosModel["nombre_usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":password", $datosModel["contrasena"], PDO::PARAM_STR);
    $stmt->bindParam(":correo", $datosModel["correo"] , PDO::PARAM_STR);
    $stmt->bindParam(":foto", $datosModel["ruta_img"] , PDO::PARAM_STR);
    $stmt->bindParam(":fecha", $datosModel["fecha"] , PDO::PARAM_STR);
    
    //Se ejecuta la instrucción, si es exitosa lo hace saber, si no hace saber que no lo fue
    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    
    //Se cierra la conexión
    $stmt->close();
    
  }
  
  #Funcion que edita un usuario
  public function updateUsuarioModel($datosModel, $tabla){
    //Se llama a la clase Conexion y al su método conectar que regresa un pdo y se prepara la instrucción INSERT 
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla 
    SET nombre=:nombre, apellido=:apellido, nombre_usuario=:nombre_usuario, correo=:correo, password=:password WHERE id=:id");
    
    //Se cambian los valores ocultos con los valores reales
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido", $datosModel["apellido"] , PDO::PARAM_STR);
    $stmt->bindParam(":nombre_usuario", $datosModel["nombre_usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":password", $datosModel["contrasena"], PDO::PARAM_STR);
    $stmt->bindParam(":correo", $datosModel["correo"] , PDO::PARAM_STR);
    $stmt->bindParam(":id", $datosModel["id"] , PDO::PARAM_STR);
    
    //Se ejecuta la instrucción, si es exitosa lo hace saber, si no hace saber que no lo fue
    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    
    //Se cierra la conexión
    $stmt->close();
    
  }
  
  #Funcion que ingresa un categoria
  public function addCategoriaModel($datosModel,$tabla){
    //Se llama a la clase Conexion y al su método conectar que regresa un pdo y se prepara la instrucción INSERT 
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,descripcion,fecha_agregado) 
                                          VALUES(:nombre,:descripcion,:fecha)");
    
    //Se cambian los valores ocultos con los valores reales
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datosModel["descripcion"] , PDO::PARAM_STR);
    $stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
    
    //Se ejecuta la instrucción, si es exitosa lo hace saber, si no hace saber que no lo fue
    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    
    //Se cierra la conexión
    $stmt->close();
  }
  
  #Funcion que edita un categoria
  public function updateCategoriaModel($datosModel,$tabla){
    //Se llama a la clase Conexion y al su método conectar que regresa un pdo y se prepara la instrucción INSERT 
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, descripcion=:descripcion WHERE id=:id");
    
    //Se cambian los valores ocultos con los valores reales
    $stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datosModel["descripcion"] , PDO::PARAM_STR);
    $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_STR);
    
    //Se ejecuta la instrucción, si es exitosa lo hace saber, si no hace saber que no lo fue
    if($stmt->execute()){
      return "success";
    }
    else{
      return "error";
    }
    
    //Se cierra la conexión
    $stmt->close();
  }
  
  #Trae todos los registros de una tabla
  public function allFromTable($tabla){
    //Se invoca la funcion conectar de la clase Conexion, para preparar la consulta
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
    //Si se logra la consulta regresa el resultado
    if ($stmt->execute()){
      return $stmt;
    }
    else{
      return[];
    }
    //Se cierra la conexion
    $stmt->close();
  }

  #Trae un registro de profesor
  public function unProductoModel($id, $tabla){
    //Se invoca la funcion conectar de la clase Conexion, para preparar la consulta
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_STR);
    //Si se logra la consulta regresa el resultado
    if ($stmt->execute()) {
      return $stmt->fetch();
    }
    else{
      return[];
    }
    //Se cierra la conexion
    $stmt->close();
  }
  
  #Trae un registro de historiales
  public function HistorialModel($id, $tabla){
    //Se invoca la funcion conectar de la clase Conexion, para preparar la consulta
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE usuario = :id");
    $stmt->bindParam(":id", $id, PDO::PARAM_STR);
    //Si se logra la consulta regresa el resultado
    if ($stmt->execute()) {
      return $stmt;
    }
    else{
      return[];
    }
    //Se cierra la conexion
    $stmt->close();
  }
  
  
  #Consulta de un registro de una tabla
  public function unLoginModel($datosModel, $tabla){
    //Se invoca la funcion conectar de la clase Conexion, para preparar la consulta
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombre_usuario=:username");
    $stmt->bindParam(":username", $datosModel["username"], PDO::PARAM_STR);
    //Si se logra la consulta regresa el resultado
    if ($stmt->execute()) {
      return $stmt->fetch();
    }
    else{
      return[];
    }
    //Se cierra la conexion
    $stmt->close();
  }
  
  #Eliminar un registro de Profesor
  public function deleteProductoModel($id, $tabla){
    //Se invoca la funcion conectar de la clase Conexion, para preparar la consulta
    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id=:id");
    $stmt->bindParam(":id", $id, PDO::PARAM_STR);
    //Si se logra la consulta regresa el resultado
    if ($stmt->execute()) {
      return "success";
    }
    else{
      return "error";
    }
    //Se cierra la conexion
    $stmt->close();
  }
  
  #Actualizar el stock de un producto
  public function updateStockModel($datosModel, $tabla){
    //Se invoca la funcion conectar de la clase Conexion, para preparar la consulta
    $stmt = Conexion::conectar()->prepare("CALL $tabla(:prod, :act, :user, :nota, :ref, :cant)");
    $stmt->bindParam(":prod", $datosModel['prod'], PDO::PARAM_STR);
    $stmt->bindParam(":act", $datosModel['action'], PDO::PARAM_STR);
    $stmt->bindParam(":user", $datosModel['user'], PDO::PARAM_STR);
    $stmt->bindParam(":nota", $datosModel['nota'], PDO::PARAM_STR);
    $stmt->bindParam(":ref", $datosModel['ref'], PDO::PARAM_STR);
    $stmt->bindParam(":cant", $datosModel['cantidad'], PDO::PARAM_STR);
    //Si se logra la consulta regresa el resultado
    if ($stmt->execute()) {
      return "success";
    }
    else{
      return "error";
    }
    //Se cierra la conexion
    $stmt->close();
  }
  
}