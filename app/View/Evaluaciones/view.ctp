<div class="evaluaciones view">
<h2><?php echo __('Evaluacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evaluacione['Evaluacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Proyeto'); ?></dt>
		<dd>
			<?php echo h($evaluacione['Evaluacione']['id_proyeto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota'); ?></dt>
		<dd>
			<?php echo h($evaluacione['Evaluacione']['nota']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesor 1'); ?></dt>
		<dd>
			<?php echo h($evaluacione['Evaluacione']['profesor 1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesor 2'); ?></dt>
		<dd>
			<?php echo h($evaluacione['Evaluacione']['profesor 2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesor 3'); ?></dt>
		<dd>
			<?php echo h($evaluacione['Evaluacione']['profesor 3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($evaluacione['Evaluacione']['observacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evaluacione'), array('action' => 'edit', $evaluacione['Evaluacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evaluacione'), array('action' => 'delete', $evaluacione['Evaluacione']['id']), null, __('Are you sure you want to delete # %s?', $evaluacione['Evaluacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluacione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
