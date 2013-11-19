<div class="profesores view">
<h2><?php echo __('Profesore'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profesore['Profesore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sede'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profesore['Sede']['id'], array('controller' => 'sedes', 'action' => 'view', $profesore['Sede']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profesore['Proyecto']['id'], array('controller' => 'proyectos', 'action' => 'view', $profesore['Proyecto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($profesore['Profesore']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($profesore['Profesore']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rut'); ?></dt>
		<dd>
			<?php echo h($profesore['Profesore']['rut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($profesore['Profesore']['clave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($profesore['Profesore']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($profesore['Profesore']['edad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Profesore'), array('action' => 'edit', $profesore['Profesore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profesore'), array('action' => 'delete', $profesore['Profesore']['id']), null, __('Are you sure you want to delete # %s?', $profesore['Profesore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesore'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sedes'), array('controller' => 'sedes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sede'), array('controller' => 'sedes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
	</ul>
</div>
