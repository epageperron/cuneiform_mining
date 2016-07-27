<div class="tags view">
	<h2>Tag : <?php echo $tag['Tag']['tag']; ?></h2>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tag', true), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tag', true), array('action' => 'delete', $tag['Tag']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag', true), array('action' => 'add')); ?> </li>
	</ul>
</div>

<table>
<caption>Associated tablets (<?php echo key( array_slice( $tag['Tablet'], -1, 1, TRUE ) );?>)</caption>
<tr>
<th><?php echo $this->Paginator->sort('no_perso');?></th>
<th><?php echo $this->Paginator->sort('no_museum');?></th>
<th><?php echo $this->Paginator->sort('no_cdli');?></th>
<th><?php echo $this->Paginator->sort('genre_id');?></th>
<th><?php echo $this->Paginator->sort('period_id');?></th>
<th><?php echo $this->Paginator->sort('ruler_id');?></th>
<th><?php echo $this->Paginator->sort('date_year');?></th>
<th><?php echo $this->Paginator->sort('date_month');?></th>
<th ><?php echo $this->Paginator->sort('official_id'); ?></th>
<th><?php echo $this->Paginator->sort('subject');?></th>
<th class="actions">Actions</th>
</tr>
	<?php
	$i = 0;
	foreach ($tag['Tablet'] as $tablet):
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
			<?php echo $this->Html->link($tablet['Genre']['genre'], array('controller' => 'genres', 'action' => 'view', $tablet['genre_id'])); ?>
		</td>
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

		<td>
			<?php echo $tablet['subject'] ?>
		</td>



		<td class="actions">

			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tablet['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tablet['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tablet['Tablet']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
