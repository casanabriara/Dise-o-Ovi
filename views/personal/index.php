<div class="container " role="main">
<h1 class="page-header">Personal</h1>


<div clas="row">
  <div class="col-md12"><a class="btn btn-primary" href="?c=Personal&a=Nuevo"><i class="glyphicon glyphicon-plus"></i> Nuevo usuario</a></div>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
            <th>Apellido</th>
            <th>Identificador</th>
            <th>Rol</th>
            <th style="width:150px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombres; ?></td>
            <td><?php echo $r->apellidos; ?></td>
            <td><?php echo $r->usuario; ?></td>
            <td><?php echo $r->rol == 1 ? 'Administrador' : 'Operario'; ?></td>
            <td class="btn-group">
                <a href="?c=Personal&a=Detalle&id_personal=<?php echo $r->id_personal; ?>" class="btn btn-primary btn-rounded" title="Modificar"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="?c=Personal&a=CambiarClave&id_personal=<?php echo $r->id_personal; ?>" class="btn btn-default btn-rounded" title="Cambiar contraseña"><i class="glyphicon glyphicon-lock"></i></a>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Personal&a=Eliminar&id_personal=<?php echo $r->id_personal; ?>" class="btn btn-danger btn-rounded" title="Eliminar"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
