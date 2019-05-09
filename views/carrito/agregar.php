
<div class="container" role="main">
  <div class="page-header">
       <h1>Agregar al carrito</h1>
   </div>
  <form class="form-horizontal" role="form" id="frm-carrito" action="?c=carrito&a=Guardar" method="post" enctype="multipart/form-data">
  <input type="hidden" id="id_pruductos" name="id_pruductos" value="<?php echo $producto->id_pruductos; ?>">
    <div class="form-group">
      <div class='thumbnail' style='height:500px;'>
        <img src='../platosimg/<?php echo $producto->ruta_imagen; ?>'style='height:170px; width:250px;'>
        <div class='caption'>
          <h3><?php echo $producto->nombre; ?><small class='text-right'><br>$<?php echo $producto->valor_producto; ?> Pesos</small></h3>
          <p><?php echo $producto->descripcion; ?></p>
            <ul>
              <li><?php echo $producto->descripcion1; ?></li>
              <li><?php echo $producto->descripcion2; ?></li>
              <li><?php echo $producto->descripcion3; ?></li>
            </ul>
        </div>
        <div class="form-group">
          <label for="cantidad" class="col-lg-2 control-label">Cantidad</label>
          <div class="col-lg-10">
            <select name='cantidad' class='control-select form-control' >
            <option value=''>seleccionar</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3 </option>
            <option value='4'>4 </option>
            <option value='5'>5 </option>
            <option value='6'>6 </option>
            <option value='7'>7 </option>
            <option value='8'>8 </option>
            <option value='9'>9 </option>
            <option value='10'>10 </option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <div class="btn-group">
              <button type="submit" class="btn btn-lg btn-success"><i class="glyphicon glyphicon-floppy-disk"></i> Guardar</button>
              <button type="button" id="cancelButton" class="btn btn-lg btn-default" onclick="window.history.back();"><i class="glyphicon  glyphicon-arrow-left"></i> Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </form>
</div>
