<!--<label>Main Action</label>-->
<?php echo $this->Form->input('Tablet.main_action_id', array('empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Main Action', array('controller' => 'terms', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_main_actions'),
array( 'update' => 'main_action' )
);
?>