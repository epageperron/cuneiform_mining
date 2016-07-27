<!--<label>Local Ruler</label>-->
<?php echo $this->Form->input('Tablet.local_ruler_id', array('empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Local Ruler', array('controller' => 'terms', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_local_rulers'),
array( 'update' => 'local_ruler' )
);
?>