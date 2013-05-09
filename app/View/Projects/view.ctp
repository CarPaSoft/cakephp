<div class="projects view">
<h2><?php  echo __('Project'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($project['Project']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bio Prj'); ?></dt>
		<dd>
			<?php echo h($project['Project']['bio_prj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ext Bio Prj'); ?></dt>
		<dd>
			<?php echo h($project['Project']['ext_bio_prj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Fin'); ?></dt>
		<dd>
			<?php echo h($project['Project']['f_fin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rec Max'); ?></dt>
		<dd>
			<?php echo h($project['Project']['rec_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rec Actual'); ?></dt>
		<dd>
			<?php echo h($project['Project']['rec_actual']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Languages'); ?></h3>
	<?php if (!empty($project['Language'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Language'] as $language): ?>
		<tr>
			<td><?php echo $language['id']; ?></td>
			<td><?php echo $language['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'languages', 'action' => 'view', $language['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'languages', 'action' => 'edit', $language['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'languages', 'action' => 'delete', $language['id']), null, __('Are you sure you want to delete # %s?', $language['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Profiles'); ?></h3>
	<?php if (!empty($project['Profile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('F Nac'); ?></th>
		<th><?php echo __('Bio'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Profile'] as $profile): ?>
		<tr>
			<td><?php echo $profile['id']; ?></td>
			<td><?php echo $profile['user_id']; ?></td>
			<td><?php echo $profile['nombre']; ?></td>
			<td><?php echo $profile['apellidos']; ?></td>
			<td><?php echo $profile['f_nac']; ?></td>
			<td><?php echo $profile['bio']; ?></td>
			<td><?php echo $profile['city_id']; ?></td>
			<td><?php echo $profile['sexo']; ?></td>
			<td><?php echo $profile['country_id']; ?></td>
			<td><?php echo $profile['job_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'profiles', 'action' => 'view', $profile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'profiles', 'action' => 'edit', $profile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'profiles', 'action' => 'delete', $profile['id']), null, __('Are you sure you want to delete # %s?', $profile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Skills'); ?></h3>
	<?php if (!empty($project['Skill'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Skill'] as $skill): ?>
		<tr>
			<td><?php echo $skill['id']; ?></td>
			<td><?php echo $skill['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'skills', 'action' => 'view', $skill['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'skills', 'action' => 'edit', $skill['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'skills', 'action' => 'delete', $skill['id']), null, __('Are you sure you want to delete # %s?', $skill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
