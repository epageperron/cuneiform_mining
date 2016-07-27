<div class="signs view">
<h2><?php  echo __('Sign'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sign['Sign']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sign Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sign['SignType']['sign_type'], array('controller' => 'sign_types', 'action' => 'view', $sign['SignType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sign'); ?></dt>
		<dd>
			<?php echo h($sign['Sign']['sign']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lak'); ?></dt>
		<dd>
			<?php echo h($sign['Sign']['lak']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rosen'); ?></dt>
		<dd>
			<?php echo h($sign['Sign']['rosen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($sign['Sign']['comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bibliography'); ?></dt>
		<dd>
			<?php echo h($sign['Sign']['bibliography']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sign'), array('action' => 'edit', $sign['Sign']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sign'), array('action' => 'delete', $sign['Sign']['id']), null, __('Are you sure you want to delete # %s?', $sign['Sign']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Signs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sign'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sign Types'), array('controller' => 'sign_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sign Type'), array('controller' => 'sign_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Readings'), array('controller' => 'readings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Readings'), array('controller' => 'readings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Readings'); ?></h3>
	<?php if (!empty($sign['Readings'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Reading'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th><?php echo __('Sign Id'); ?></th>
		<th><?php echo __('Reading File'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sign['Readings'] as $readings): ?>
		<tr>
			<td><?php echo $readings['id']; ?></td>
			<td><?php echo $readings['reading']; ?></td>
			<td><?php echo $readings['comments']; ?></td>
			<td><?php echo $readings['sign_id']; ?></td>
			<td><?php echo $readings['reading_file']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'readings', 'action' => 'view', $readings['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'readings', 'action' => 'edit', $readings['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'readings', 'action' => 'delete', $readings['id']), null, __('Are you sure you want to delete # %s?', $readings['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Readings'), array('controller' => 'readings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
