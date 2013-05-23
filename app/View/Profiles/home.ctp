
<script>
$("dt.dd").click(function () { $(this).slideUp(); });

</script>

<style>

img.imgPrueba
{
	display:none;
}

div.destinoAjax { margin:3px; width:16px; 
  height:16px; float:right; }

</style>



<div class="profiles2">
<h2><?php  echo __('Profile'); ?></h2>
	<dl>
		<div class="field">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['id']); ?>
			&nbsp;
		</dd>
		</div>
		<div class="field">
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profile['User']['id'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
			&nbsp;
		</dd>
		</div>
		<div class="field">
			<dt><?php echo __('Nombre'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['nombre']); ?>
				&nbsp;
			</dd>
		</div>
		<div class="field">
			<dt><?php echo __('Apellidos'); ?></dt>
			<dd class="apellidos">
				<?php echo h($profile['Profile']['apellidos']); ?>
				&nbsp;
			</dd>
		</div>
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
			<?php // echo $this->Html->link($profile['City']['nombre'], array('controller' => 'cities', 'action' => 'view', $profile['City']['id'])); ?>
			 <?php echo h($profile['City']['nombre']); ?> 
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
</div>
<div class="profiles2">
<h2><?php  echo __('Profile'); ?></h2>
	<dl>
		<div class="field">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['id']); ?>
			&nbsp;
		</dd>
		</div>
		<div class="field">
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profile['User']['id'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
			&nbsp;
		</dd>
		</div>
		<div class="field">
			<dt><?php echo __('Nombre'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['nombre']); ?>
				&nbsp;
			</dd>
		</div>
		<div class="field">
			<dt><?php echo __('Apellidos'); ?></dt>
			<dd class="apellidos">
				<?php echo h($profile['Profile']['apellidos']); ?>
				&nbsp;
			</dd>
		</div>
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
			<?php // echo $this->Html->link($profile['City']['nombre'], array('controller' => 'cities', 'action' => 'view', $profile['City']['id'])); ?>
			 <?php echo h($profile['City']['nombre']); ?> 
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
</div>
<div class="profiles2">
<h2><?php  echo __('Profile'); ?></h2>
	<dl>
		<div class="field">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['id']); ?>
			&nbsp;
		</dd>
		</div>
		<div class="field">
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profile['User']['id'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
			&nbsp;
		</dd>
		</div>
		<div class="field">
			<dt><?php echo __('Nombre'); ?></dt>
			<dd>
				<?php echo h($profile['Profile']['nombre']); ?>
				&nbsp;
			</dd>
		</div>
		<div class="field">
			<dt><?php echo __('Apellidos'); ?></dt>
			<dd class="apellidos">
				<?php echo h($profile['Profile']['apellidos']); ?>
				&nbsp;
			</dd>
		</div>
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
			<?php // echo $this->Html->link($profile['City']['nombre'], array('controller' => 'cities', 'action' => 'view', $profile['City']['id'])); ?>
			 <?php echo h($profile['City']['nombre']); ?> 
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
</div>
<div class="related">
	<?php if (!empty($profile['Language'])): ?>
	<h3><?php echo __('Related Languages'); ?></h3>
	
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($related['languages'] as $language): ?>
		<tr>
			<td><?php echo $language['nombre']; ?></td>
			<td><?php echo $language['level']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	
	<?php if (!empty($related['projects'])): ?>
	<h3><?php echo __('Related Projects'); ?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--   <th><?php echo __('Id'); ?></th> -->
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Dueño'); ?> </th>
		<!--   <th><?php echo __('Bio Prj'); ?></th>
		<th><?php echo __('Ext Bio Prj'); ?></th>
		<th><?php echo __('F Fin'); ?></th>
		<th><?php echo __('Rec Max'); ?></th>
		<th><?php echo __('Rec Actual'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th> -->
	</tr>
	<?php
		$i = 0;
		foreach ($related['projects'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['nombre']; ?></td>
			<td><?php echo $project['bio_prj']; ?></td>
			<td><?php echo $project['ext_bio_prj']; ?></td>
			<td><?php echo $project['f_fin']; ?></td>
			<td><?php echo $project['rec_max']; ?></td>
			<td><?php echo $project['rec_actual']; ?></td>
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
<div class="related">
	<?php if (!empty($related['skills'])): ?>
	<h3><?php echo __('Related Skills'); ?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Level'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($related['skills'] as $skill): ?>
		<tr>
			<td><?php echo $skill['Skill']['nombre']; ?></td>
			<td><?php echo $skill['Prflsskll']['level']; ?></td>
			<!--  <td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'skills', 'action' => 'view', $skill['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'skills', 'action' => 'edit', $skill['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'skills', 'action' => 'delete', $skill['id']), null, __('Are you sure you want to delete # %s?', $skill['id'])); ?>
			</td> -->
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--   <div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		</ul>
	</div> -->
</div>
