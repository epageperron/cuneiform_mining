<!--<label>Official</label>-->
<?php echo $this->Form->input('Tablet.official_id', array('empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Official', array('controller' => 'terms', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_officials'),
array( 'update' => 'official' )
);
?>