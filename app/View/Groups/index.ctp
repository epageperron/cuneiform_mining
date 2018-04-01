<div class="groups index">
	<h2><?php __('Groups');?></h2>
	<?php
	foreach ($groups as $group):

	?>
<h3><?php echo $group['Group']['group']; ?></h3>
<?php echo $this->Html->link(__('View', true), array('action' => 'view', $group['Group']['id'])); ?>
<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $group['Group']['id'])); ?>
<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $group['Group']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $group['Group']['id'])); ?>
		<table>
		<caption>Associated tablets</caption>
		<tr>
		<th><?php echo $this->Paginator->sort('no_perso');?></th>
		<th><?php echo $this->Paginator->sort('no_museum');?></th>
		<th><?php echo $this->Paginator->sort('no_cdli');?></th>
		<th><?php echo $this->Paginator->sort('period_id');?></th>
		<th><?php echo $this->Paginator->sort('ruler_id');?></th>
		<th><?php echo $this->Paginator->sort('date_year');?></th>
		<th><?php echo $this->Paginator->sort('date_month');?></th>
		<th ><?php echo $this->Paginator->sort('official_id'); ?></th>
		<th><?php echo $this->Paginator->sort('subject');?></th>
		<th><?php echo $this->Paginator->sort('Word');?></th>
		<th class="actions"><?php __('Actions');?></th>
		</tr>
			<?php
			$i = 0;
			foreach ($group['Tablet'] as $tablet):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
		<td>
		<?php echo $this->Html->link(__($tablet['no_perso'], true), array('controller' => 'tablets', 'action' => 'view', $tablet['id'])); ?></td>
				<td>
		<?php echo $tablet['no_museum'] ?></td>
		<td> <a href="http://cdli.ucla.edu/<?php echo $tablet['no_cdli'];?>" title="Link to CDLI entry" target="_cdli"><?php echo $tablet['no_cdli']; ?></a></td>

		<td>
					<?php echo $this->Html->link($tablet['Period']['period'], array('controller' => 'terms', 'action' => 'view', $tablet['period_id'])); ?>
				</td>
		<td>
					<?php echo $this->Html->link($tablet['Ruler']['term'], array('controller' => 'terms', 'action' => 'view', $tablet['ruler_id'])); ?>
				</td>
			<td>
					<?php echo $tablet['date_year']; ?>
				</td>
				<td>
					<?php echo $this->Html->link($tablet['Month']['month'], array('controller' => 'months', 'action' => 'view', $tablet['date_month'])); ?>
				</td>



				<td >
					<?php echo $this->Html->link($tablet['Official']['term'], array('controller' => 'terms', 'action' => 'view', $tablet['Official']['id'])); ?>

				</td>

						<td><?php echo $tablet['subject']; ?></td>
						<td><?php
						if ($tablet['Word']):
						foreach ($tablet['Word'] as $word):
						echo $this->Html->link($word['word'], array('controller' => 'words', 'action' => 'view', $word['id']));
						echo ' ';
						endforeach; endif; ?>

						</td>
				<td class="actions">

					<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tablets', 'action' => 'edit', $tablet['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Group', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tablets', true), array('controller' => 'tablets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablet', true), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
	</ul>
</div>
