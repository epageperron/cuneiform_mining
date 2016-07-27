<div class="genres view">
<h2><?php  __('Genre');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $genre['Genre']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Genre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $genre['Genre']['genre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parent Genre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($genre['ParentGenre']['genre'], array('controller' => 'genres', 'action' => 'view', $genre['ParentGenre']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Genre', true), array('action' => 'edit', $genre['Genre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Genre', true), array('action' => 'delete', $genre['Genre']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $genre['Genre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres', true), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Genre', true), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tablets', true), array('controller' => 'tablets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablet', true), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Genres');?></h3>
	<?php if (!empty($genre['ChildGenre'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Genre'); ?></th>
		<th><?php __('Parent Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($genre['ChildGenre'] as $childGenre):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $childGenre['id'];?></td>
			<td><?php echo $childGenre['genre'];?></td>
			<td><?php echo $childGenre['parent_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'genres', 'action' => 'view', $childGenre['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'genres', 'action' => 'edit', $childGenre['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'genres', 'action' => 'delete', $childGenre['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $childGenre['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Genre', true), array('controller' => 'genres', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tablets');?></h3>
	<?php if (!empty($genre['Tablet'])):?>
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
		<th><?php __('Project Id'); ?></th>
		<th><?php __('Ruler Id'); ?></th>
		<th><?php __('Main Verb Id'); ?></th>
		<th><?php __('Official Id'); ?></th>
		<th><?php __('From Person Id'); ?></th>
		<th><?php __('To Person Id'); ?></th>
		<th><?php __('From Location Id'); ?></th>
		<th><?php __('To Location Id'); ?></th>
		<th><?php __('Main Action Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($genre['Tablet'] as $tablet):
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
			<td><?php echo $tablet['project_id'];?></td>
			<td><?php echo $tablet['ruler_id'];?></td>
			<td><?php echo $tablet['main_verb_id'];?></td>
			<td><?php echo $tablet['official_id'];?></td>
			<td><?php echo $tablet['from_person_id'];?></td>
			<td><?php echo $tablet['to_person_id'];?></td>
			<td><?php echo $tablet['from_location_id'];?></td>
			<td><?php echo $tablet['to_location_id'];?></td>
			<td><?php echo $tablet['main_action_id'];?></td>
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
