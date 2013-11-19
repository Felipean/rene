<div class="comisiones index">
	<h2><?php echo __('Comisiones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_profesor'); ?></th>
			<th><?php echo $this->Paginator->sort('id_proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('rut'); ?></th>
			<th><?php echo $this->Paginator->sort('clave'); ?></th>
			<th><?php echo $this->Paginator->sort('edad'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($comisiones as $comisione): ?>
	<tr>
		<td><?php echo h($comisione['Comisione']['id']); ?>&nbsp;</td>
		<td><?php echo h($comisione['Comisione']['id_profesor']); ?>&nbsp;</td>
		<td><?php echo h($comisione['Comisione']['id_proyecto']); ?>&nbsp;</td>
		<td><?php echo h($comisione['Comisione']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($comisione['Comisione']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($comisione['Comisione']['rut']); ?>&nbsp;</td>
		<td><?php echo h($comisione['Comisione']['clave']); ?>&nbsp;</td>
		<td><?php echo h($comisione['Comisione']['edad']); ?>&nbsp;</td>
		<td><?php echo h($comisione['Comisione']['sexo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $comisione['Comisione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comisione['Comisione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comisione['Comisione']['id']), null, __('Are you sure you want to delete # %s?', $comisione['Comisione']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Comisione'), array('action' => 'add')); ?></li>
	</ul>
</div>
