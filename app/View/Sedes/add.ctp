<div class="sedes form">
<?php echo $this->Form->create('Sede'); ?>
	<fieldset>
		<legend><?php echo __('Add Sede'); ?></legend>
	<?php
		echo $this->Form->input('sede');
		echo $this->Form->input('direccion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sedes'), array('action' => 'index')); ?></li>
	</ul>
</div>
