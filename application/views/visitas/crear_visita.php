<?= form_open('visitas/insert', array('class'=>'form-horizontal')); ?>
    <legend> Crear Visita</legend>

    <?= my_validation_errors(validation_errors()); ?>

    <div class="form-group">
        <p><?= form_label('Cedula de Identidad', 'cedula', array('class'=>'col-sm-3 control-label')); ?>
            <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'cedula', 'id'=>'cedula', 'value'=>set_value('cedula'))); ?>
            </div>
    </div>

    <div class="form-group">
        <p><?= form_label('Nombres', 'nombre', array('class'=>'col-sm-3 control-label')); ?>
            <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'nombre', 'id'=>'nombre', 'value'=>set_value('nombre'))); ?>
            </div>
    </div>

    <div class="form-group">
        <?= form_label('Apellidos', 'apellido', array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'apellido', 'id'=>'apellido', 'value'=>set_value('apellido'))); ?>
        </div>
    </div>
    
    <div class="form-group">
        <?= form_label('Correo Electronico', 'email', array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control','type'=>'email', 'name'=>'email', 'id'=>'email', 'value'=>set_value('email'))); ?>
        </div>
    </div>
    
     <div class="form-group">
        <?= form_label('Telefono Celular', 'telefono_mov', array('class'=>'col-sm-3 control-label')); ?>
         <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'telefono_mov', 'id'=>'telefono_mov', 'value'=>set_value('telefono_mov'))); ?>
         </div>
    </div>
    
    <div class="form-group">
        <?= form_label('Telefono Local', 'telefono_loc', array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'telefono_loc', 'id'=>'telefono_loc', 'value'=>set_value('telefono_loc'))); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Institucion de Procedencia', 'institucion', array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'institucion', 'id'=>'institucion', 'value'=>set_value('institucion'))); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
        <?= anchor('visitante/index', 'Cancelar', array('class'=>'btn btn-default')); ?>
    </div>
<?= form_close(); ?>
