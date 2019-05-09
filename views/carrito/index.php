<div class="container" background="../img/fondo psgins inicio.jpg" style=" background-size: cover ">
  <table class="table table-bordered table-hover" style="background-color:rgba(190, 110, 17, 0.78);">
      <thead>
          <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Valor unitario</th>
            <th>Valor total</th>
            <th></th>
          </tr>
      </thead>
      <tbody>
      <?php foreach($this->modelCarrito->Listar($_SESSION['id']) as $r): ?>
          <tr>
              <td><?php echo $r->productoNombre; ?></td>
              <td><?php echo $r->carritoCantidad; ?></td>
              <td><?php echo $r->productoValor; ?></td>
              <td><?php echo $r->carritoCantidad * $r->productoValor; ?></td>
              <td >
                <div class="class="btn-group"">
                  <a href="?c=carrito&a=Agregar&id_pruductos=<?php echo $r->productoId; ?>" class="btn btn-primary btn-rounded" title="Modificar"><i class="glyphicon glyphicon-edit"></i></a>
                  <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=carrito&a=Eliminar&id_carrito=<?php echo $r->carritoId; ?>" class="btn btn-danger btn-rounded" title="Eliminar"><i class="glyphicon glyphicon-trash"></i></a>
                </div>
              </td>
          </tr>
      <?php endforeach; ?>
      </tbody>
  </table>
</div>
