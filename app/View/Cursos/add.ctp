<div class="cursos form">
<?php echo $this->Form->create('Curso'); ?>
	<fieldset>
		<legend><?php echo __('Add Curso'); ?></legend>
	<?php
		echo $this->Form->input('alumnos');
		echo $this->Form->input('profesor');
		echo $this->Form->input('nrc');
		echo $this->Form->input('sede');
		echo $this->Form->input('periodo');
		echo $this->Form->input('ip_profesor');
		echo $this->Form->input('_alumno');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index')); ?></li>
	</ul>
</div>
