<!--<label>Achaeological Localisation</label>-->
<?php echo $this->Form->input('Tablet.arch_loc_id', array('empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Arch Loc', array('controller' => 'arch_locs', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_arch_locs'),
array( 'update' => 'arch_loc' )
);
?>