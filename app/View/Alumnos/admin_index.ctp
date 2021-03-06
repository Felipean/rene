<div class="alumnos index">
	<h2><?php echo __('Alumnos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sede_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rut'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('carrera'); ?></th>
			<th><?php echo $this->Paginator->sort('clave'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('id_proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('id_sede'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($alumnos as $alumno): ?>
	<tr>
		<td><?php echo h($alumno['Alumno']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alumno['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $alumno['Proyecto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($alumno['Sede']['id'], array('controller' => 'sedes', 'action' => 'view', $alumno['Sede']['id'])); ?>
		</td>
		<td><?php echo h($alumno['Alumno']['rut']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['carrera']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['clave']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['id_proyecto']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['id_sede']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alumno['Alumno']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alumno['Alumno']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alumno['Alumno']['id']), null, __('Are you sure you want to delete # %s?', $alumno['Alumno']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Alumno'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
