<div class="cnvrstnmssgs form">
<?php echo $this->Form->create('Cnvrstnmssg'); ?>
	<fieldset>
		<legend><?php echo __('Add Cnvrstnmssg'); ?></legend>
	<?php
		echo $this->Form->input('cnvrstn_id');
		echo $this->Form->input('profile_id');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cnvrstnmssgs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cnvrstns'), array('controller' => 'cnvrstns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnvrstn'), array('controller' => 'cnvrstns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cnvrstnusrs'), array('controller' => 'cnvrstnusrs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cnvrstnusr'), array('controller' => 'cnvrstnusrs', 'action' => 'add')); ?> </li>
	</ul>
</div>
