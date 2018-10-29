<?php

	class Paginas{

    // Clase que funciona de enlace para navegación
		public function enlacesPaginasModel($enlacesModel){ // Recibe un texto
      // Checa si está dentro de la lista de navegación
			if($enlacesModel == "productos" || $enlacesModel == "usuarios" || $enlacesModel == "categorias" 
      || $enlacesModel == "addProducto" || $enlacesModel == "addUser" || $enlacesModel == "addCategoria"
      || $enlacesModel == "viewProducto" || $enlacesModel == "updateProducto" || $enlacesModel == "updateUser"
      || $enlacesModel == "updateCategoria" || $enlacesModel == "deleteProducto" || $enlacesModel == "deleteUser"
      || $enlacesModel == "deleteCategoria"){
        // Y lo envia para esa dirección
				$module = "views/module/" . $enlacesModel .".php";
			}
      //Si llega como index es que fue algo que no está en la lista
			else if ($enlacesModel == "index") {
				$module = "views/module/productos.php";
			}
      else if ($enlacesModel == "okU") {
				$module = "views/module/addUser.php";
			}
      else if ($enlacesModel == "okP") {
				$module = "views/module/addProducto.php";
			}
       else if ($enlacesModel == "okC") {
				$module = "views/module/addCategoria.php";
			}
      else if ($enlacesModel == "logout") {
				$module = "views/module/logout.php";
			} else{
        $module = "views/module/productos.php";
      }
      // Y regresa una respuesta
			return $module;

		}
  }