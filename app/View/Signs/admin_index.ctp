<div class="signs index">
	<h2><?php echo __('Signs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sign_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sign'); ?></th>
			<th><?php echo $this->Paginator->sort('lak'); ?></th>
			<th><?php echo $this->Paginator->sort('rosen'); ?></th>
			<th><?php echo $this->Paginator->sort('comments'); ?></th>
			<th><?php echo $this->Paginator->sort('bibliography'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($signs as $sign): ?>
	<tr>
		<td><?php echo h($sign['Sign']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sign['SignType']['sign_type'], array('controller' => 'sign_types', 'action' => 'view', $sign['SignType']['id'])); ?>
		</td>
		<td><?php echo h($sign['Sign']['sign']); ?>&nbsp;</td>
		<td><?php echo h($sign['Sign']['lak']); ?>&nbsp;</td>
		<td><?php echo h($sign['Sign']['rosen']); ?>&nbsp;</td>
		<td><?php echo h($sign['Sign']['comments']); ?>&nbsp;</td>
		<td><?php echo h($sign['Sign']['bibliography']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sign['Sign']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sign['Sign']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sign['Sign']['id']), null, __('Are you sure you want to delete # %s?', $sign['Sign']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Sign'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sign Types'), array('controller' => 'sign_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sign Type'), array('controller' => 'sign_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Readings'), array('controller' => 'readings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Readings'), array('controller' => 'readings', 'action' => 'add')); ?> </li>
	</ul>
</div>
