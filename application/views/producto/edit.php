<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Producto Edit</h3>
            </div>
			<?php echo form_open('producto/edit/'.$producto['id_producto']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="descripcion" class="control-label">Descripcion</label>
						<div class="form-group">
							<input type="text" name="descripcion" value="<?php echo ($this->input->post('descripcion') ? $this->input->post('descripcion') : $producto['descripcion']); ?>" class="form-control" id="descripcion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cantidad" class="control-label">Cantidad</label>
						<div class="form-group">
							<input type="text" name="cantidad" value="<?php echo ($this->input->post('cantidad') ? $this->input->post('cantidad') : $producto['cantidad']); ?>" class="form-control" id="cantidad" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="costo" class="control-label">Costo</label>
						<div class="form-group">
							<input type="text" name="costo" value="<?php echo ($this->input->post('costo') ? $this->input->post('costo') : $producto['costo']); ?>" class="form-control" id="costo" />
						</div>
					</div>
					<div class="col-md-6">
                                                <label for="id_categoria" class="control-label">Categoria</label>
                                                <div class="form-group">
                                                    <select name="id_categoria" value="<?php echo $this->input->post('id_categoria'); ?>" class="form-control" id="id_categoria">
                                                    <?php 
                                                        $items = json_decode($categorias, TRUE);
                                                        for ($i=0;$i<count($items);$i++) {
                                                            echo '<option value="'.$items[$i]['id_categoria'].'">'.$items[$i]['descripcion'].'</option>';
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <label for="id_marca" class="control-label">Marca</label>
                                                <div class="form-group">
                                                    <select name="id_marca" value="<?php echo $this->input->post('id_marca'); ?>" class="form-control" id="id_marca">
                                                    <?php 
                                                        $items = json_decode($marcas, TRUE);
                                                        for ($i=0;$i<count($items);$i++) {
                                                            echo '<option value="'.$items[$i]['id_marca'].'">'.$items[$i]['descripcion'].'</option>';
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                        </div>
					<div class="col-md-6">
						<label for="activo" class="control-label">Activo</label>
						<div class="form-group">
                                                    <select name="activo" value="<?php echo ($this->input->post('activo') ? $this->input->post('activo') : $producto['activo']); ?>" class="form-control" id="activo">
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