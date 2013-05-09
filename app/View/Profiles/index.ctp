<div class="profiles index">
	<h2><?php echo __('Profiles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('f_nac'); ?></th>
			<th><?php echo $this->Paginator->sort('bio'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($profiles as $profile): ?>
	<tr>
		<td><?php echo h($profile['Profile']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($profile['User']['username'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
		</td>
		<td><?php echo h($profile['Profile']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($profile['Profile']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($profile['Profile']['f_nac']); ?>&nbsp;</td>
		<td><?php echo h($profile['Profile']['bio']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($profile['City']['nombre'], array('controller' => 'cities', 'action' => 'view', $profile['City']['id'])); ?>
		</td>
		<td><?php echo h($profile['Profile']['sexo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($profile['Country']['nombre'], array('controller' => 'countries', 'action' => 'view', $profile['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($profile['Job']['nombre'], array('controller' => 'jobs', 'action' => 'view', $profile['Job']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $profile['Profile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $profile['Profile']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $profile['Profile']['id']), null, __('Are you sure you want to delete # %s?', $profile['Profile']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Profile'), array('action' => 'add')); ?></li>
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
