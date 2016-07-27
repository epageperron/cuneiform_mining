<div class="tablets typology">
	<h2><?php __('Tablets');?></h2>


	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>main action - verb</th>
			<th>date</th>
			<th>nos</th>
			
	</tr>
	<?php
	$i = 0;
	foreach ($tablets as $tablet):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		
<td>
<?php echo $tablet['MainAction']['main_action']; ?>
{<?php echo $tablet['MainVerb']['term']; ?>}
</td>
<td>
<?php echo $tablet['Ruler']['term']; ?>  <?php echo $tablet['Year']['year']; ?>
</td>	
<td>
 <?php echo $tablet['Tablet']['no_perso'] ?> (<?php echo $tablet['Tablet']['no_cdli']; ?>)
</td>
	</tr>
<?php endforeach; ?>
	</table>
	
</div>