<div class="seguimientos form">
<?php echo $this->Form->create('Seguimiento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Seguimiento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('proyecto_id');
		echo $this->Form->input('sede');
		echo $this->Form->input('curso');
		echo $this->Form->input('proyecto');
		echo $this->Form->input('alumno');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Seguimiento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Seguimiento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Seguimientos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
