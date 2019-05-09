<div class="container" role="main">
  <div class="page-header">
       <h1>Modificar usuario</h1>
   </div>
  <form class="form-horizontal" role="form" id="frm-usuarios" action="?c=Cargo&a=Guardar" method="post" enctype="multipart/form-data">
  <input type="hidden" id="id_cargo" name="id_cargo" value="<?php echo $cargo->id_cargo; ?>">
    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Nombres</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $cargo->nombre; ?>">
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
  </form>
</div>
