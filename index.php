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

		$date = explode('+', $tarif->tarifs[$i]->new_payday);

		$tarif->tarifs[$i]->time = date("d.m.Y", $date[0]);



		$tarif->tarifs[$i]->price_mes = $tarif->tarifs[$i]->price/$tarif->tarifs[$i]->pay_period;
		if($tarif->tarifs[$i]->price_mes < $min_prise)
			$min_prise = $tarif->tarifs[$i]->price_mes;
		if($tarif->tarifs[$i]->price_mes > $max_prise)
			$max_prise = $tarif->tarifs[$i]->price_mes;

		if($tarif->tarifs[$i]->pay_period == 1){
			$json->tarifs[$key]->tarifs[$i]->pay_mesyacev =  $tarif->tarifs[$i]->pay_period.' месяц';
			$json->tarifs[$key]->tarifs_sort[0] = $json->tarifs[$key]->tarifs[$i];
		}
		if($tarif->tarifs[$i]->pay_period == 3){
			$json->tarifs[$key]->tarifs[$i]->pay_mesyacev =  $tarif->tarifs[$i]->pay_period.' месяца';
			$json->tarifs[$key]->tarifs_sort[1] = $json->tarifs[$key]->tarifs[$i];
		}
		if($tarif->tarifs[$i]->pay_period == 6){
			$json->tarifs[$key]->tarifs[$i]->pay_mesyacev = $tarif->tarifs[$i]->pay_period.' месяцев';
			$json->tarifs[$key]->tarifs_sort[2] = $json->tarifs[$key]->tarifs[$i];
		}
		if($tarif->tarifs[$i]->pay_period == 12){
			$json->tarifs[$key]->tarifs[$i]->pay_mesyacev = $tarif->tarifs[$i]->pay_period.' месяцев';
			$json->tarifs[$key]->tarifs_sort[3] = $json->tarifs[$key]->tarifs[$i];
		}




	}
	$json->tarifs[$key]->max_prise = $max_prise;
	$json->tarifs[$key]->min_prise = $min_prise; 
	$json->tarifs[$key]->id = $id++;

	sort($json->tarifs[$key]->tarifs_sort);

}
//print_r($json);

$smarty->assign("tarifs", $json->tarifs);

$smarty->display('index.tpl');
?>