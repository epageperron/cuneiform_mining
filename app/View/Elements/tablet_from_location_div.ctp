<!--<label>From Location</label>-->
<?php echo $this->Form->input('FromLocation.FromLocation', array('type' => 'select', 'multiple' => 'true','empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New From Location', array('controller' => 'terms', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_from_locations'),
array( 'update' => 'from_location' )
);
?>