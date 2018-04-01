<div class="transacs form">
<?php echo $this->Form->create('Transac');?>
	<fieldset>
		<legend><?php __('Add Transac'); ?></legend>
	<?php
		echo $this->Form->input('main_action_id');
		echo $this->Form->input('verb_id', array('options' => $verbs_terms));
		echo $this->Form->input('main_topic_id');
		echo $this->Form->input('good_id', array('options' => $goods_terms));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Transacs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tablets', true), array('controller' => 'tablets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablet', true), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
	</ul>
</div>
