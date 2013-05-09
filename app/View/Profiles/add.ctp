<div class="profiles form">
<?php echo $this->Form->create('Profile'); ?>
	<fieldset>
		<legend><?php echo __('Add Profile'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('f_nac');
		echo $this->Form->input('bio');
		echo $this->Form->input('city_id');
		echo $this->Form->input('sexo');
		echo $this->Form->input('country_id');
		echo $this->Form->input('job_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?></li>
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
