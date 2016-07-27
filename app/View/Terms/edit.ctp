<div class="terms form">
<?php echo $this->Form->create('Term');?>
<h1>Edit Term</h1>
<fieldset>
<legend>Term</legend>
	<?php

echo $this->Form->input('id');
echo $this->Form->input('term',array('disabled' => true));
//echo $this->Form->input('word_id', array('empty' => '     ','selected' => $term['Term']['word_id'],'options' => $words)); 

echo $this->Form->input('Word.Word', array('type' => 'select', 'multiple' => 'true', 'empty' => '     '));

echo $this->Form->input('comments', array('empty' => '     '));
echo $this->Html->link(__('Create Word from Term', true), array('controller' => 'terms', 'action' => 'word_from_term', $id)); ?>
</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Term.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Term.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Terms', true), array('action' => 'index'));?></li>
	</ul>
</div>