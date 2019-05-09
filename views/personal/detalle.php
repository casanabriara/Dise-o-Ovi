<div class="container" role="main">
  <div class="page-header">
       <h1>Modificar usuario</h1>
   </div>
  <form class="form-horizontal" role="form" id="frm-usuarios" action="?c=Personal&a=Guardar" method="post" enctype="multipart/form-data">
  <input type="hidden" id="id_personal" name="id_personal" value="<?php echo $personal->id_personal; ?>">
    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Nombres</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $personal->nombres; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="apellidos" class="col-lg-2 control-label">Apellidos</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $personal->apellidos; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="usuario" class="col-lg-2 control-label">Nombre de usuario</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $personal->usuario; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="rol" class="col-lg-2 control-label">Rol</label>
      <div class="col-lg-10">
        <select name="rol" id="rol" class="form-control">
              <option  value="">Seleccione ...</option>
              <option <?php echo $personal->rol == 1 ? 'selected' : ''; ?> value="1">Administrador</option>
              <option <?php echo $personal->rol == 2 ? 'selected' : ''; ?> value="2">Operario</option>
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
  </form>
</div>
