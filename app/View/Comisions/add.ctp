<div class="comisions form">
<?php echo $this->Form->create('Comision'); ?>
	<fieldset>
		<legend><?php echo __('Add Comision'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('rut');
		echo $this->Form->input('clave');
		echo $this->Form->input('edad');
		echo $this->Form->input('sexo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Comisions'), array('action' => 'index')); ?></li>
	</ul>
</div>
