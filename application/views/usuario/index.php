<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Usuario Listing</h3>
            	<div class="box-tools">
                    <a class="btn btn-primary" href="<?php echo site_url('usuario/add'); ?>"><i class="fa fa-plus"></i> Agregar Nuevo</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id Usuario</th>
                        <th>Nombre</th>
                        <th>Id Rol</th>
                        <th>Activo</th>
                        <th>Fecha Creacion</th>
                        <th>Opción</th>
                    </tr>
                    <?php foreach($usuario as $u){ ?>
                    <tr>
                        <td><?php echo $u['id_usuario']; ?></td>
                        <td><?php echo $u['nombre']; ?></td>
                        <td><?php echo $u['id_rol']; ?></td>
                        <td><?php echo $u['activo']; ?></td>
                        <td><?php echo $u['fecha_creacion']; ?></td>
                        
                        <td>
                            <a href="<?php echo site_url('usuario/edit/'.$u['id_usuario']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?php echo site_url('usuario/remove/'.$u['id_usuario']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Desactivar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
