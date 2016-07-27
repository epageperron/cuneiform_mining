<?php 
$this->set('title', 'Search - ANE Tablets');
echo $this->Html->link('Add entry',array('controller' => 'tablets', 'action' => 'add'))?>
<table>
	<tr>
		<th>No.</th>
		<th>Museum number</th>
		<th>Pers. number</th>
		<th>CDLI link</th>
		<th>Actions</th>
	</tr>

	<!-- Here is where we loop through our $tablets array, printing out object info -->

<?php foreach ($results as $tablet): ?>
	<tr>
		<td><?php echo $this->Html->link($tablet['Tablet']['id'], array('controller' => 'tablets', 'action' => 'view', $tablet['Tablet']['id'])); ?>
		</td>
		<td>
			<?php echo $tablet['Tablet']['no_museum']?>
		</td>	
	<td>
			<?php echo $tablet['Tablet']['no_perso']?>
		</td>

		<td> <a href="http://cdli.ucla.edu/?php echo $tablet['Tablet']['no_cdli']; ?>" title="Link to CDLI entry" target="_cdli"><?php echo $tablet['Tablet']['no_cdli']; ?></a></td>
		<td>
		<?php echo $this->Html->link('Edit', array('action'=>'edit/'.$tablet['Tablet']['id'] ));?>
		<br />
		<?php echo $this->Html->link('Delete', array('action' => 'delete/'.$tablet['Tablet']['id']), null, 'Are you sure?' )?>
		
		</td>

	</tr>
<?php endforeach; ?>
