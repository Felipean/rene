<div class="sedes view">
<h2><?php echo __('Sede'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sede['Sede']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sede'); ?></dt>
		<dd>
			<?php echo h($sede['Sede']['sede']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($sede['Sede']['direccion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sede'), array('action' => 'edit', $sede['Sede']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sede'), array('action' => 'delete', $sede['Sede']['id']), null, __('Are you sure you want to delete # %s?', $sede['Sede']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('action' => 'add')); ?> </li>
	</ul>
</div>
