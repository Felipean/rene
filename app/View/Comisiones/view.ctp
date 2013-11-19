<div class="comisiones view">
<h2><?php echo __('Comisione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comisione['Comisione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Profesor'); ?></dt>
		<dd>
			<?php echo h($comisione['Comisione']['id_profesor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Proyecto'); ?></dt>
		<dd>
			<?php echo h($comisione['Comisione']['id_proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($comisione['Comisione']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($comisione['Comisione']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rut'); ?></dt>
		<dd>
			<?php echo h($comisione['Comisione']['rut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($comisione['Comisione']['clave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($comisione['Comisione']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($comisione['Comisione']['sexo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comisione'), array('action' => 'edit', $comisione['Comisione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comisione'), array('action' => 'delete', $comisione['Comisione']['id']), null, __('Are you sure you want to delete # %s?', $comisione['Comisione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comisiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comisione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
