<div class="evaluacions view">
<h2><?php echo __('Evaluacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['nota']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesor 1'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['profesor 1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesor 2'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['profesor 2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesor 3'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['profesor 3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($evaluacion['Evaluacion']['observacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evaluacion'), array('action' => 'edit', $evaluacion['Evaluacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evaluacion'), array('action' => 'delete', $evaluacion['Evaluacion']['id']), null, __('Are you sure you want to delete # %s?', $evaluacion['Evaluacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
