<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Producto Listing</h3>
            	<div class="box-tools">
                    <a class="btn btn-primary" href="<?php echo site_url('producto/add'); ?>"><i class="fa fa-plus"></i> Agregar Nuevo</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id Producto</th>
                        <th>Descripcion</th>
                        <th>Cantidad</th>
                        <th>Costo</th>
                        <th>Categoria</th>
                        <th>Marca</th>
                        <th>Activo</th>
                        <th>Fecha Creacion</th>
                        <th>Opción</th>
                    </tr>
                    <?php foreach($producto as $p){ ?>
                    <tr>
                        <td><?php echo $p['id_producto']; ?></td>
                        <td><?php echo $p['descripcion']; ?></td>
                        <td><?php echo $p['cantidad']; ?></td>
                        <td><?php echo $p['costo']; ?></td>
                        <td><?php echo $p['id_categoria']; ?></td>
                        <td><?php echo $p['id_marca']; ?></td>
                        <td><?php echo $p['activo']; ?></td>
                        <td><?php echo $p['fecha_creacion']; ?></td>
                        <td>
                            <a href="<?php echo site_url('producto/edit/'.$p['id_producto']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?php echo site_url('producto/remove/'.$p['id_producto']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Desactivar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
