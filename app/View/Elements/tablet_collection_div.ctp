<!--<label>Collection</label>-->
<?php echo $this->Form->input('Tablet.collection_id', array('empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Collection', array('controller' => 'collections', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_collections'),
array( 'update' => 'collection' )
);
?>