<div class="sedes index">
	<h2><?php echo __('Sedes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sede'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sedes as $sede): ?>
	<tr>
		<td><?php echo h($sede['Sede']['id']); ?>&nbsp;</td>
		<td><?php echo h($sede['Sede']['sede']); ?>&nbsp;</td>
		<td><?php echo h($sede['Sede']['direccion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sede['Sede']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sede['Sede']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sede['Sede']['id']), null, __('Are you sure you want to delete # %s?', $sede['Sede']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sede'), array('action' => 'add')); ?></li>
	</ul>
</div>
