<div class="wordTypes index">
	<h2><?php __('Word Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('word_type');?></th>
			<th><?php echo $this->Paginator->sort('parent_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($wordTypes as $wordType):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $this->Html->link($wordType['WordType']['word_type'], array('controller' => 'word_types', 'action' => 'view', $wordType['WordType']['id'])); ?>
</td>
		<td>
			<?php // echo $this->Html->link($wordType['WordType']['tt'], array('controller' => 'word_types', 'action' => 'view', $wordType['WordType']['ParentWordType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $wordType['WordType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $wordType['WordType']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $wordType['WordType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wordType['WordType']['id'])); ?>
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
