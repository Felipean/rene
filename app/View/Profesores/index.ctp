<div class="profesores index">
	<h2><?php echo __('Profesores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sede_id'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('rut'); ?></th>
			<th><?php echo $this->Paginator->sort('clave'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('edad'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($profesores as $profesore): ?>
	<tr>
		<td><?php echo h($profesore['Profesore']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($profesore['Sede']['id'], array('controller' => 'sedes', 'action' => 'view', $profesore['Sede']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($profesore['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $profesore['Proyecto']['id'])); ?>
		</td>
		<td><?php echo h($profesore['Profesore']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($profesore['Profesore']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($profesore['Profesore']['rut']); ?>&nbsp;</td>
		<td><?php echo h($profesore['Profesore']['clave']); ?>&nbsp;</td>
		<td><?php echo h($profesore['Profesore']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($profesore['Profesore']['edad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $profesore['Profesore']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $profesore['Profesore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $profesore['Profesore']['id']), null, __('Are you sure you want to delete # %s?', $profesore['Profesore']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Profesore'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
