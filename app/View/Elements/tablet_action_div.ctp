<!--<label>Tags</label>-->
<?php echo $this->Form->input('Action.Action', array('type' => 'select', 'multiple' => 'true', 'empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Action', array('controller' => 'actions', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_actions'),
array( 'update' => 'action' )
);
?>
