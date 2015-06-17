<div class="page-header">
	<h1> Visitantes<small> Mantenimiento </small> </h1>
</div>
<div class="form-group">
<?= form_open('visitante/search', array('class'=>'form-inline')); ?>
	<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Cedula...', 'class'=>'form-control')); ?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="glyphicon glyphicon-search"> </i>', 'class'=>'btn')); ?>
	<?= anchor('visitante/create', 'Agregar', array('class'=>'btn btn-primary')); ?>
<?= form_close(); ?>
</div>

<table class="table table-condensed table-bordered table-hover">
	<thead>
		<tr>
			<th> ID </th>
			<th> Cedula de Identidad </th>
			<th> Nombres </th>
			<th> Apellidos </th>
			<th> Correo Electronico </th>
			<th> Telefono Celular </th>
			<th> Telefono Local </th>
                        <th> Institucion </th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td> <?= anchor('visitante/edit/'.$registro->id_visitante, $registro->id_visitante); ?> </td>
			<td> <?= $registro->cedula ?> </td>
			<td> <?= $registro->nombre ?> </td>
			<td> <?= $registro->apellido ?> </td>
			<td> <?= $registro->email ?> </td>
                        <td> <?= $registro->telefono_mov ?> </td>
                        <td> <?= $registro->telefono_loc ?> </td>
                        <td> <?= $registro->institucion ?> </td>
			
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
