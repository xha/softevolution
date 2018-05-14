<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Categoria Edit</h3>
            </div>
                <?php echo form_open('categoria/edit/'.$categoria['id_categoria']); ?>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="descripcion" class="control-label">Descripcion</label>
                            <div class="form-group">
                                <input type="text" name="descripcion" value="<?= ($this->input->post('descripcion') ? $this->input->post('descripcion') : $categoria['descripcion']); ?>" class="form-control" id="descripcion" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="activo" class="control-label">Activo</label>
                            <div class="form-group">
                                <select name="activo" value="<?php echo ($this->input->post('activo') ? $this->input->post('activo') : $categoria['activo']); ?>" class="form-control" id="activo">
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
            	<button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i> Actualizar
                </button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>