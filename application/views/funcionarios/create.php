<?= form_open('funcionarios/insert', array('class'=>'form-horizontal')); ?>
    <legend> Crear funcionario </legend>

    <?= my_validation_errors(validation_errors()); ?>

    <div class="form-group">
        <p><?= form_label('Cedula de Identidad', 'cedula', array('class'=>'col-sm-3 control-label')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'cedula', 'id'=>'cedula', 'value'=>set_value('cedula'))); ?></p>
    </div>

    <div class="form-group">
        <p><?= form_label('Nombres y Apellidos', 'nombre', array('class'=>'col-sm-3 control-label')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'nombre', 'id'=>'nombre', 'value'=>set_value('nombre'))); ?></p>
    </div>
    
    <div class="control-group">
        <?= form_label('Departamentos', 'id_departamento', array('class'=>'control-label')); ?>
        <?= form_dropdown('id_departamento', $departamento, 0); ?>
    </div>



    <div class="form-actions">
        <?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
        <?= anchor('funcionarios/index', 'Cancelar', array('class'=>'btn')); ?>
    </div>
<?= form_close(); ?>

