<div class="comisiones form">
<?php echo $this->Form->create('Comisione'); ?>
	<fieldset>
		<legend><?php echo __('Add Comisione'); ?></legend>
	<?php
		echo $this->Form->input('id_profesor');
		echo $this->Form->input('id_proyecto');
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

		<li><?php echo $this->Html->link(__('List Comisiones'), array('action' => 'index')); ?></li>
	</ul>
</div>
