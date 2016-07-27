<!--<label>To Location</label>-->
<?php echo $this->Form->input('ToLocation.ToLocation', array('type' => 'select', 'multiple' => 'true','empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New To Location', array('controller' => 'terms', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_to_locations'),
array( 'update' => 'to_location' )
);
?>