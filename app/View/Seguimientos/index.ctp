<div class="seguimientos index">
	<h2><?php echo __('Seguimientos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sede'); ?></th>
			<th><?php echo $this->Paginator->sort('curso'); ?></th>
			<th><?php echo $this->Paginator->sort('proyecto'); ?></th>
			<th><?php echo $this->Paginator->sort('alumno'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seguimientos as $seguimiento): ?>
	<tr>
		<td><?php echo h($seguimiento['Seguimiento']['id']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['sede']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['curso']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['proyecto']); ?>&nbsp;</td>
		<td><?php echo h($seguimiento['Seguimiento']['alumno']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $seguimiento['Seguimiento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $seguimiento['Seguimiento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $seguimiento['Seguimiento']['id']), null, __('Are you sure you want to delete # %s?', $seguimiento['Seguimiento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Seguimiento'), array('action' => 'add')); ?></li>
	</ul>
</div>