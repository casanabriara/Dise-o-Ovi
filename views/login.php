  <html>
  <body background="../platosimg/fonfo3.jpg" style="background-size: cover ">
  <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall" style=" opacity: 0.7; border-radius: 7px;">
            <h1 class="text-center login-title">Ingreso al sistema</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" id="frm-login" action="?c=Login&a=AbrirSesion" method="post" enctype="multipart/form-data">

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

                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" value="<?php echo $personal->usuario; ?>" required autofocus>
                <input type="password" class="form-control" placeholder="Password" name="contrasena" id="contrasena" required>
                <button class="btn btn-lg btn-success btn-block" type="submit">
                    Ingresar</button>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#frm-login").submit(function(){
            return $(this).validate();
        });
    })
</script>
