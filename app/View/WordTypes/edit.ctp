<div class="wordTypes form">
<?php echo $this->Form->create('WordType');?>
	<fieldset>
		<legend><?php __('Edit Word Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('word_type');
		echo $this->Form->input('parent_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('WordType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('WordType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Word Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Word Types', true), array('controller' => 'word_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Word Type', true), array('controller' => 'word_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terms', true), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Term', true), array('controller' => 'terms', 'action' => 'add')); ?> </li>
	</ul>
</div>