<div class="cnvrstns form">
<?php echo $this->Form->create('Cnvrstn'); ?>
	<fieldset>
		<legend><?php echo __('Add Cnvrstn'); ?></legend>
	<?php
		echo $this->Form->input('profile_id');
		echo $this->Form->input('title');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

