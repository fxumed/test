<?php

require 'libs/Smarty.class.php';
$smarty = new Smarty;
//$smarty->debugging = true;
$smarty->caching = true;


$json = file_get_contents('http://sknt.ru/job/frontend/data.json');
$json = json_decode($json);
$id=0;
foreach ($json->tarifs as $key => $tarif) {
	$min_prise = 100000;
	$max_prise = 0;
	for ($i=0; $i < count($tarif->tarifs); $i++) {
		if(($tarif->tarifs[$i]->price/$tarif->tarifs[$i]->pay_period) < $min_prise)
			$min_prise = $tarif->tarifs[$i]->price/$tarif->tarifs[$i]->pay_period;
		if(($tarif->tarifs[$i]->price/$tarif->tarifs[$i]->pay_period) > $max_prise)
			$max_prise = $tarif->tarifs[$i]->price/$tarif->tarifs[$i]->pay_period;
	}

	$json->tarifs[$key]->max_prise = $max_prise;
	$json->tarifs[$key]->min_prise = $min_prise; 

//echo $id;
	$json->tarifs[$key]->id = $id++; 

}
//print_r($json);

$smarty->assign("tarifs", $json->tarifs);

$smarty->display('index.tpl');
?>