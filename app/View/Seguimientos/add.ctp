<div class="seguimientos form">
<?php echo $this->Form->create('Seguimiento'); ?>
	<fieldset>
		<legend><?php echo __('Add Seguimiento'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Seguimientos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
