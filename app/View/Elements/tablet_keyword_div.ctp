<!--<label>Keyword</label>-->
<?php echo $this->Form->input('Keyword.Keyword', array('type' => 'select', 'multiple' => 'true','empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Keyword', array('controller' => 'keywords', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_keywords'),
array( 'update' => 'keyword' )
);
?>