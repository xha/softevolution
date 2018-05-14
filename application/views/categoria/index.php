<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Categor&iacute;as</h3>
            	<div class="box-tools">
                    <a class="btn btn-primary" href="<?php echo site_url('categoria/add'); ?>"><i class="fa fa-plus"></i> Agregar Nuevo</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id Categoria</th>
                        <th>Descripcion</th>
                        <th>Activo</th>
                        <th>Opción</th>
                    </tr>
                    <?php foreach($categoria as $c){ ?>
                    <tr>
                        <td><?php echo $c['id_categoria']; ?></td>
                        <td><?php echo $c['descripcion']; ?></td>
                        <td><?php echo $c['activo']; ?></td>
                        <td>
                            <a href="<?php echo site_url('categoria/edit/'.$c['id_categoria']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?php echo site_url('categoria/remove/'.$c['id_categoria']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Desactivar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
