<div class="alumnos form">
<?php echo $this->Form->create('Alumno'); ?>
	<fieldset>
		<legend><?php echo __('Edit Alumno'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('proyecto_id');
		echo $this->Form->input('sede_id');
		echo $this->Form->input('rut');
		echo $this->Form->input('apellido');
		echo $this->Form->input('nombre');
		echo $this->Form->input('carrera');
		echo $this->Form->input('clave');
		echo $this->Form->input('sexo');
		echo $this->Form->input('id_proyecto');
		echo $this->Form->input('id_sede');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Alumno.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Alumno.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
	</ul>
</div>
