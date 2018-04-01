<div class="wordTypes view">
<h2>Word type
<?php
echo $wordType['ParentWordType']['word_type'];
if ($wordType['ParentWordType']['id']!='') {
	echo"  :";
	}

foreach ($wordTypes as $wordType){
echo $wordType['WordType']['word_type'];
?>
</h2>
</div>
<div>
Creating glossary in /alty/docs/out/0ADAB/000diss/chapters/apprendixD.tex <br />
<?php

// empty result file
$fn='/alty/docs/out/0ADAB/000diss/chapters/appendixD.tex';
$fp = fopen($fn, "w"); fclose($fp);

$glossary='%!TEX root = ../dissertation.tex '."\\\\\n";
$glossary.='\chapter{Glossary}\label{glossary} '."\\\\\n";
$glossary.= '\section{'.$wordType['WordType']['word_type'].'}'."\\\\\n";

if (!empty($wordType['Word'])){
	foreach ($wordType['Word'] as $word){
		$glossary.='\textbf{'.$word['word'].'}'."\\\\\n";;
		$glossary.=$word['comments']."\\\\\n";;
			foreach ($word['Term'] as $term) {
				$glossary.="&emsp;";
				$glossary.=$term['term'];
				foreach ($term['Tablet'] as $t) {
					$glossary.='\url{https://cdli.ucla.edu/'.$t[no_cdli].'}{'.$t[no_cdli].'}';//echo tablet P no with link
					$glossary.=' ('.$t[no_museum].')'; // echo museum no
					$glossary.=' ['.$t[Period][period].']; '."\\\\\n";// echo period
					}
				}
				$glossary.="\\\\\n";
				$glossary.="\\\\\n";
			}

		}}

file_put_contents($fn, $glossary);
?>
</div>
