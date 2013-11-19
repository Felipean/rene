<div class="alumnos index">
	<h2><?php echo __('Alumnos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('alumnos'); ?></th>
			<th><?php echo $this->Paginator->sort('rut'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('carrera'); ?></th>
			<th><?php echo $this->Paginator->sort('clave'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($alumnos as $alumno): ?>
	<tr>
		<td><?php echo h($alumno['Alumno']['alumnos']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['rut']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['carrera']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['clave']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['sexo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alumno['Alumno']['alumnos'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alumno['Alumno']['alumnos'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alumno['Alumno']['alumnos']), null, __('Are you sure you want to delete # %s?', $alumno['Alumno']['alumnos'])); ?>
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
	</ul>
</div>
