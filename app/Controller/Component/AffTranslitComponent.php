<?php

App::uses('Component', 'Controller');

class AffTranslitComponent extends Component{

function AfficherTranslit($tabletId, $type){
$termes= self::TrierTermes($tabletId);
if (!empty($termes[$type])){
	$j=0;
		foreach ($termes as $key => $value) {
			if ($j!=0) { // On fait afficher une barre entre les termes
				$res.= ' | ';
				}
			$res.= $this->Html->link($value, array('controller' => 'terms', 'action' => 'view', $key));
			$j++;
			}
}
return $res;
}

private function TrierTermes($tabletId){
/*
$anthroponyms = Array();
$toponyms = Array();
$verbs = Array();
$fishes = Array();
$theonyms = Array();
$titles = Array();
$others = Array();
$this->Tablet->id = $tabletId;
$tablet = $this->Tablet->read(null, $tabletId);
$j=0;
foreach ($tablet['Term'] as $v) {
	switch ($tablet['Term'][$j]['Word']['word_type_id']) {
	case 9:
	$terms['anthroponyms'][$tablet['Term'][$j]['id']]=$tablet['Term'][$j]['term'];
	break;
	case 8:
	$terms['toponyms'][$tablet['Term'][$j]['id']]=$tablet['Term'][$j]['term'];
	break;
	case 2:
	$terms['verbs'][$tablet['Term'][$j]['id']]=$tablet['Term'][$j]['term'];
	break;
	case 3:
		$terms['fishes'][$tablet['Term'][$j]['id']]=$tablet['Term'][$j]['term'];
		break;
	case 10:
		$terms['theonyms'][$tablet['Term'][$j]['id']]=$tablet['Term'][$j]['term'];
		break;
	case 11:
		$terms['titles'][$tablet['Term'][$j]['id']]=$tablet['Term'][$j]['term'];
		break;
	default:
		$terms['others'][$tablet['Term'][$j]['id']]=$tablet['Term'][$j]['term'];
		}
	$j++;
	}
	return $terms;
	}
*/
}
}
