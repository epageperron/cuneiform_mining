<div class="tablets index">
	<h2><?php __('Tablets');?></h2>
Creating the source list in /alty/docs/out/0ADAB/000diss/chapters/apprendixA.tex <br />

<?php
$source_list='';
// empty result file
$fn='/alty/docs/out/0ADAB/000diss/chapters/appendixA.tex';
$fp = fopen($fn, "w"); fclose($fp);
$source_list.='%!TEX root = ../dissertation.tex'.PHP_EOL;
$source_list.='\chapter{Primary sources}\label{sources}'.PHP_EOL;
$source_list.='\section{Sources presented in typological order}'.PHP_EOL;
$source_list.='\scriptsize'.PHP_EOL;
$source_list.='\begin{supertabular}{cccccccc}'.PHP_EOL;
$source_list.='Pno (museum no)&sub-period & year& month& day& archive& main action (verb) & main topic (goods)\\\\'.PHP_EOL;
/*
foreach ($tablets as $tablet):

	foreach ($tablet['Transac'] as $transac){
$source_list.=print_r($transac);
		$source_list.=$tablet['no_cdli']. '('. $tablet['no_museum'].')&'. $tablet['Period'].'&'.$tablet['year'].'&'.$tablet['Month'].'&'.$tablet['date_day'];
		/*foreach ($tablet['Group'] as $group){
			$source_list.=$group. ' ';}
		$source_list.='&'.$transac['MainAction']['main_action'] . '('. $transac['Verb']['term'].')&'.
		$transac['MainTopic']['main_topic'] . '('. $transac['Good']['term'].')&';}
	endforeach;*/
$source_list.='\end{supertabular}'.PHP_EOL;
$source_list.='\normalsize'.PHP_EOL;
$source_list.='\section{Sources ordered by primary publication}'. PHP_EOL;
$searchField='no_perso';
$source_list.='\twocolumn'.PHP_EOL;
$source_list.='\scriptsize'.PHP_EOL;
$source_list.='\tablehead{primary publication'."&".'museum number'."&".'P number \\\\}'.PHP_EOL;
$source_list.='\begin{supertabular}{|p{3.1cm}p{2.2cm}p{2cm}}'.PHP_EOL;
foreach ($tablets as $tablet):
 //usort($tablet, function ($a, $b) use ($searchField) { return strcmp($a[$searchField], $b[$searchField]); });
$source_list.=str_replace("&","\&",$tablet['Tablet']['no_perso'])."&". $tablet['Tablet']['no_museum']."&".'\href{https://cdli.ucla.edu/'.$tablet['Tablet']['no_cdli'].'}{'.$tablet['Tablet']['no_cdli'].'}'."\\\\\n";
endforeach;
$source_list.='\end{supertabular}'.PHP_EOL;
$source_list.='\normalsize'.PHP_EOL;
$source_list.='\onecolumn'.PHP_EOL;
//$source_list = str_replace("&","\&",$source_list);
file_put_contents($fn, $source_list);
