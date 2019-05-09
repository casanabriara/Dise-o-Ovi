<html>
<body background="../img/restaurante.gif" style=" height:80%; width:100%; background-size: cover ">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall" style=" opacity: 0.7; border-radius: 7px;">
            <h1 class="text-center login-title">Ingreso al sistema</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" id="frm-login" action="?c=LoginClientes&a=AbrirSesion" method="post" enctype="multipart/form-data">

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

                <input type="text" class="form-control" id="documento" name="documento" placeholder="Documento" value="<?php echo $clientes->documento; ?>" required autofocus>
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
</html>
