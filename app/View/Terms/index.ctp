<div class="terms index">
<h2><?php __('Terms');?></h2>
<?php echo $this->Filter->filterForm('Term', array('legend' => 'Search')); ?>
<table cellpadding="0" cellspacing="0">
  <tr>
    <th><?php echo $this->Paginator->sort('term'); ?></th>
    <th><?php echo $this->Paginator->sort('word'); ?></th>
   <th><?php echo $this->Paginator->sort('translation'); ?></th>
    <th><?php echo $this->Paginator->sort('comments'); ?></th>
    <th class="actions"><?php echo __('Actions'); ?></th>
  </tr>
<?php
$class='';
$i = 0;
foreach ($terms as $term){
$i++;
if ($i % 2 == 0) {
$class = 'class="altrow"';}
?>
<tr<?php echo $class;?>>
<td>
<?php
echo $this->Html->link($term['Term']['term'], array('controller' => 'terms', 'action' => 'view', $term['Term']['id'])); ?>
</td>
<td>
<?php
foreach ($term['Word'] as $word):
?>
<?php echo $this->Html->link($word['word'], array('controller' => 'words', 'action' => 'view', $word['id'])); ?>

<?php// foreach ($word['WordType'] as $word_type): ?>
<?php //echo $this->Html->link($word_type['word_type'], array('controller' => 'word_types', 'action' => 'view', $word_type['id'])); ?>
<?php //echo ' ';?>
<?php //endforeach;
//echo ')';
endforeach;?>
</td>
<td>
  <?php echo $term['Term']['translation']; ?>
</td>
<td>
  <?php echo $term['Term']['comments']; ?>
</td>
<td class="actions" width="100">
		<?php echo $this->Html->link(__('Create Word', true), array('controller' => 'terms', 'action' => 'word_from_term', $term['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $term['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $term['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $term['id'])); ?>
</td>
	</tr>
<?php } ?>
	</table>
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
