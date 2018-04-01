<div class="transacs index">
	<h2><?php echo __('Transacs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th>Ids</th>
		<th>Period</th>
		<th>Year</th>
		<th>Month</th>
		<th>Day</th>
		<th>Groups</th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('main_action_id'); ?></th>
			<th><?php echo $this->Paginator->sort('verb_id'); ?></th>
			<th><?php echo $this->Paginator->sort('main_topic_id'); ?></th>
			<th><?php echo $this->Paginator->sort('good_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($transacs as $transac):
				foreach ($transac['Tablet'] as $tablet):
		 ?>
<tr>
		 <td>
		 <a href="/tablets/view/<?php echo $tablet['no_perso'] ?>"><?php echo $tablet['no_perso']; ?></a> (<a href="https://cdli.ucla.edu/<?php echo $tablet['no_cdli']; ?>"><?php echo $tablet['no_cdli']; ?></a>)
		 </td>
		 <td>
		 <?php echo $periods[$tablet['period_id']]; ?>
		 </td>
		 <td>
		 <?php echo $tablet['Year']['year'] ?> (<?php echo $tablet['date_year'] ?>)
		 </td>
		 <td>
		 <?php echo $tablet['Month']['month'] ?>(<?php echo $tablet['date_month'] ?>)
		 </td>
		 <td>
		 <?php echo $tablet['date_day'] ?>
		 </td>
		 <td>
		 <?php echo $tablet['Group']['group'] ?>
		 </td>
		<td><?php echo h($transac['Transac']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($transac['MainAction']['main_action'], array('controller' => 'main_actions', 'action' => 'view', $transac['MainAction']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transac['Verb']['term'], array('controller' => 'verbs', 'action' => 'view', $transac['Verb']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transac['MainTopic']['main_topic'], array('controller' => 'main_topics', 'action' => 'view', $transac['MainTopic']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transac['Good']['term'], array('controller' => 'goods', 'action' => 'view', $transac['Good']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $transac['Transac']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $transac['Transac']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $transac['Transac']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $transac['Transac']['id']))); ?>
		</td>
	</tr>
<?php endforeach; endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Transac'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Main Actions'), array('controller' => 'main_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Main Action'), array('controller' => 'main_actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Verbs'), array('controller' => 'verbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Verb'), array('controller' => 'verbs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Main Topics'), array('controller' => 'main_topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Main Topic'), array('controller' => 'main_topics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goods'), array('controller' => 'goods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Good'), array('controller' => 'goods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tablets'), array('controller' => 'tablets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablet'), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
	</ul>
</div>
