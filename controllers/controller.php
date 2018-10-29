<?php

	class MvcController{
    //Llamar a la plantilla
    public function pagina(){
      //Include se utiliza para invocar el arhivo que contiene el codigo HTML
      include "views/plantilla.php";
    }
    
    //Interacción con el usuario
    public function enlacesPaginasController(){
      //Trabajar con los enlaces de las páginas
      
      //Validamos si la variable "action" viene vacia, es decir cuando se abre la pagina por primera vez se debe cargar la vista index.php
      if(isset($_GET['action'])){
        //guardar el valor de la variable action en views/modules/navegacion.php en el cual se recibe mediante el metodo get esa variable
        $enlaces = $_GET['action'];
      }else{ 
        //Si viene vacio inicializo con index
        $enlaces = "index";
      }
      
      //Mostrar los archivos de los enlaces de cada una de las secciones: inicio, nosotros, etc.
      //Para esto hay que mandar al modelo para que haga dicho proceso y muestre la informacions
      $respuesta = Paginas::enlacesPaginasModel($enlaces);
      
      include $respuesta;
    }
    
    
     public function registroProductoController(){
      if(isset($_POST["codigoReg"])){
            //Se reemplaza el nombre por la matricula conservando su extensión
            $nombreArchivo = "product.png";
            //Recibe todas las variables mediante POST y las asigna a un array asociado
            $datosController = array("codigo" => $_POST["codigoReg"],
                                     "nombre" => $_POST["nombreReg"],
                                     "precio" => $_POST["precioReg"],
                                     "stock" => $_POST["stockReg"],
                                     "categoria" => $_POST["categoriaReg"],
                                     "fecha" => date("Y-m-d"),
                                     "imagen" => $nombreArchivo);
            
            //Se le dice al modelo models/crud.php (Datos::registroUsuarioModel), que en la clase "Datos" la funcion "registrousuariomodel" reciba en sus dos parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
            $respuesta = Datos::addProductoModel($datosController, "productos");

            //Se imprime la respuesta en la vista
            if($respuesta == "success"){
                header("location:index.php?action=productos");
            }
            else{
                header("location:index.php");
            }
          }
      }
    
      public function registroUserController(){
        if(isset($_POST["nombreReg"])){
            //Se extrae el nombre del archivo que se subió
            //$nombreArchivo = basename($_FILES['foto']['apellidoRegistro']);
            //Del nombre se extrae la extensión
            //$extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
            //Se reemplaza el nombre por la matricula conservando su extensión
            $nombreArchivo = "caja.png";
            //Recibe todas las variables mediante POST y las asigna a un array asociado
            $datosController = array("nombre" => $_POST["nombreReg"],
                                     "apellido" => $_POST["apellidoReg"],
                                     "nombre_usuario" => $_POST["nicknameReg"],
                                     "contrasena" => $_POST["contraReg"],
                                     "correo" => $_POST["correoReg"],
                                     "ruta_img" => $nombreArchivo,
                                     "fecha" => date("Y-m-d"));
            
            //Se le dice al modelo models/crud.php (Datos::registroUsuarioModel), que en la clase "Datos" la funcion "registrousuariomodel" reciba en sus dos parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
            $respuesta = Datos::addUsuarioModel($datosController, "usuarios");
            //Se imprime la respuesta en la vista
            if($respuesta == "success"){
                header("location:index.php?action=usuarios");
            }
            else{
                header("location:index.php");
            }
          }
        }

      public function registroCategoriaController(){
        if(isset($_POST["nombreReg"])){
              //Recibe todas las variables mediante POST y las asigna a un array asociado
              $datosController = array("nombre" => $_POST["nombreReg"],
                                       "descripcion" => $_POST["descripcionReg"],
                                       "fecha" => date("Y-m-d"));

              //Se le dice al modelo models/crud.php (Datos::registroUsuarioModel), que en la clase "Datos" la funcion "registrousuariomodel" reciba en sus dos parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
              $respuesta = Datos::addCategoriaModel($datosController, "categorias");

              //Se imprime la respuesta en la vista
              if($respuesta == "success"){
                  header("location:index.php?action=categorias");
              }
              else{
                  header("location:index.php");
              }
         }
      }
    
    public function editarCategoriaController($id){
      if(isset($_POST["nombreEdi"])){
        //Recibe todas las variables mediante POST y las asigna a un array asociado
        $datosController = array("nombre" => $_POST["nombreEdi"],
                                 "descripcion" => $_POST["descripcionEdi"],
                                 "id" => $id);

        //Se le dice al modelo models/crud.php (Datos::registroUsuarioModel), que en la clase "Datos" la funcion "registrousuariomodel" reciba en sus dos parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
        $respuesta = Datos::updateCategoriaModel($datosController, "categorias");

        //Se imprime la respuesta en la vista
        if($respuesta == "success"){
          header("location:index.php?action=categorias");
        }
        else{
          header("location:index.php");
        }
      }
    }
    
    public function editarProductoController($id){
      if(isset($_POST["codigoEdi"])){
        //Recibe todas las variables mediante POST y las asigna a un array asociado
        $datosController = array("codigo" => $_POST["codigoEdi"],
                                 "nombre" => $_POST["nombreEdi"],
                                 "precio" => $_POST["precioEdi"],
                                 "categoria" => $_POST["categoriaEdi"],
                                 "id" => $id);
            
        //Se le dice al modelo models/crud.php (Datos::registroUsuarioModel), que en la clase "Datos" la funcion "registrousuariomodel" reciba en sus dos parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
        $respuesta = Datos::updateProductoModel($datosController, "productos");

        //Se imprime la respuesta en la vista
        if($respuesta == "success"){
          header("location:index.php?action=productos");
        }
        else{
          header("location:index.php");
        }
      }
    }
    
    public function editarUserController($id){
      if(isset($_POST["nombreEdi"])){
        //Recibe todas las variables mediante POST y las asigna a un array asociado
        $datosController = array("nombre" => $_POST["nombreEdi"],
                                 "apellido" => $_POST["apellidoEdi"],
                                 "nombre_usuario" => $_POST["nicknameEdi"],
                                 "contrasena" => $_POST["contraEdi"],
                                 "correo" => $_POST["correoEdi"],
                                 "id" => $id);
            
        //Se le dice al modelo models/crud.php (Datos::registroUsuarioModel), que en la clase "Datos" la funcion "registrousuariomodel" reciba en sus dos parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
        $respuesta = Datos::updateUsuarioModel($datosController, "usuarios");
        //Se imprime la respuesta en la vista
        if($respuesta == "success"){
          header("location:index.php?action=usuarios");
        }
        else{
          header("location:index.php");
        }
      }
    }
    
    public function loginController(){
      if(isset($_POST['unLog'])){
        //Recibe todas las variables mediante POST y las asigna a un array asociado
        $datosController = array("username" => $_POST["unLog"],
                                 "password" => $_POST["passLog"]);

        $respuesta = Datos::unLoginModel($datosController, "usuarios");

        if($respuesta){
          if($datosController['password'] == $respuesta['password']){
            
            $_SESSION['usuario_id'] = $respuesta['id'];
            $_SESSION['usuario_nombre'] = $respuesta['nombre'];
            $_SESSION['usuario_apellido'] = $respuesta['apellido'];
            $_SESSION['usuario_email'] = $respuesta['correo'];
            $_SESSION['usuario_password'] = $respuesta['password'];
            $_SESSION['usuario_username'] = $respuesta['nombre_usuario'];
            $_SESSION['usuario_foto'] = $respuesta['ruta_img'];
            header("Location: index.php");
          }
          else{
            //header("location:login.php");
          }
        }
        else{
          //header("location:login.php");
        }
      }
    }
    
    public function eliminarProductoController($id){
      if(isset($_POST['contEli'])){
        if($_POST['contEli'] == $_SESSION['usuario_password']){
          $respuesta = Datos::deleteProductoModel($id, "productos");
          if($respuesta="success")
            header("Location: index.php?action=productos");
          else
            header("Location: index.php");
        }
        else{
          return "Incorrecta";
        }
      }
    }
    
    public function eliminarUsuarioController($id){
      if(isset($_POST['contEli'])){
        if($_POST['contEli'] == $_SESSION['usuario_password']){
          $respuesta = Datos::deleteProductoModel($id, "usuarios");
          if($respuesta="success")
            header("Location: index.php?action=usuarios");
          else
            header("Location: index.php");
        }
        else{
          return "Incorrecta";
        }
      }
    }
    
    public function eliminarCategoriaController($id){
      if(isset($_POST['contEli'])){
        if($_POST['contEli'] == $_SESSION['usuario_password']){
          $respuesta = Datos::deleteProductoModel($id, "categorias");
          if($respuesta="success")
            header("Location: index.php?action=categorias");
          else
            header("Location: index.php");
        }
        else{
          return "Incorrecta";
        }
      }
    }
  }