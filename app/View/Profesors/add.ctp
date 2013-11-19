<div class="profesors form">
<?php echo $this->Form->create('Profesor'); ?>
	<fieldset>
		<legend><?php echo __('Add Profesor'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('rut');
		echo $this->Form->input('clave');
		echo $this->Form->input('sexo');
		echo $this->Form->input('edad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Profesors'), array('action' => 'index')); ?></li>
	</ul>
</div>
