<div class="tablets index">
	<h2><?php __('Tablets');?></h2>
<?php echo $this->Filter->filterForm('Tablet', array('legend' => 'Search')); ?>
	<div class="paging">
		<p>
	<?php
	echo $this->Paginator->counter(
    'Page {:page} of {:pages}, showing {:current} records out of
     {:count} total, starting on record {:start}, ending on {:end}'
);

?>	</p>
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('no_perso');?></th>
			<th><?php echo $this->Paginator->sort('no_museum');?></th>
			<th><?php echo $this->Paginator->sort('no_cdli');?></th>
			<th><?php echo $this->Paginator->sort('arch_site');?></th>
			<th><?php echo $this->Paginator->sort('period_id');?></th>
			<th><?php echo $this->Paginator->sort('ruler_id');?></th>
			<th><?php echo $this->Paginator->sort('date_year');?></th>
			<th><?php echo $this->Paginator->sort('date_month');?></th>
			<th ><?php echo $this->Paginator->sort('official_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subject');?></th>
			<th><?php echo $this->Paginator->sort('Actions');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tablets as $tablet):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
<td>
<?php echo $tablet['Tablet']['id']; ?></td>

	<td>
<?php echo $this->Html->link(__($tablet['Tablet']['no_perso'], true), array('action' => 'view', $tablet['Tablet']['id'])); ?></td>
		<td>
<?php echo $tablet['Tablet']['no_museum'] ?></td>
<td> <a href="http://cdli.ucla.edu/<?php echo $tablet['Tablet']['no_cdli'];?>" title="Link to CDLI entry" target="_cdli"><?php echo $tablet['Tablet']['no_cdli']; ?></a></td>
<td>
			<?php echo $this->Html->link($tablet['ArchSite']['arch_site'], array('controller' => 'arch_sites', 'action' => 'view', $tablet['Tablet']['period_id'])); ?>
		</td>
<td>
			<?php echo $this->Html->link($tablet['Period']['period'], array('controller' => 'periods', 'action' => 'view', $tablet['Tablet']['arch_site_id'])); ?>
		</td>
<td>
			<?php echo $this->Html->link($tablet['Ruler']['term'], array('controller' => 'terms', 'action' => 'view', $tablet['Tablet']['ruler_id'])); ?>
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

				<td><?php echo $tablet['Tablet']['subject']; ?></td>
				<td>
				<?php
				if (!empty($tablet['Action'])){
				foreach ($tablet['Action'] as $action) {
				echo $this->Html->link($action['action'], array('controller' => 'actions', 'action' => 'view', $action['id']));
				echo ' ';
			}}
				?>
				</td>
		<td class="actions">

			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tablet['Tablet']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tablet['Tablet']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tablet['Tablet']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>


	<div class="paging">
	<p>
	<?php
	echo $this->Paginator->counter(
    'Page {:page} of {:pages}, showing {:current} records out of
     {:count} total, starting on record {:start}, ending on {:end}'
);

?>	</p>
	<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
