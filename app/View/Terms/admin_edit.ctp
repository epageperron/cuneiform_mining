<div class="terms form">
<?php echo $this->Form->create('Term');?>
	<fieldset>
		<legend><?php __('Admin Edit Term'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('word_type_id');
		echo $this->Form->input('term');
		echo $this->Form->input('comments');
		echo $this->Form->input('Tablet');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Term.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Term.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Terms', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Word Types', true), array('controller' => 'word_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Word Type', true), array('controller' => 'word_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fish', true), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish', true), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tablets', true), array('controller' => 'tablets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablet', true), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
	</ul>
</div>