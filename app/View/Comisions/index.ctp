<div class="comisions index">
	<h2><?php echo __('Comisions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_comision'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('rut'); ?></th>
			<th><?php echo $this->Paginator->sort('clave'); ?></th>
			<th><?php echo $this->Paginator->sort('edad'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($comisions as $comision): ?>
	<tr>
		<td><?php echo h($comision['Comision']['id_comision']); ?>&nbsp;</td>
		<td><?php echo h($comision['Comision']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($comision['Comision']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($comision['Comision']['rut']); ?>&nbsp;</td>
		<td><?php echo h($comision['Comision']['clave']); ?>&nbsp;</td>
		<td><?php echo h($comision['Comision']['edad']); ?>&nbsp;</td>
		<td><?php echo h($comision['Comision']['sexo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $comision['Comision']['id_comision'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comision['Comision']['id_comision'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comision['Comision']['id_comision']), null, __('Are you sure you want to delete # %s?', $comision['Comision']['id_comision'])); ?>
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
		<li><?php echo $this->Html->link(__('New Comision'), array('action' => 'add')); ?></li>
	</ul>
</div>
