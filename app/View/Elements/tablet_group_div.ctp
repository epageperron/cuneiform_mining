<!--<label>Group</label>-->
<?php echo $this->Form->input('Group.Group', array('type' => 'select', 'multiple' => 'true', 'empty' => '     ')); ?>
<div class="clr"></div>
<?php echo $this->Html->link('Add New Group', array('controller' => 'groups', 'action' => 'add'), array('target' => '_blank')); ?> <br />
<?php
echo $this->Ajax->link(
'Refresh...',
array( 'controller' => 'tablets', 'action' => 'update_tablet_groups'),
array( 'update' => 'group' ) // quel �l�ment HTML � mettre � jour
);
?>
