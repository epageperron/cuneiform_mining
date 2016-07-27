<div class="years form">
<?php echo $this->Form->create('Year');?>
	<fieldset>
		<legend><?php __('Edit Year'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('year');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Year.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Year.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Years', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tablets', true), array('controller' => 'tablets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablet', true), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
	</ul>
</div>