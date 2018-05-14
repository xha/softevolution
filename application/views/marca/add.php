<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Marca Add</h3>
            </div>
            <?php echo form_open('marca/add'); ?>
          	<div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="descripcion" class="control-label">Descripcion</label>
                            <div class="form-group">
                                <input type="text" name="descripcion" value="<?= $this->input->post('descripcion'); ?>" class="form-control" id="descripcion" />
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