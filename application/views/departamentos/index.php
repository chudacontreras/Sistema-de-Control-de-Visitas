<div class="page-header">
	<h1> Departamentos <small> mantenimiento de registros </small> </h1>
</div>
<div class="form-group">
<?= form_open('departamentos/search', array('class'=>'form-inline')); ?>
	<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'exampleInputName2', 'placeholder'=>'Buscar por nombre...', 'class'=>'form-control')); ?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="glyphicon glyphicon-search"> </i>', 'class'=>'btn')); ?>
	<?= anchor('departamentos/create', 'Agregar', array('class'=>'btn btn-primary')); ?>
<?= form_close(); ?>
</div>   

<table class="table table-condensed table-bordered table-hover">
	<thead>
		<tr>
			<th> ID </th>
			<th> Nombre del Departamento </th>
			
		</tr>
	</thead>

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td> <?= anchor('departamentos/edit/'.$registro->id_departamento, $registro->id_departamento); ?> </td>
                        <td> <?= $registro->nombre ?> </td>
			
			
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
