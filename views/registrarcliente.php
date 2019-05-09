<div class="container " role="main">
  <div class="page-header">
       <h1>Agregar Cliente</h1>
  </div>
  <p>
    Usuario no registrado, ingrese sus datos para que quede registrado dentro de nuestro sistema y poder brindarle un mejor servicio
  </p>
  <form class="form-horizontal" role="form" id="frm-documentos" action="?c=Loginclientes&a=Guardar" method="post" enctype="multipart/form-data">
    <?php
    if(isset($err_msgs))
    {
      echo "<div class='alert alert-warning' role='alert'>";
      foreach ($err_msgs as $mensage) {
          echo "$mensage <br>";
          }

        echo "</div>";
      }
      ?>
    <input type="hidden" id="id_cliente" name="id_cliente" value="<?php echo $clientes->id_cliente; ?>" />
    <div class="form-group">
      <label for="nombre" class="col-lg-2 control-label">Nombres</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $clientes->nombres; ?>" required/>
      </div>
    </div>
    <div class="form-group">
      <label for="apellido" class="col-lg-2 control-label">Apellidos</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $clientes->apellidos; ?>" required/>
      </div>
    </div>

    <div class="form-group">
      <label for="identificador" class="col-lg-2 control-label">Número de documento</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="documento" name="documento" value="<?php echo $clientes->documento; ?>" required/>
      </div>
    </div>
    <div class="form-group">
      <label for="celular" class="col-lg-2 control-label">Número de celular</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $clientes->celular; ?>" />
      </div>
    </div>
    <div class="form-group">
      <label for="correo" class="col-lg-2 control-label">correo</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $clientes->correo; ?>" />
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
  </form

</div>
