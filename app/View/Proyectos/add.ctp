<div class="proyectos form">
<?php echo $this->Form->create('Proyecto'); ?>
	<fieldset>
		<legend><?php echo __('Add Proyecto'); ?></legend>
	<?php
		echo $this->Form->input('proyecto');
		echo $this->Form->input('alumno');
		echo $this->Form->input('rut');
		echo $this->Form->input('titulo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proyectos'), array('action' => 'index')); ?></li>
	</ul>
</div>
