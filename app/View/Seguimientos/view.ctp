<div class="seguimientos view">
<h2><?php echo __('Seguimiento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sede'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['sede']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['curso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>
			<?php echo h($seguimiento['Seguimiento']['alumno']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seguimiento'), array('action' => 'edit', $seguimiento['Seguimiento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seguimiento'), array('action' => 'delete', $seguimiento['Seguimiento']['id']), null, __('Are you sure you want to delete # %s?', $seguimiento['Seguimiento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seguimientos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seguimiento'), array('action' => 'add')); ?> </li>
	</ul>
</div>
