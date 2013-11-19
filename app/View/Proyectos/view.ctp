<div class="proyectos view">
<h2><?php echo __('Proyecto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proyecto'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['proyecto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['alumno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rut'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['rut']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['titulo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proyecto'), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proyecto'), array('action' => 'delete', $proyecto['Proyecto']['id']), null, __('Are you sure you want to delete # %s?', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesores'), array('controller' => 'profesores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesore'), array('controller' => 'profesores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seguimientos'), array('controller' => 'seguimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seguimiento'), array('controller' => 'seguimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Alumnos'); ?></h3>
	<?php if (!empty($proyecto['Alumno'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Sede Id'); ?></th>
		<th><?php echo __('Rut'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Carrera'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Id Proyecto'); ?></th>
		<th><?php echo __('Id Sede'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyecto['Alumno'] as $alumno): ?>
		<tr>
			<td><?php echo $alumno['id']; ?></td>
			<td><?php echo $alumno['proyecto_id']; ?></td>
			<td><?php echo $alumno['sede_id']; ?></td>
			<td><?php echo $alumno['rut']; ?></td>
			<td><?php echo $alumno['apellido']; ?></td>
			<td><?php echo $alumno['nombre']; ?></td>
			<td><?php echo $alumno['carrera']; ?></td>
			<td><?php echo $alumno['clave']; ?></td>
			<td><?php echo $alumno['sexo']; ?></td>
			<td><?php echo $alumno['id_proyecto']; ?></td>
			<td><?php echo $alumno['id_sede']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'alumnos', 'action' => 'view', $alumno['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'alumnos', 'action' => 'edit', $alumno['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'alumnos', 'action' => 'delete', $alumno['id']), null, __('Are you sure you want to delete # %s?', $alumno['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Profesores'); ?></h3>
	<?php if (!empty($proyecto['Profesore'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sede Id'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Rut'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Edad'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyecto['Profesore'] as $profesore): ?>
		<tr>
			<td><?php echo $profesore['id']; ?></td>
			<td><?php echo $profesore['sede_id']; ?></td>
			<td><?php echo $profesore['proyecto_id']; ?></td>
			<td><?php echo $profesore['nombre']; ?></td>
			<td><?php echo $profesore['apellido']; ?></td>
			<td><?php echo $profesore['rut']; ?></td>
			<td><?php echo $profesore['clave']; ?></td>
			<td><?php echo $profesore['sexo']; ?></td>
			<td><?php echo $profesore['edad']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'profesores', 'action' => 'view', $profesore['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'profesores', 'action' => 'edit', $profesore['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'profesores', 'action' => 'delete', $profesore['id']), null, __('Are you sure you want to delete # %s?', $profesore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Profesore'), array('controller' => 'profesores', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Seguimientos'); ?></h3>
	<?php if (!empty($proyecto['Seguimiento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Proyecto Id'); ?></th>
		<th><?php echo __('Sede'); ?></th>
		<th><?php echo __('Curso'); ?></th>
		<th><?php echo __('Proyecto'); ?></th>
		<th><?php echo __('Alumno'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyecto['Seguimiento'] as $seguimiento): ?>
		<tr>
			<td><?php echo $seguimiento['id']; ?></td>
			<td><?php echo $seguimiento['proyecto_id']; ?></td>
			<td><?php echo $seguimiento['sede']; ?></td>
			<td><?php echo $seguimiento['curso']; ?></td>
			<td><?php echo $seguimiento['proyecto']; ?></td>
			<td><?php echo $seguimiento['alumno']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'seguimientos', 'action' => 'view', $seguimiento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'seguimientos', 'action' => 'edit', $seguimiento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'seguimientos', 'action' => 'delete', $seguimiento['id']), null, __('Are you sure you want to delete # %s?', $seguimiento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Seguimiento'), array('controller' => 'seguimientos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
