<?php print_r $mainActions; ?>

<div class="transacs index">
	<h2><?php __('Transacs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('main_action');?></th>
			<th><?php echo $this->Paginator->sort('verb_id');?></th>
			<th><?php echo $this->Paginator->sort('main_topic');?></th>
			<th><?php echo $this->Paginator->sort('good_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($transacs as $transac):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $transac['Transac']['id']; ?>&nbsp;</td>
		<td><?php echo $mainAopics[$transac['Transac']['action_id']]; ?>&nbsp;</td>
		<td><?php echo $terms[$transac['Transac']['verb_id']]; ?>&nbsp;</td>
				<td><?php echo $mainTopics[$transac['Transac']['topic_id']]; ?>&nbsp;</td>
						<td><?php echo $terms[$transac['Transac']['good_id']]; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $transac['Transac']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $transac['Transac']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $transac['Transac']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $transac['Transac']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Transac', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tablets', true), array('controller' => 'tablets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablet', true), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
	</ul>
</div>
