<div class="terms view">
<h2><?php  __('Term');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $term['Term']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Word Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($term['WordType']['id'], array('controller' => 'word_types', 'action' => 'view', $term['WordType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Term'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $term['Term']['term']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comments'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $term['Term']['comments']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Term', true), array('action' => 'edit', $term['Term']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Term', true), array('action' => 'delete', $term['Term']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $term['Term']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Terms', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Term', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Word Types', true), array('controller' => 'word_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Word Type', true), array('controller' => 'word_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fish', true), array('controller' => 'fish', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fish', true), array('controller' => 'fish', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tablets', true), array('controller' => 'tablets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablet', true), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Fish');?></h3>
	<?php if (!empty($term['Fish'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Term Id'); ?></th>
		<th><?php __('Ed Fish'); ?></th>
		<th><?php __('Archaic Fish'); ?></th>
		<th><?php __('Comments'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($term['Fish'] as $fish):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $fish['id'];?></td>
			<td><?php echo $fish['term_id'];?></td>
			<td><?php echo $fish['ed_fish'];?></td>
			<td><?php echo $fish['archaic_fish'];?></td>
			<td><?php echo $fish['comments'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'fish', 'action' => 'view', $fish['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'fish', 'action' => 'edit', $fish['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'fish', 'action' => 'delete', $fish['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $fish['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Fish', true), array('controller' => 'fish', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tablets');?></h3>
	<?php if (!empty($term['Tablet'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Arch Loc Id'); ?></th>
		<th><?php __('Arch Site Id'); ?></th>
		<th><?php __('Period Id'); ?></th>
		<th><?php __('Genre Id'); ?></th>
		<th><?php __('Month Id'); ?></th>
		<th><?php __('Year Id'); ?></th>
		<th><?php __('Collection Id'); ?></th>
		<th><?php __('No Arch'); ?></th>
		<th><?php __('No Museum'); ?></th>
		<th><?php __('No Cdli'); ?></th>
		<th><?php __('No Etcsl'); ?></th>
		<th><?php __('No Perso'); ?></th>
		<th><?php __('Size'); ?></th>
		<th><?php __('Date Day'); ?></th>
		<th><?php __('Date Month'); ?></th>
		<th><?php __('Subject'); ?></th>
		<th><?php __('Translit'); ?></th>
		<th><?php __('Translation'); ?></th>
		<th><?php __('Abstract'); ?></th>
		<th><?php __('Epi Notes'); ?></th>
		<th><?php __('Comments'); ?></th>
		<th><?php __('Publications'); ?></th>
		<th><?php __('Typography Id'); ?></th>
		<th><?php __('Project Id'); ?></th>
		<th><?php __('Ruler Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($term['Tablet'] as $tablet):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tablet['id'];?></td>
			<td><?php echo $tablet['arch_loc_id'];?></td>
			<td><?php echo $tablet['arch_site_id'];?></td>
			<td><?php echo $tablet['period_id'];?></td>
			<td><?php echo $tablet['genre_id'];?></td>
			<td><?php echo $tablet['month_id'];?></td>
			<td><?php echo $tablet['year_id'];?></td>
			<td><?php echo $tablet['collection_id'];?></td>
			<td><?php echo $tablet['no_arch'];?></td>
			<td><?php echo $tablet['no_museum'];?></td>
			<td><?php echo $tablet['no_cdli'];?></td>
			<td><?php echo $tablet['no_etcsl'];?></td>
			<td><?php echo $tablet['no_perso'];?></td>
			<td><?php echo $tablet['size'];?></td>
			<td><?php echo $tablet['date_day'];?></td>
			<td><?php echo $tablet['date_month'];?></td>
			<td><?php echo $tablet['subject'];?></td>
			<td><?php echo $tablet['translit'];?></td>
			<td><?php echo $tablet['translation'];?></td>
			<td><?php echo $tablet['abstract'];?></td>
			<td><?php echo $tablet['epi_notes'];?></td>
			<td><?php echo $tablet['comments'];?></td>
			<td><?php echo $tablet['publications'];?></td>
			<td><?php echo $tablet['typography_id'];?></td>
			<td><?php echo $tablet['project_id'];?></td>
			<td><?php echo $tablet['ruler_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tablets', 'action' => 'view', $tablet['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tablets', 'action' => 'edit', $tablet['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tablets', 'action' => 'delete', $tablet['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tablet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tablet', true), array('controller' => 'tablets', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
