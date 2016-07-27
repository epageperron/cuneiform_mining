<!-- File: /app/views/tablets/view.ctp -->
<div class="tablets view">
<h2><?php  __('View a Tablet');?></h2>
<?php

echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tablet['Tablet']['id'])); ?>
<fieldset><legend>Identification</legend>
<?php echo $tablet['Tablet']['no_perso']; ?> - <a href="http://cdli.ucla.edu/<?php echo $tablet['Tablet']['no_cdli']; ?>" title="Link to CDLI entry" target="_cdli"><?php echo $tablet['Tablet']['no_cdli']; ?></a><br />
<?php echo $tablet['Tablet']['no_museum']; ?> <?php echo $tablet['Collection']['collection']; ?><br /><br />

<?php echo $tablet['Period']['period']; ?><?php if ($tablet['Tablet']['period_uncertain'] == 1)echo "?"; ?><?php echo " "; ?>
<?php echo $tablet['Genre']['genre']; ?><?php if ($tablet['Tablet']['genre_uncertain'] == 1)echo "?"; ?><?php echo " "; ?>
<?php echo $tablet['ObjectType']['object_type']; ?> from
<?php echo $tablet['ArchSite']['arch_site']; ?><?php if ($tablet['Tablet']['arch_site_uncertain'] == 1)echo "?"; ?><br />
<br /><br />
<?php echo $tablet['Tablet']['publications']; ?>

</fieldset>
<fieldset>
<legend>Epigraphic Information</legend>

Size: <?php echo $tablet['Tablet']['size']; ?> (<?php echo $tablet['SizeClass']['size_class']; ?>)  <br />
Shape: <?php echo $tablet['Shape']['shape']; ?><br />
Edges: <?php echo $tablet['Edge']['edge']; ?><br />
Corners : <?php echo $tablet['Corner']['corner']; ?><br />
Sign Paleography elements : <?php
			$j=0;
			foreach ($tablet['SignPaleo'] as $v) {
				if ($j!=0) {echo ' | ';}
		echo $this->Html->link($v['sign_paleo'], array('controller' => 'sign_paleos', 'action' => 'view',$v['id']));
		$j++;} ?> <br />
Epigraphic notes: <?php echo $tablet['Tablet']['epi_notes']; ?>
</fieldset>
<fieldset>
<legend>Home classification</legend>
Project(s): <?php echo $tablet['Project']['project']; ?><br />
Group(s) :
			<?php
			$j=0;
			foreach ($tablet['Group'] as $v) {
				if ($j!=0) {echo ' | ';}
		echo $this->Html->link($v['group'], array('controller' => 'groups', 'action' => 'view', $v['id']));
		$j++;} ?>
<br />
Keywords :
			<?php
			$j=0;
			foreach ($tablet['Keyword'] as $v) {
				if ($j!=0) {echo ' | ';}
		echo $this->Html->link($v['keyword'], array('controller' => 'keywords', 'action' => 'view', $v['id']));
		$j++;} ?>

<br />
Tags :
			<?php
			$j=0;
			foreach ($tablet['Tag'] as $v) {
				if ($j!=0) {echo ' | ';}
		echo $this->Html->link($v['tag'], array('controller' => 'tags', 'action' => 'view', $v['id']));
		$j++;} ?>
		</fieldset>
		<fieldset><legend>Contents - General</legend>
		<?php echo $tablet['Tablet']['subject']; ?><br />
		<?php echo $tablet['Tablet']['abstract']; ?><br />
	</fieldset>

