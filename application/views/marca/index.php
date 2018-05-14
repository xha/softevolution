<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Marca Listing</h3>
            	<div class="box-tools">
                    <a class="btn btn-primary" href="<?php echo site_url('marca/add'); ?>"><i class="fa fa-plus"></i> Agregar Nuevo</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id Marca</th>
                        <th>Descripcion</th>
                        <th>Activo</th>
                        <th>Opción</th>
                    </tr>
                    <?php foreach($marca as $m){ ?>
                    <tr>
                        <td><?php echo $m['id_marca']; ?></td>
                        <td><?php echo $m['descripcion']; ?></td>
                        <td><?php echo $m['activo']; ?></td>
                        <td>
                            <a href="<?php echo site_url('marca/edit/'.$m['id_marca']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?php echo site_url('marca/remove/'.$m['id_marca']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Desactivar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
