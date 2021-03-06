<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usuario Add</h3>
            </div>
            <?php echo form_open('usuario/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
                            <div class="col-md-6">
                                    <label for="nombre" class="control-label">Usuario</label>
                                    <div class="form-group">
                                            <input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <label for="clave" class="control-label">Clave</label>
                                    <div class="form-group">
                                            <input type="password" name="clave" value="<?php echo $this->input->post('clave'); ?>" class="form-control" id="clave" />
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <label for="id_rol" class="control-label">Rol</label>
                                    <div class="form-group">
                                        <select name="id_rol" value="<?php //echo $this->input->post('id_rol'); ?>" class="form-control" id="id_rol">
                                        <?php 
                                            $items = json_decode($roles, TRUE);
                                            for ($i=0;$i<count($items);$i++) {
                                                echo '<option value="'.$items[$i]['id_rol'].'">'.$items[$i]['descripcion'].'</option>';
                                            }
                                        ?>
                                        </select>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <label for="activo" class="control-label">Activo</label>
                                    <div class="form-group">
                                        <select name="activo" value="<?= $this->input->post('activo'); ?>" class="form-control" id="activo">
                                            <option value="1">SI</option>
                                            <option value="0">NO</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                </div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-primary">
                    <i class="fa fa-check"></i> Crear
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>