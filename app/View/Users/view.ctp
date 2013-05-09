<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email / Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultimo Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['ultimo_login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Registro'); ?></dt>
		<dd>
			<?php echo h($user['User']['fecha_registro']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Profiles'); ?></h3>
	<?php if (!empty($user['profile'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $user['profile']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
	<?php echo $user['profile']['user_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
	<?php echo $user['profile']['nombre']; ?>
&nbsp;</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
	<?php echo $user['profile']['apellidos']; ?>
&nbsp;</dd>
		<dt><?php echo __('F Nac'); ?></dt>
		<dd>
	<?php echo $user['profile']['f_nac']; ?>
&nbsp;</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
	<?php echo $user['profile']['bio']; ?>
&nbsp;</dd>
		<dt><?php echo __('City Id'); ?></dt>
		<dd>
	<?php echo $user['profile']['city_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
	<?php echo $user['profile']['sexo']; ?>
&nbsp;</dd>
		<dt><?php echo __('Country Id'); ?></dt>
		<dd>
	<?php echo $user['profile']['country_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Language Id'); ?></dt>
		<dd>
	<?php echo $user['profile']['language_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Job Id'); ?></dt>
		<dd>
	<?php echo $user['profile']['job_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Skill Id'); ?></dt>
		<dd>
	<?php echo $user['profile']['skill_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Profile'), array('controller' => 'profiles', 'action' => 'edit', $user['profile']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($user['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Bio Prj'); ?></th>
		<th><?php echo __('Ext Bio Prj'); ?></th>
		<th><?php echo __('F Fin'); ?></th>
		<th><?php echo __('Rec Max'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['nombre']; ?></td>
			<td><?php echo $project['bio_prj']; ?></td>
			<td><?php echo $project['ext_bio_prj']; ?></td>
			<td><?php echo $project['f_fin']; ?></td>
			<td><?php echo $project['rec_max']; ?></td>
			<td><?php echo $project['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
