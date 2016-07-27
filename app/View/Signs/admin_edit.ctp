<div class="signs form">
<?php echo $this->Form->create('Sign'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Sign'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sign_type_id');
		echo $this->Form->input('sign');
		echo $this->Form->input('lak');
		echo $this->Form->input('rosen');
		echo $this->Form->input('comments');
		echo $this->Form->input('bibliography');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sign.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sign.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Signs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sign Types'), array('controller' => 'sign_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sign Type'), array('controller' => 'sign_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Readings'), array('controller' => 'readings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Readings'), array('controller' => 'readings', 'action' => 'add')); ?> </li>
	</ul>
</div>
