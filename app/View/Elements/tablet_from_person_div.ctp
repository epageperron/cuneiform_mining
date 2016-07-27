<!--<label>From Person/label>-->
<?php echo $this->Form->input('FromPerson.FromPerson', array('type' => 'select', 'multiple' => 'true','empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New From Person', array('controller' => 'terms', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_from_people'),
array( 'update' => 'from_person' )
);
?>