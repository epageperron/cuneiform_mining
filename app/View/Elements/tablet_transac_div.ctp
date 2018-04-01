<!--<label>Transaction</label>-->
<?php echo $this->Form->input('Transac.Transac', array('type' => 'select', 'multiple' => 'true', 'empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Transac', array('controller' => 'transacs', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php
echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_transacs'),
array( 'update' => 'transac' )
);
?>