<fieldset><legend>Contents - Specifics</legend>
<!--Typo :
<?php //echo $this->Html->link($tablet['Ruler']['term'], array('controller' => 'terms', 'action' => 'view', $tablet['Ruler']['id'])); ?>
<?php //echo $this->Html->link($tablet['Year']['year'], array('controller' => 'years', 'action' => 'view', $tablet['Year']['id'])); ?>
<?php //echo $this->Html->link($tablet['Month']['month'], array('controller' => 'months', 'action' => 'view', $tablet['Month']['id'])); ?>
<?php //echo $tablet['DateMonth']['date_month']; ?>  -
<?php //echo $this->Html->link($tablet['MainAction']['main_action'], array('controller' => 'mainAction', 'action' => 'view', $tablet['MainAction']['id'])); ?>
(<?php //echo $this->Html->link($tablet['MainVerb']['term'], array('controller' => 'terms', 'action' => 'view', $tablet['MainVerb']['id'])); ?> )
-->
<?php

if ($vocab){
?>
Vocabulary : <br />
<?php

// go through $vocab and collect word_type.id
$i=0;
foreach ($vocab as $vocab_unit){
	if ($vocab_unit['WordType']['id']!=''){
			$types_list[$vocab_unit['WordType']['id']]=$vocab_unit['WordType']['word_type'];
			}
			if ($vocab_unit['Word']['id']!=''){
					$words_list[$vocab_unit['Word']['id']]=$vocab_unit['Word']['word'];
			}
	}
$vocab_unit='';
$types_list = array_unique($types_list); // harvest unique word types
$words_list = array_unique($words_list); // harvest unique words

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// roll through unique word_types
foreach ($types_list as $key => $type){
		echo $this->Html->link($type, array('controller' => 'word_types', 'action' => 'view', $key)); // display word type
		echo ": ";
		$word_list_copy = $words_list;
		foreach ($vocab as $vocab_unit){
			if ($vocab_unit['WordType']['id'] == $key){ // if we are on an entry of the right word type
					if (array_key_exists($vocab_unit['Word']['id'], $word_list_copy)){// check if word in unique list
						echo $this->Html->link($vocab_unit['Word']['word'], array('controller' => 'words', 'action' => 'view', $vocab_unit['Word']['id']));// echo word
						unset($word_list_copy[$vocab_unit['Word']['id']]);// unset from list

					echo " ("; $i=0;	// terms of that word

					foreach ($vocab as $vocab_unit2){
								if ($vocab_unit2['Word']['id'] == $vocab_unit['Word']['id']){
									if ($i!=0) {echo ", ";}
									echo $this->Html->link($vocab_unit2['Term']['term'], array('controller' => 'terms', 'action' => 'view', $vocab_unit2['Term']['id']));
											$i++;
											}
									}


							echo ") ";
						}

					}
					}echo "<br />"; // br after word type ends

				}



// no word or word type
$key="";
$vocab_unit='';
// list orphan terms that are not associated to words (thos ewho have not been classified yet)
$i=0;
foreach ($vocab as $vocab_unit){
	if ($vocab_unit['Word']['id']=='' && $i==0){
		echo "Orphan terms : ";
		$i++;
	}}
//	}
	foreach ($vocab as $vocab_unit){
		if ($vocab_unit['Word']['id']==(''||null||0)){
				echo $this->Html->link($vocab_unit['Term']['term'], array('controller' => 'terms', 'action' => 'view', $vocab_unit['Term']['id']));
				echo "  ";
		}
}
}// end of if vocab
?>
<br /><br />
<pre><?php echo $tablet['Tablet']['comments']; ?></pre>
<pre style="width:400px; float:left"><?php echo $tablet['Tablet']['translation']; ?></pre>
<pre style="width:400px; float:left"><?php echo $tablet['Tablet']['translit']; ?></pre>
<?php
foreach (glob('/alty/htdocs/adab/app/webroot/tablet_files/'.$tablet['Tablet']['no_cdli'].'*') as $img): ?>
<a href="/tablet_files/<?php echo basename($img); ?>"><img src="/tablet_files/<?php echo basename($img); ?>" style="width:400px;height:auto;"></a>
<?php endforeach; ?>
<br />
</fieldset>
<?php echo $this->element('sql_dump'); ?>
