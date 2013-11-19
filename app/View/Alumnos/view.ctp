<div class="alumnos view">
<h2><?php echo __('Alumno'); ?></h2>
	<dl>
		<dt><?php echo __('Alumnos'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['alumnos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rut'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['rut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrera'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['carrera']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clave'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['clave']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['sexo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alumno'), array('action' => 'edit', $alumno['Alumno']['alumnos'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alumno'), array('action' => 'delete', $alumno['Alumno']['alumnos']), null, __('Are you sure you want to delete # %s?', $alumno['Alumno']['alumnos'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('action' => 'add')); ?> </li>
	</ul>
</div>
