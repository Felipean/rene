<div class="comisions view">
<h2><?php echo __('Comision'); ?></h2>
	<dl>
		<dt><?php echo __('Id Comision'); ?></dt>
		<dd>
			<?php echo h($comision['Comision']['id_comision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($comision['Comision']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($comision['Comision']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rut'); ?></dt>
		<dd>
			<?php echo h($comision['Comision']['rut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($comision['Comision']['clave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($comision['Comision']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($comision['Comision']['sexo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comision'), array('action' => 'edit', $comision['Comision']['id_comision'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comision'), array('action' => 'delete', $comision['Comision']['id_comision']), null, __('Are you sure you want to delete # %s?', $comision['Comision']['id_comision'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comisions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comision'), array('action' => 'add')); ?> </li>
	</ul>
</div>
