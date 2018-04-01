<div class="transacs form">
<?php echo $this->Form->create('Transac'); ?>
	<fieldset>
		<legend><?php echo __('Edit Transac'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('main_action_id', array('empty'=>true));
		echo $this->Form->input('verb_id', array('empty'=>true));
		echo $this->Form->input('main_topic_id', array('empty'=>true));
		echo $this->Form->input('good_id', array('empty'=>true));
		echo $this->Form->input('Tablet', array('empty'=>true));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Transac.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Transac.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Transacs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Main Actions'), array('controller' => 'main_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Main Action'), array('controller' => 'main_actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Verbs'), array('controller' => 'verbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Verb'), array('controller' => 'verbs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Main Topics'), array('controller' => 'main_topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Main Topic'), array('controller' => 'main_topics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goods'), array('controller' => 'goods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Good'), array('controller' => 'goods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tablets'), array('controller' => 'tablets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablet'), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
	</ul>
</div>
