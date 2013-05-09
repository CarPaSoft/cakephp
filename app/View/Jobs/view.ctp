<div class="jobs view">
<h2><?php  echo __('Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($job['Job']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Desde'); ?></dt>
		<dd>
			<?php echo h($job['Job']['f_desde']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Hasta'); ?></dt>
		<dd>
			<?php echo h($job['Job']['f_hasta']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job'), array('action' => 'edit', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job'), array('action' => 'delete', $job['Job']['id']), null, __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($job['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Surname'); ?></th>
		<th><?php echo __('F Nac'); ?></th>
		<th><?php echo __('Bio'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Language Id'); ?></th>
		<th><?php echo __('Job Id'); ?></th>
		<th><?php echo __('Skill Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($job['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['surname']; ?></td>
			<td><?php echo $user['f_nac']; ?></td>
			<td><?php echo $user['bio']; ?></td>
			<td><?php echo $user['city_id']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['sexo']; ?></td>
			<td><?php echo $user['country_id']; ?></td>
			<td><?php echo $user['language_id']; ?></td>
			<td><?php echo $user['job_id']; ?></td>
			<td><?php echo $user['skill_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
