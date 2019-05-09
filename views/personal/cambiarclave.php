<div class="container " role="main">
  <div class="page-header">
       <h1>Cambiar contraseña</h1>
  </div>
  <form class="form-horizontal" role="form" id="frm-usuarios" action="?c=Personal&a=GuardarClave" method="post" enctype="multipart/form-data">
    <input type="hidden" id="id_personal" name="id_personal value="<?php echo $personal->id_personal; ?>" />
    <div class="form-group">
      <label for="nombres" class="col-lg-2 control-label">Nombres</label>
      <div class="col-lg-10">
        <span><?php echo $personal->nombres; ?></span>
      </div>
    </div>
    <div class="form-group">
      <label for="apellido" class="col-lg-2 control-label">Apellidos</label>
      <div class="col-lg-10">
        <span><?php echo $personal->apellidos; ?></span>
      </div>
    </div>

    <div class="form-group">
      <label for="usuario" class="col-lg-2 control-label">Nombre de usuario</label>
      <div class="col-lg-10">
        <span><?php echo $personal->usuario; ?></span>
      </div>
    </div>
    <div class="form-group">
      <label for="contrasena" class="col-lg-2 control-label">Nueva contraseña</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="contrasena" name="contrasena" required />
      </div>
    </div>
    <div class="form-group">
      <label for="clave2" class="col-lg-2 control-label">Repita la contraseña</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="clave2" name="clave2" required/>
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
<script>
  var password = document.getElementById("clave")
    , confirm_password = document.getElementById("clave2");

  function validatePassword(){
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Contraseña y confirme contraseña no coinciden");
    } else {
      confirm_password.setCustomValidity('');
    }
  }

  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
    $(document).ready(function(){
        $("#frm-login").submit(function(){
            return $(this).validate();
        });
    })
</script>
