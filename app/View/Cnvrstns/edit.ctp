<div class="cnvrstns form">
<?php echo $this->Form->create('Cnvrstn'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cnvrstn'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('profile_id');
		echo $this->Form->input('title');
		echo $this->Form->input('lastmessageid');
		echo $this->Form->input('allowadd');
		echo $this->Form->input('count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cnvrstn.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cnvrstn.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cnvrstns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cnvrstnmssgs'), array('controller' => 'cnvrstnmssgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnvrstnmssg'), array('controller' => 'cnvrstnmssgs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cnvrstnusrs'), array('controller' => 'cnvrstnusrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnvrstnusr'), array('controller' => 'cnvrstnusrs', 'action' => 'add')); ?> </li>
	</ul>
</div>
