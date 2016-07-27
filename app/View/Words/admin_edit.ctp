<div class="words form">
<?php echo $this->Form->create('Word'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Word'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('word_type_id');
		echo $this->Form->input('word');
		echo $this->Form->input('translation');
		echo $this->Form->input('comments');
		echo $this->Form->input('bibliography');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Word.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Word.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Words'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Word Types'), array('controller' => 'word_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Word Type'), array('controller' => 'word_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terms'), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terms'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
	</ul>
</div>
