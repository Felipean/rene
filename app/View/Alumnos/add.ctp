<div class="alumnos form">
<?php echo $this->Form->create('Alumno'); ?>
	<fieldset>
		<legend><?php echo __('Add Alumno'); ?></legend>
	<?php
		echo $this->Form->input('rut');
		echo $this->Form->input('apellido');
		echo $this->Form->input('nombre');
		echo $this->Form->input('carrera');
		echo $this->Form->input('clave');
		echo $this->Form->input('sexo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Alumnos'), array('action' => 'index')); ?></li>
	</ul>
</div>
