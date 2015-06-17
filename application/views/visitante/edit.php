<?= form_open('visitante/update', array('class'=>'form-horizontal')); ?>
    <legend> Actualizar Visitante </legend>

    <?= my_validation_errors(validation_errors()); ?>

    <div class="form-group">
        <?= form_label('ID', 'id_visitante', array('class'=>'col-sm-3 control-label', 'id'=>'disabledTextInput',)); ?>
        <fieldset disabled>
                    <div class="col-sm-2">
        <?= form_input(array('class'=>'form-control', 'type'=>'text', 'id'=>'disabledTextInput', 'placeholder'=>$registro->id_visitante));?>      
                    </div>  
                </fieldset>
        <?= form_hidden('id_visitante', $registro->id_visitante); ?>
        
    </div>

    <div class="form-group">
        <?= form_label('Cedula de Identidad', 'cedula', array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control','type'=>'text', 'name'=>'cedula', 'id'=>'cedula', 'value'=>$registro->cedula)); ?>
        </div>
    </div>
    
     <div class="form-group">
        <?= form_label('Nombres', 'nombre', array('class'=>'col-sm-3 control-label')); ?>
         <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'nombre', 'id'=>'nombre', 'value'=>$registro->nombre)); ?>
         </div>
    </div>
    
     <div class="form-group">
        <?= form_label('Apellidos', 'apellido', array('class'=>'col-sm-3 control-label')); ?>
         <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control','type'=>'text', 'name'=>'apellido', 'id'=>'apellido', 'value'=>$registro->apellido)); ?>
         </div>
    </div>
    
     <div class="form-group">
        <?= form_label('Correo Electronico', 'email', array('class'=>'col-sm-3 control-label')); ?>
         <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control','type'=>'email', 'name'=>'email', 'id'=>'email', 'value'=>$registro->email)); ?>
         </div>
    </div>
    
     <div class="form-group">
        <?= form_label('Telefono Celular', 'telefono_mov', array('class'=>'col-sm-3 control-label')); ?>
         <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control','type'=>'text', 'name'=>'telefono_mov', 'id'=>'telefono_mov', 'value'=>$registro->telefono_mov)); ?>
         </div>
    </div>
    
     <div class="form-group">
        <?= form_label('Telefono Local', 'telefono_loc', array('class'=>'col-sm-3 control-label')); ?>
         <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control','type'=>'text', 'name'=>'telefono_loc', 'id'=>'telefono_loc', 'value'=>$registro->telefono_loc)); ?>
         </div>
    </div>
    
     <div class="form-group">
        <?= form_label('Institucion', 'institucion', array('class'=>'col-sm-3 control-label')); ?>
         <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control','type'=>'text', 'name'=>'institucion', 'id'=>'institucion', 'value'=>$registro->institucion)); ?>
         </div>
    </div>

   

    <div class="form-actions">
        <?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
        <?= anchor('visitante/index', 'Cancelar', array('class'=>'btn btn-default')); ?>
        <?= anchor('visitante/delete/'.$registro->id_visitante, 'Eliminar', array('class'=>'btn btn-warning', 'onClick'=>"return confirm('¿Está Seguro?')")); ?>
    </div>
<?= form_close(); ?>

