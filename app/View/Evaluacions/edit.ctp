<div class="evaluacions form">
<?php echo $this->Form->create('Evaluacion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Evaluacion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nota');
		echo $this->Form->input('profesor 1');
		echo $this->Form->input('profesor 2');
		echo $this->Form->input('profesor 3');
		echo $this->Form->input('observacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Evaluacion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Evaluacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluacions'), array('action' => 'index')); ?></li>
	</ul>
</div>
