<!--<label>Tags</label>-->
<?php echo $this->Form->input('Tag.Tag', array('type' => 'select', 'multiple' => 'true', 'empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Tag', array('controller' => 'tags', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_tags'),
array( 'update' => 'tag' )
);
?>