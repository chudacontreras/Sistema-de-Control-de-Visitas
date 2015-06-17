<?= form_open('departamentos/update', array('class'=>'form-horizontal')); ?>
	<legend> Actualizar Departamento </legend>

	<?= my_validation_errors(validation_errors()); ?>
            
        <div class="form-group">
        <?= form_label('ID', 'id_departamento', array('class'=>'col-sm-2 control-label')); ?>
                <fieldset disabled>
                    <div class="col-sm-3">
        <?= form_input(array('class'=>'form-control', 'type'=>'text', 'id'=>'disabledTextInput', 'placeholder'=>$registro->id_departamento));?>      
                    </div>  
                </fieldset>
        <?= form_hidden('id_departamento', $registro->id_departamento); ?>
        </div>
        

	<div class="form-group">
		<?= form_label('Nombre', 'nombre', array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-5">
		<?= form_input(array('class'=>'form-control','type'=>'text', 'name'=>'nombre', 'id'=>'nombre', 'value'=>$registro->nombre)); ?>
            </div>                   
	</div>


	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		<?= anchor('departamentos/index', 'Cancelar', array('class'=>'btn btn-default')); ?>
		<?= anchor('departamentos/delete/'.$registro->id_departamento, 'Eliminar', array('class'=>'btn btn-warning', 'onClick'=>"return confirm('¿Está Seguro?')")); ?>
	</div>
<?= form_close(); ?>

