<!--<label>Month</label>-->
<?php 
echo $this->Form->input('Tablet.month_id', array('empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Month', array('controller' => 'months', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_months'),
array( 'update' => 'month' )
);
?>