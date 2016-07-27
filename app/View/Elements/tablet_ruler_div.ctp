<!--<label>Ruler</label>-->
<?php echo $this->Form->input('Tablet.ruler_id', array('empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Ruler', array('controller' => 'terms', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_rulers'),
array( 'update' => 'ruler' )
);
?>