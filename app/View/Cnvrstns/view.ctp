<div class="cnvrstns view">
<h2><?php  echo __('Cnvrstn'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cnvrstn['Cnvrstn']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profile'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cnvrstn['Profile']['nombre'], array('controller' => 'profiles', 'action' => 'view', $cnvrstn['Profile']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($cnvrstn['Cnvrstn']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cnvrstn['Cnvrstn']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastmessageid'); ?></dt>
		<dd>
			<?php echo h($cnvrstn['Cnvrstn']['lastmessageid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allowadd'); ?></dt>
		<dd>
			<?php echo h($cnvrstn['Cnvrstn']['allowadd']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Count'); ?></dt>
		<dd>
			<?php echo h($cnvrstn['Cnvrstn']['count']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cnvrstn'), array('action' => 'edit', $cnvrstn['Cnvrstn']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cnvrstn'), array('action' => 'delete', $cnvrstn['Cnvrstn']['id']), null, __('Are you sure you want to delete # %s?', $cnvrstn['Cnvrstn']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cnvrstns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnvrstn'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cnvrstnmssgs'), array('controller' => 'cnvrstnmssgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnvrstnmssg'), array('controller' => 'cnvrstnmssgs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cnvrstnusrs'), array('controller' => 'cnvrstnusrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnvrstnusr'), array('controller' => 'cnvrstnusrs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cnvrstnmssgs'); ?></h3>
	<?php if (!empty($cnvrstn['Cnvrstnmssg'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cnvrstn Id'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cnvrstn['Cnvrstnmssg'] as $cnvrstnmssg): ?>
		<tr>
			<td><?php echo $cnvrstnmssg['id']; ?></td>
			<td><?php echo $cnvrstnmssg['cnvrstn_id']; ?></td>
			<td><?php echo $cnvrstnmssg['profile_id']; ?></td>
			<td><?php echo $cnvrstnmssg['message']; ?></td>
			<td><?php echo $cnvrstnmssg['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cnvrstnmssgs', 'action' => 'view', $cnvrstnmssg['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cnvrstnmssgs', 'action' => 'edit', $cnvrstnmssg['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cnvrstnmssgs', 'action' => 'delete', $cnvrstnmssg['id']), null, __('Are you sure you want to delete # %s?', $cnvrstnmssg['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cnvrstnmssg'), array('controller' => 'cnvrstnmssgs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cnvrstnusrs'); ?></h3>
	<?php if (!empty($cnvrstn['Cnvrstnusr'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cnvrstn Id'); ?></th>
		<th><?php echo __('Profile Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Lastview'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cnvrstn['Cnvrstnusr'] as $cnvrstnusr): ?>
		<tr>
			<td><?php echo $cnvrstnusr['id']; ?></td>
			<td><?php echo $cnvrstnusr['cnvrstn_id']; ?></td>
			<td><?php echo $cnvrstnusr['profile_id']; ?></td>
			<td><?php echo $cnvrstnusr['status']; ?></td>
			<td><?php echo $cnvrstnusr['lastview']; ?></td>
			<td><?php echo $cnvrstnusr['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cnvrstnusrs', 'action' => 'view', $cnvrstnusr['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cnvrstnusrs', 'action' => 'edit', $cnvrstnusr['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cnvrstnusrs', 'action' => 'delete', $cnvrstnusr['id']), null, __('Are you sure you want to delete # %s?', $cnvrstnusr['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cnvrstnusr'), array('controller' => 'cnvrstnusrs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
