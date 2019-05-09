<div class="container " role="main">
<h1 class="page-header">Cargos</h1>


<div clas="row">
  <div class="col-md12"><a class="btn btn-primary" href="?c=Cargo&a=Nuevo"><i class="glyphicon glyphicon-plus"></i> Nuevo Cargo</a></div>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
            <th style="width:150px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td class="btn-group">
                <a href="?c=Cargo&a=Detalle&id_cargo=<?php echo $r->id_cargo; ?>" class="btn btn-primary btn-rounded" title="Modificar"><i class="glyphicon glyphicon-edit"></i></a>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Cargo&a=Eliminar&id_cargo=<?php echo $r->id_cargo; ?>" class="btn btn-danger btn-rounded" title="Eliminar"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
