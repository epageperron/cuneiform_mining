<div class="tablets typology">
	<h2><?php __('Tablets');?></h2>


	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>Ids</th>
			<th>Period</th>
			<th>Year</th>
			<th>Month</th>
			<th>Day</th>
			<th>Archive</th>
			<th>Transaction(s) (verb)</th>
			<th>Topic (goods)</th>


	</tr>
	<?php
	$i = 0;
	foreach ($tablets as $tablet):
		if ($tablet['Transac']):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
<td>
<a href="/tablets/view/<?php echo $tablet['Tablet']['no_perso'] ?>"><?php echo $tablet['Tablet']['no_perso'] ?></a> (<a href="https://cdli.ucla.edu/<?php echo $tablet['Tablet']['no_cdli']; ?>"><?php echo $tablet['Tablet']['no_cdli']; ?></a>)
</td>
<td>
<?php echo $tablet['Tablet']['Period'] ?>
</td>
<td>
<?php echo $tablet['Tablet']['Year'] ?>
</td>
<td>
<?php echo $tablet['Tablet']['Month'] ?>
</td>
<td>
<?php echo $tablet['Tablet']['Day'] ?>
</td>

	<?php
	$i = 0;
	foreach ($tablet['Transac'] as $transaction):
		echo "<td>";
		echo $transaction['MainAction'];
		echo " (";
		echo $transaction['Verb'];
		echo ")" ;
		echo "</td><td>";
		echo $transaction['MainTopic'];
		echo " (";
		echo $transaction['Good'];
		echo ")" ;
		echo "</td>";
endforeach;?>
</tr>
<?php
endif;
endforeach;
?>
	</table>

</div>
