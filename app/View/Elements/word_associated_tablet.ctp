<table>
<caption>Associated tablets</caption>
<tr>
<th><?php echo $this->Paginator->sort('Term');?></th>
<th><?php echo $this->Paginator->sort('no_perso');?></th>
<th><?php echo $this->Paginator->sort('no_museum');?></th>
<th><?php echo $this->Paginator->sort('no_cdli');?></th>
<th><?php echo $this->Paginator->sort('period_id');?></th>
<th><?php echo $this->Paginator->sort('ruler_id');?></th>
<th><?php echo $this->Paginator->sort('date_year');?></th>
<th><?php echo $this->Paginator->sort('date_month');?></th>
<th ><?php echo $this->Paginator->sort('official_id'); ?></th>
<th><?php echo $this->Paginator->sort('subject');?></th>
<th><?php echo $this->Paginator->sort('Words');?></th>
<th><?php echo $this->Paginator->sort('Groups');?></th>
<th ><?php echo $this->Paginator->sort('Actions');?></th>
</tr>
	<?php
	$i = 0;
	foreach ($word['Term'] as $term):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>

<?php
	$i = 0;
	foreach ($term['Tablet'] as $tablet):	?>
<td>
  <?php echo $this->Html->link(__($term['term'], true), array('controller'=> 'terms', 'action' => 'view', $term['id'])); ?></td>
<td>
  <?php echo $this->Html->link(__($tablet['no_perso'], true), array('controller'=> 'tablets', 'action' => 'view', $tablet['id'])); ?></td>
<td>
  <?php echo $tablet['no_museum'] ?>
  </td>
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
				;endforeach; endif; ?>
				</td>
        <td><?php
        if ($tablet['Word']):
        foreach ($tablet['Group'] as $group):
        echo $this->Html->link($group['group'], array('controller' => 'groups', 'action' => 'view', $group['id']));
        echo ' ';
        ;endforeach; endif; ?>
        </td>
    <td>

			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tablet['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tablet['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tablet['Tablet']['id'])); ?>
		</td>
	</tr>
<?php endforeach;endforeach ?>
</table>
