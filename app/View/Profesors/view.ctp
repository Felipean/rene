<div class="profesors view">
<h2><?php echo __('Profesor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profesor['Profesor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($profesor['Profesor']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($profesor['Profesor']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rut'); ?></dt>
		<dd>
			<?php echo h($profesor['Profesor']['rut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($profesor['Profesor']['clave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($profesor['Profesor']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($profesor['Profesor']['edad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Profesor'), array('action' => 'edit', $profesor['Profesor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profesor'), array('action' => 'delete', $profesor['Profesor']['id']), null, __('Are you sure you want to delete # %s?', $profesor['Profesor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
