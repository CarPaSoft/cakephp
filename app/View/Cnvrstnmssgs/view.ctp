<div class="cnvrstnmssgs view">
<h2><?php  echo __('Cnvrstnmssg'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cnvrstnmssg['Cnvrstnmssg']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cnvrstn'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cnvrstnmssg['Cnvrstn']['title'], array('controller' => 'cnvrstns', 'action' => 'view', $cnvrstnmssg['Cnvrstn']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cnvrstnusr'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cnvrstnmssg['Cnvrstnusr']['id'], array('controller' => 'cnvrstnusrs', 'action' => 'view', $cnvrstnmssg['Cnvrstnusr']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($cnvrstnmssg['Cnvrstnmssg']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cnvrstnmssg['Cnvrstnmssg']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cnvrstnmssg'), array('action' => 'edit', $cnvrstnmssg['Cnvrstnmssg']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cnvrstnmssg'), array('action' => 'delete', $cnvrstnmssg['Cnvrstnmssg']['id']), null, __('Are you sure you want to delete # %s?', $cnvrstnmssg['Cnvrstnmssg']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cnvrstnmssgs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnvrstnmssg'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cnvrstns'), array('controller' => 'cnvrstns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnvrstn'), array('controller' => 'cnvrstns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cnvrstnusrs'), array('controller' => 'cnvrstnusrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnvrstnusr'), array('controller' => 'cnvrstnusrs', 'action' => 'add')); ?> </li>
	</ul>
</div>
