<div class="cnvrstns form">
<?php echo $this->Form->create('Cnvrstn'); ?>
	<fieldset>
		<legend><?php echo __('Add Cnvrstn'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('title');
		echo $this->Form->input('message');
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

		<li><?php echo $this->Html->link(__('List Cnvrstns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cnvrstnmssgs'), array('controller' => 'cnvrstnmssgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnvrstnmssg'), array('controller' => 'cnvrstnmssgs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cnvrstnusrs'), array('controller' => 'cnvrstnusrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnvrstnusr'), array('controller' => 'cnvrstnusrs', 'action' => 'add')); ?> </li>
	</ul>
</div>
