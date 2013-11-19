<div class="cursos form">
<?php echo $this->Form->create('Curso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Curso'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Curso.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Curso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index')); ?></li>
	</ul>
</div>
