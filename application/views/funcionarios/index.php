<div class="page-header">
	<h1> Funcionarios<small> Mantenimiento </small> </h1>
</div>

<?= form_open('funcionarios/search', array('class'=>'form-search')); ?>
	<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Cedula...', 'class'=>'input-medium search-query')); ?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="glyphicon glyphicon-search"> </i>', 'class'=>'btn')); ?>
	<?= anchor('funcionarios/create', 'Agregar', array('class'=>'btn btn-primary')); ?>
<?= form_close(); ?>

<table class="table table-condensed table-bordered">
	<thead>
		<tr>
			<th> ID </th>
			<th> Cedula de Identidad </th>
			<th> Nombres y Apellidos </th>
                        <th> Departamento </th>
                       
                        
			
		</tr>
	</thead>

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td> <?= anchor('funcionarios/edit/'.$registro->id_funcionario, $registro->id_funcionario); ?> </td>
			<td> <?= $registro->cedula ?> </td>
			<td> <?= $registro->nombre ?> </td>
                        <td> <?= $registro->departamentos_nombre ?> </td>
			
			
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
