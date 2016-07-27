<!--<label>Genre</label>-->
<?php echo $this->Form->input('Tablet.genre_id', array('empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Genre', array('controller' => 'genres', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_genres'),
array( 'update' => 'genre' )
);
?>