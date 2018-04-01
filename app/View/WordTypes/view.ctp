<div class="wordTypes view">
<h2>Word type

<?php echo $this->Html->link($wordType['ParentWordType']['word_type'], array('controller' => 'word_types', 'action' => 'view', $wordType['ParentWordType']['id'])); ?>: <?php if ($wordType['ParentWordType']['id']!='') {echo"  :";}  echo $wordType['WordType']['word_type']; ?>
</h2>
</div>
<div class="related">
	<h3><?php __('Related Words');?></h3>
	<?php if (!empty($wordType['Word'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th>No</th>
		<th>Word</th>
		<th>Translation</th>
		<th>Comments</th>
			<th>Terms</th>
		<th class="actions">Actions</th>
	</tr>
	<?php
		$i = 0;
		foreach ($wordType['Word'] as $word):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
	<td><?php $z++; echo $z; ?></td>
			<td><?php echo $this->Html->link($word['word'], array('controller' => 'words', 'action' => 'view', $word['id'])); ?></td>
	<td><?php echo $word['translation'];?></td>
			<td><?php echo $word['comments'];?></td>
			<td><?php
		$j=0;
		foreach ($word['Term'] as $v) {
		  if ($j!=0) {echo ' | ';}
		  echo $this->Html->link($word['Term'][$j]['term'], array('controller' => 'terms', 'action' => 'view', $word['Term'][$j]['id']));
		  $j++;} ?></rd>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'words', 'action' => 'view', $word['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'words', 'action' => 'edit', $word['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'words', 'action' => 'delete', $word['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $word['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
