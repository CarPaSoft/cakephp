<div class="users home">
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
<div class="related">
		<h3><?php echo __('Profile'); ?></h3>
	<?php if (!empty($user['Profile'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $user['Profile']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
	<?php echo $user['Profile']['user_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
	<?php echo $user['Profile']['nombre']; ?>
&nbsp;</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
	<?php echo $user['Profile']['apellidos']; ?>
&nbsp;</dd>
		<dt><?php echo __('F Nac'); ?></dt>
		<dd>
	<?php echo $user['Profile']['f_nac']; ?>
&nbsp;</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
	<?php echo $user['Profile']['bio']; ?>
&nbsp;</dd>
		<dt><?php echo __('City Id'); ?></dt>
		<dd>
	<?php echo $user['Profile']['city_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
	<?php echo $user['Profile']['sexo']; ?>
&nbsp;</dd>
		<dt><?php echo __('Country Id'); ?></dt>
		<dd>
	<?php echo $user['Profile']['country_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Job Id'); ?></dt>
		<dd>
	<?php echo $user['Profile']['job_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Profile'), array('controller' => 'profiles', 'action' => 'edit', $user['Profile']['id'])); ?></li>
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
