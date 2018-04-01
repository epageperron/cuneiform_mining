<div class="transacs view">
<h2><?php echo __('Transac'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transac['Transac']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main Action'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transac['MainAction']['main_action'], array('controller' => 'main_actions', 'action' => 'view', $transac['MainAction']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Verb'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transac['Verb']['term'], array('controller' => 'verbs', 'action' => 'view', $transac['Verb']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main Topic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transac['MainTopic']['main_topic'], array('controller' => 'main_topics', 'action' => 'view', $transac['MainTopic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Good'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transac['Good']['term'], array('controller' => 'goods', 'action' => 'view', $transac['Good']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transac'), array('action' => 'edit', $transac['Transac']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transac'), array('action' => 'delete', $transac['Transac']['id']), array(), __('Are you sure you want to delete # %s?', $transac['Transac']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transacs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transac'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Main Actions'), array('controller' => 'main_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Main Action'), array('controller' => 'main_actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Verbs'), array('controller' => 'verbs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Verb'), array('controller' => 'verbs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Main Topics'), array('controller' => 'main_topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Main Topic'), array('controller' => 'main_topics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goods'), array('controller' => 'goods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Good'), array('controller' => 'goods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tablets'), array('controller' => 'tablets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tablet'), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tablets'); ?></h3>
	<?php if (!empty($transac['Tablet'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Arch Loc Id'); ?></th>
		<th><?php echo __('Arch Site Id'); ?></th>
		<th><?php echo __('Period Id'); ?></th>
		<th><?php echo __('Period Uncertain'); ?></th>
		<th><?php echo __('Genre Id'); ?></th>
		<th><?php echo __('Genre Uncertain'); ?></th>
		<th><?php echo __('Is School Text'); ?></th>
		<th><?php echo __('Month Id'); ?></th>
		<th><?php echo __('Year Id'); ?></th>
		<th><?php echo __('Date Day'); ?></th>
		<th><?php echo __('Date Month'); ?></th>
		<th><?php echo __('Date Year'); ?></th>
		<th><?php echo __('Collection Id'); ?></th>
		<th><?php echo __('No Arch'); ?></th>
		<th><?php echo __('No Museum'); ?></th>
		<th><?php echo __('No Cdli'); ?></th>
		<th><?php echo __('No Etcsl'); ?></th>
		<th><?php echo __('No Perso'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Translit'); ?></th>
		<th><?php echo __('Cdli Atf'); ?></th>
		<th><?php echo __('Translation'); ?></th>
		<th><?php echo __('Abstract'); ?></th>
		<th><?php echo __('Epi Notes'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th><?php echo __('Publications'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Ruler Id'); ?></th>
		<th><?php echo __('Local Ruler Id'); ?></th>
		<th><?php echo __('Official Id'); ?></th>
		<th><?php echo __('Collated'); ?></th>
		<th><?php echo __('Collated From Picture'); ?></th>
		<th><?php echo __('Arch Site Uncertain'); ?></th>
		<th><?php echo __('Shape Id'); ?></th>
		<th><?php echo __('Edge Id'); ?></th>
		<th><?php echo __('Corner Id'); ?></th>
		<th><?php echo __('Size Class Id'); ?></th>
		<th><?php echo __('Object Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($transac['Tablet'] as $tablet): ?>
		<tr>
			<td><?php echo $tablet['id']; ?></td>
			<td><?php echo $tablet['arch_loc_id']; ?></td>
			<td><?php echo $tablet['arch_site_id']; ?></td>
			<td><?php echo $tablet['period_id']; ?></td>
			<td><?php echo $tablet['period_uncertain']; ?></td>
			<td><?php echo $tablet['genre_id']; ?></td>
			<td><?php echo $tablet['genre_uncertain']; ?></td>
			<td><?php echo $tablet['is_school_text']; ?></td>
			<td><?php echo $tablet['month_id']; ?></td>
			<td><?php echo $tablet['year_id']; ?></td>
			<td><?php echo $tablet['date_day']; ?></td>
			<td><?php echo $tablet['date_month']; ?></td>
			<td><?php echo $tablet['date_year']; ?></td>
			<td><?php echo $tablet['collection_id']; ?></td>
			<td><?php echo $tablet['no_arch']; ?></td>
			<td><?php echo $tablet['no_museum']; ?></td>
			<td><?php echo $tablet['no_cdli']; ?></td>
			<td><?php echo $tablet['no_etcsl']; ?></td>
			<td><?php echo $tablet['no_perso']; ?></td>
			<td><?php echo $tablet['size']; ?></td>
			<td><?php echo $tablet['subject']; ?></td>
			<td><?php echo $tablet['translit']; ?></td>
			<td><?php echo $tablet['cdli_atf']; ?></td>
			<td><?php echo $tablet['translation']; ?></td>
			<td><?php echo $tablet['abstract']; ?></td>
			<td><?php echo $tablet['epi_notes']; ?></td>
			<td><?php echo $tablet['comments']; ?></td>
			<td><?php echo $tablet['publications']; ?></td>
			<td><?php echo $tablet['project_id']; ?></td>
			<td><?php echo $tablet['ruler_id']; ?></td>
			<td><?php echo $tablet['local_ruler_id']; ?></td>
			<td><?php echo $tablet['official_id']; ?></td>
			<td><?php echo $tablet['collated']; ?></td>
			<td><?php echo $tablet['collated_from_picture']; ?></td>
			<td><?php echo $tablet['arch_site_uncertain']; ?></td>
			<td><?php echo $tablet['shape_id']; ?></td>
			<td><?php echo $tablet['edge_id']; ?></td>
			<td><?php echo $tablet['corner_id']; ?></td>
			<td><?php echo $tablet['size_class_id']; ?></td>
			<td><?php echo $tablet['object_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tablets', 'action' => 'view', $tablet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tablets', 'action' => 'edit', $tablet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tablets', 'action' => 'delete', $tablet['id']), array(), __('Are you sure you want to delete # %s?', $tablet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tablet'), array('controller' => 'tablets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
