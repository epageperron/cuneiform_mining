<div class="words view">
<h2><?php  echo __('Word'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($word['Word']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Word Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($word['WordType']['id'], array('controller' => 'word_types', 'action' => 'view', $word['WordType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Word'); ?></dt>
		<dd>
			<?php echo h($word['Word']['word']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Translation'); ?></dt>
		<dd>
			<?php echo h($word['Word']['translation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($word['Word']['comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bibliography'); ?></dt>
		<dd>
			<?php echo h($word['Word']['bibliography']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Word'), array('action' => 'edit', $word['Word']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Word'), array('action' => 'delete', $word['Word']['id']), null, __('Are you sure you want to delete # %s?', $word['Word']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Words'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Word'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Word Types'), array('controller' => 'word_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Word Type'), array('controller' => 'word_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terms'), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terms'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Terms'); ?></h3>
	<?php if (!empty($word['Terms'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Term'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th><?php echo __('Word Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($word['Terms'] as $terms): ?>
		<tr>
			<td><?php echo $terms['id']; ?></td>
			<td><?php echo $terms['term']; ?></td>
			<td><?php echo $terms['comments']; ?></td>
			<td><?php echo $terms['word_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'terms', 'action' => 'view', $terms['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'terms', 'action' => 'edit', $terms['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'terms', 'action' => 'delete', $terms['id']), null, __('Are you sure you want to delete # %s?', $terms['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Terms'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
