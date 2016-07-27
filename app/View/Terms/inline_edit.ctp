<div class="terms index">
	<h2><?php __('Terms');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>Term</th>
			<th>Word (Word type)</th>
	<th>Word type</th>		
		<th>Variants</th>
			<th>Comments</th>
			<th>Bibliography</th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($terms as $term){
	/*if ( $term['Term']['parent_id'] != 0 ){}
	else { */
	$class = null;
	$i++;
	if ($i % 2 == 0) {
	$class = 'class="altrow"';
	?>
<tr<?php echo $class;?>>
<td>	
<?php 
echo $this->Form->create('Term', array('action' => 'edit'));
?>
<div id="term_<?php echo $term['Term']['id']; ?>"><?php echo $term['Term']['term']; ?></div>
</td>
<td>
	<?php 	echo $this->Form->input('Word.Word', array('type' => 'select', 'multiple' => 'true', 'empty' => '     '));
 ?>
	
	
	<a href="/terms/wordFromTerm/<?php echo $term['Term']['id']?>">create word</a>
</td>
<td>
word type
</td>
<td>
echo variants (terms under the same word)
</td>
<td>
<?php echo $this->Form->input('comments');?>
</td>
<td>
<?php echo $this->Form->input('bibliography'); ?>
</td>
<td class="actions">
<?php 
echo $this->Form->input('id', array('type' => 'hidden')); 
echo $this->Form->end('Save');
echo $this->Html->link(__('View', true), array('action' => 'view', $term['Term']['id']));
echo $this->Html->link(__('Edit', true), array('action' => 'edit', $term['Term']['id']));
echo $this->Html->link(__('Delete', true), array('action' => 'delete', $term['Term']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $term['Term']['id'])); ?>
		</td>
	</tr>
<?php }}/* }*/?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
	</div>	