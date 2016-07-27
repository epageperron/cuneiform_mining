<?php echo $this->Form->create('Tag');?>
    <?php echo $this->Form->input(
        'Tablet.id', 
        array('type'=>'hidden', 'value' => $tablet_id)); ?>
    <?php echo $this->Form->input('Tag.tag'); ?>
    <?php echo $this->Form->end('Add Tag'); ?>