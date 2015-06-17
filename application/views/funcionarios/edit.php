<?= form_open('funcionarios/update', array('class'=>'form-horizontal')); ?>
    <legend> Actualizar Registro </legend>

    <?= my_validation_errors(validation_errors()); ?>

    <div class="form-group">
        <?= form_label('ID', 'id_funcionario', array('class'=>'col-sm-3 control-label', 'id'=>'disabledTextInput',)); ?>
        <?= form_input(array('type'=>'text', 'id'=>'disabledTextInput', 'placeholder'=>$registro->id_funcionario));?> 
        <?= form_hidden('id_funcionario', $registro->id_funcionario); ?>
        
    </div>

    <div class="form-group">
        <?= form_label('Cedula de Identidad', 'cedula', array('class'=>'col-sm-3 control-label')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'cedula', 'id'=>'cedula', 'value'=>$registro->cedula)); ?>
    </div>
    
     <div class="form-group">
        <?= form_label('Nombres y Apellidos', 'nombre', array('class'=>'col-sm-3 control-label')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'nombre', 'id'=>'nombre', 'value'=>$registro->nombre)); ?>
    </div>
    
    <div class="control-group">
        <?= form_label('Departamento', 'id_departamento', array('class'=>'control-label')); ?>
        <?= form_dropdown('id_departamento', $departamento, $registro->id_departamento); ?>
    </div>
    


   

    <div class="form-actions">
        <?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
        <?= anchor('funcionarios/index', 'Cancelar', array('class'=>'btn')); ?>
        <?= anchor('funcionarios/delete/'.$registro->id_funcionario, 'Eliminar', array('class'=>'btn btn-warning', 'onClick'=>"return confirm('¿Está Seguro?')")); ?>
    </div>
<?= form_close(); ?>

