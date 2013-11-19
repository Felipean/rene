<div class="evaluaciones index">
	<h2><?php echo __('Evaluaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_proyeto'); ?></th>
			<th><?php echo $this->Paginator->sort('nota'); ?></th>
			<th><?php echo $this->Paginator->sort('profesor 1'); ?></th>
			<th><?php echo $this->Paginator->sort('profesor 2'); ?></th>
			<th><?php echo $this->Paginator->sort('profesor 3'); ?></th>
			<th><?php echo $this->Paginator->sort('observacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($evaluaciones as $evaluacione): ?>
	<tr>
		<td><?php echo h($evaluacione['Evaluacione']['id']); ?>&nbsp;</td>
		<td><?php echo h($evaluacione['Evaluacione']['id_proyeto']); ?>&nbsp;</td>
		<td><?php echo h($evaluacione['Evaluacione']['nota']); ?>&nbsp;</td>
		<td><?php echo h($evaluacione['Evaluacione']['profesor 1']); ?>&nbsp;</td>
		<td><?php echo h($evaluacione['Evaluacione']['profesor 2']); ?>&nbsp;</td>
		<td><?php echo h($evaluacione['Evaluacione']['profesor 3']); ?>&nbsp;</td>
		<td><?php echo h($evaluacione['Evaluacione']['observacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $evaluacione['Evaluacione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $evaluacione['Evaluacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $evaluacione['Evaluacione']['id']), null, __('Are you sure you want to delete # %s?', $evaluacione['Evaluacione']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Evaluacione'), array('action' => 'add')); ?></li>
	</ul>
</div>
