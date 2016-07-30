<div class="words index">
<h2><?php echo __('Words');
$z=0;?></h2>
<div class="paging">
<?php
echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
echo $this->Paginator->numbers(array('separator' => ' '));
echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
?>
</div>
<table cellpadding="0" cellspacing="0">
<tr>
<th>No</th>
<th><?php echo $this->Paginator->sort('word'); ?></th>
<th><?php echo $this->Paginator->sort('word_types'); ?></th>
<th><?php echo $this->Paginator->sort('terms'); ?></th>
<th><?php echo $this->Paginator->sort('translation'); ?></th>
<th><?php echo $this->Paginator->sort('comments'); ?></th>
<th><?php echo $this->Paginator->sort('periods'); ?></th>
<th><?php echo $this->Paginator->sort('bibliography'); ?></th>
<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
<?php foreach ($words as $word): ?>
<tr>
<td><?php $z++; echo $z; ?></td>
  <td>
<?php echo $this->Html->link(h($word['Word']['word']), array('controller' => 'words','action' => 'view', $word['Word']['id'])); ?></td>
<td>
<?php
$j=0;
foreach ($word['WordType'] as $word_type):
if ($j!=0) {echo ' | ';}
echo $this->Html->link($word_type['word_type'], array('controller' => 'word_types', 'action' => 'view', $word_type['id']));
$j++;
endforeach;
?>
&nbsp;&nbsp;&nbsp;

</td>
<td>
<?php
$j=0;
foreach ($word['Term'] as $v) {
if ($j!=0) {echo ' | ';}
echo $this->Html->link($word['Term'][$j]['term'], array('controller' => 'terms', 'action' => 'view', $word['Term'][$j]['id']));
$j++;} ?></td>
<td><?php echo h($word['Word']['translation']); ?>&nbsp;</td>
<td><?php echo h($word['Word']['comments']); ?>&nbsp;</td>
<td>
Word->terms->tablets->period
</td>
<td><?php echo h($word['Word']['bibliography']); ?>&nbsp;</td>
<td class="actions">

<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $word['Word']['id'])); ?>
<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $word['Word']['id']), null, __('Are you sure you want to delete # %s?', $word['Word']['id'])); ?>
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
echo $this->Paginator->numbers(array('separator' => ' '));
echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
?>
</div>
</div>
<div class="actions">
<h3><?php echo __('Actions'); ?></h3>
<ul>
<li><?php echo $this->Html->link(__('New Word'), array('action' => 'add')); ?></li>
<li><?php echo $this->Html->link(__('List Word Types'), array('controller' => 'word_types', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('New Word Type'), array('controller' => 'word_types', 'action' => 'add')); ?> </li>
<li><?php echo $this->Html->link(__('List Terms'), array('controller' => 'terms', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('New Terms'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
</ul>
</div>
