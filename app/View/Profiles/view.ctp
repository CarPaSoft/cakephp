<div class="profiles view">
<h2><?php  echo __('Profile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profile['User']['username'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Nac'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['f_nac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['bio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profile['City']['nombre'], array('controller' => 'cities', 'action' => 'view', $profile['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profile['Country']['nombre'], array('controller' => 'countries', 'action' => 'view', $profile['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profile['Job']['nombre'], array('controller' => 'jobs', 'action' => 'view', $profile['Job']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
	<?php
	
	 echo print_r($profile);
	 echo $this->Auth->user('id'); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Profile'), array('action' => 'edit', $profile['Profile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profile'), array('action' => 'delete', $profile['Profile']['id']), null, __('Are you sure you want to delete # %s?', $profile['Profile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lngsprves'), array('controller' => 'lngsprves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lngsprf'), array('controller' => 'lngsprves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prflsprjcts'), array('controller' => 'prflsprjcts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prflsprjct'), array('controller' => 'prflsprjcts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prflssklls'), array('controller' => 'prflssklls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prflsskll'), array('controller' => 'prflssklls', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lngsprves'); ?></h3>
	<?php if (!empty($profile['Lngsprf'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Language Id'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th><?php echo __('Level'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($profile['Lngsprf'] as $lngsprf): ?>
		<tr>
			<td><?php echo $lngsprf['language_id']; ?></td>
			<td><?php echo $lngsprf['profile_id']; ?></td>
			<td><?php echo $lngsprf['level']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lngsprves', 'action' => 'view', $lngsprf['profile_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lngsprves', 'action' => 'edit', $lngsprf['profile_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lngsprves', 'action' => 'delete', $lngsprf['profile_id']), null, __('Are you sure you want to delete # %s?', $lngsprf['profile_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lngsprf'), array('controller' => 'lngsprves', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Prflsprjcts'); ?></h3>
	<?php if (!empty($profile['Prflsprjct'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Owner'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($profile['Prflsprjct'] as $prflsprjct): ?>
		<tr>
			<td><?php echo $prflsprjct['id']; ?></td>
			<td><?php echo $prflsprjct['profile_id']; ?></td>
			<td><?php echo $prflsprjct['project_id']; ?></td>
			<td><?php echo $prflsprjct['owner']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'prflsprjcts', 'action' => 'view', $prflsprjct['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'prflsprjcts', 'action' => 'edit', $prflsprjct['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'prflsprjcts', 'action' => 'delete', $prflsprjct['id']), null, __('Are you sure you want to delete # %s?', $prflsprjct['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Prflsprjct'), array('controller' => 'prflsprjcts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Prflssklls'); ?></h3>
	<?php if (!empty($profile['Prflsskll'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th><?php echo __('Skill Id'); ?></th>
		<th><?php echo __('Level'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		echo print_r($profile['Prflsskll']);
		foreach ($profile['Prflsskll'] as $prflsskll): ?>
		<tr>
			<td><?php echo $prflsskll['id']; ?></td>
			<td><?php echo $prflsskll['profile_id']; ?></td>
			<td><?php echo $prflsskll['skill_id']; ?></td>
			<td><?php echo $prflsskll['level']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'prflssklls', 'action' => 'view', $prflsskll['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'prflssklls', 'action' => 'edit', $prflsskll['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'prflssklls', 'action' => 'delete', $prflsskll['id']), null, __('Are you sure you want to delete # %s?', $prflsskll['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Prflsskll'), array('controller' => 'prflssklls', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
