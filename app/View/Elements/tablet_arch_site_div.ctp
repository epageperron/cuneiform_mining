<!--<label>Archaeological Site</label>-->
<?php echo $this->Form->input('Tablet.arch_site_id', array('empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Arch Site', array('controller' => 'arch_sites', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_arch_sites'),
array( 'update' => 'arch_site' )
);
?>