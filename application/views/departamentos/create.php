
<?= form_open('departamentos/insert', array('class'=>'form-horizontal')); ?>
	<legend> Crear Departamentos </legend>

	<?= my_validation_errors(validation_errors()); ?>

	<div class="form-group">
		<?= form_label('Nombre', 'nombre', array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-5">
		<?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'nombre', 'id'=>'exampleInputName2', 'value'=>set_value('nombre'))); ?>
            </div>
	</div>

	<div class="form-group">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		<?= anchor('departamentos/index', 'Cancelar', array('class'=>'btn btn-danger')); ?>
	</div>
<?= form_close(); ?>

