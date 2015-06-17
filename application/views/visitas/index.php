<div class="page-header">
	<h1> Visitantes en la Institucion </h1>
</div>
<div class="form-group">
<?= form_open('visitas/search', array('class'=>'form-inline')); ?>
	<?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por nombre...')); ?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="glyphicon glyphicon-search"> </i>', 'class'=>'btn')); ?>
	<?= anchor('visitas/crear', 'Agregar', array('class'=>'btn btn-primary')); ?>
<?= form_close(); ?>
</div>

<table class="table table-condensed table-bordered table-hover">
	<thead>
		<tr>
			<th> ID Visitante </th>
			<th> Nombre </th>
			<th> Apellidos </th>
			<th> Telefono </th>
			<th> Motivo de la Visita </th>
			<th> Nombre del Funcionario a quien visita </th>
			<th> Deparatamento </th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td> <?= anchor('visitas/edit/'.$registro->id_visita, $registro->id_visita); ?> </td>
			<td> <?= $registro->visitante_nombre ?> </td>
			<td> <?= $registro->visitante_apellido ?> </td>
                        <td> <?= $registro->visitante_telefono ?>  </td>
                        <td>  <?= $registro->motivo_visita ?></td>
                        <td> <?= $registro->funcionario_nombre ?> </td>
                        <td> <?= $registro->departamentos_nombre ?> </td>
			
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>