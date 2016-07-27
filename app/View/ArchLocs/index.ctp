<div class="archLocs index">
	<h2><?php __('Arch Locs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('arch_loc');?></th>
			<th><?php echo $this->Paginator->sort('arch_loc_desc');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($archLocs as $archLoc):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $archLoc['ArchLoc']['id']; ?>&nbsp;</td>
		<td><?php echo $archLoc['ArchLoc']['arch_loc']; ?>&nbsp;</td>
		<td><?php echo $archLoc['ArchLoc']['arch_loc_desc']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $archLoc['ArchLoc']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $archLoc['ArchLoc']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $archLoc['ArchLoc']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $archLoc['ArchLoc']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Arch Loc', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tablets', true), array('controller' => 'tablets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablet', true), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
	</ul>
</div>