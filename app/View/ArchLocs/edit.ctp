<div class="archLocs form">
<?php echo $this->Form->create('ArchLoc');?>
	<fieldset>
		<legend><?php __('Edit Arch Loc'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('arch_loc');
		echo $this->Form->input('arch_loc_desc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ArchLoc.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ArchLoc.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Arch Locs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tablets', true), array('controller' => 'tablets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablet', true), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
	</ul>
</div>