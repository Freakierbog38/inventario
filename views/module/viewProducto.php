<?php
//Recibe el dato mediante metodo GET
if(isset($_GET["id"])){
  $id = $_GET["id"];
}
// Hace la consulta del producto
$producto = Datos::unProductoModel($id, "fullProd");
?>
<div class="row users-card">
  <div class="col-lg-12">
    <div class="card user-card">
      <div class="card-block">
        <div class="row">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-4 text-center">
            <img class="img-fluid" src="assets/images/product.png" alt="img-inverse" width="250px" height="250px">
            <br>
            <a href="index.php?action=deleteProducto&id=<?php echo $producto['id']; ?>" class="btn btn-danger" title="Eliminar">
              <i class="ti-trash"></i> Eliminar 
            </a>
            <a href="index.php?action=updateProducto&id=<?php echo $producto['id']; ?>" class="btn btn-info" title="Editar">
              <i class="ti-pencil"></i> Editar 
            </a>
          </div>
          <div class="col-sm-4 text-left">
            <div class="row margin-btm-20">
              <div class="col-sm-12">
                <strong><h3><?php echo $producto['nombre']; ?></h3></strong>
              </div>
              <div class="col-sm-12 margin-btm-10">
                <?php echo $producto['codigo']; ?>
              </div>
              <div class="col-sm-12 margin-btm-10">
              </div>
              <div class="col-sm-12">
                <strong>Stock disponible</strong>
              </div>
              <div class="col-sm-12 margin-btm-10">
                <span><?php echo $producto['stock']; ?></span>
              </div>
              <div class="col-sm-12">
                <strong> Precio venta  </strong>
              </div>
              <div class="col-sm-12">
                <span>$ <?php echo $producto['precio']; ?></span>
              </div>
              <div class="col-sm-12 margin-btm-10">
                <strong>Agregar o quitar en stock</strong>
              </div>
              <div class="col-sm-6 col-xs-6 col-md-4 ">
                <a href="" class="btn btn-success"><i class="ti-plus"></i></a>
              </div>
              <div class="col-sm-6 col-xs-6 col-md-4">
                <a href="" class="btn btn-warning"><i class="ti-minus"></i></a>
              </div>
              <div class="col-sm-12 margin-btm-10">
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-8 text-left">
            <div class="row">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th class="text-center" colspan="5">HISTORIAL DE INVENTARIO</th>
                  </tr>
                  <tr>
                    <td>Fecha</td>
                    <td>Hora</td>
                    <td>Descripción</td>
                    <td>Referencia</td>
                    <td class="text-center">Total</td>
                  </tr>
                  <tr>
                    <td>28/10/2018</td>
                    <td>17:50:31</td>
                    <td>Mario Humberto agregó 21 producto(s) al inventario</td>
                    <td>007</td>
                    <td class="text-center">21.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>