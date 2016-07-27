<!--<label>Main Verb</label>-->
<?php echo $this->Form->input('Tablet.main_verb_id', array('empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Main Verb', array('controller' => 'terms', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_main_verbs'),
array( 'update' => 'main_verb' )
);
?>