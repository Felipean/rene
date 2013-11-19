<div class="cursos view">
<h2><?php echo __('Curso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumnos'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['alumnos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesor'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['profesor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nrc'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['nrc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sede'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['sede']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Periodo'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['periodo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip Profesor'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['ip_profesor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __(' Alumno'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['_alumno']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Curso'), array('action' => 'edit', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Curso'), array('action' => 'delete', $curso['Curso']['id']), null, __('Are you sure you want to delete # %s?', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('action' => 'add')); ?> </li>
	</ul>
</div>
