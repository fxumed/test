<?php
/* Smarty version 3.1.33, created on 2019-02-15 10:07:07
  from 'C:\wamp64\www\red.ru\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c668f4b851316_05540451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be7b5e93b8d07ca55a633a14a93d3401d022f6fa' => 
    array (
      0 => 'C:\\wamp64\\www\\red.ru\\templates\\index.tpl',
      1 => 1550222263,
      2 => 'file',
    ),
    '706f83ac646230f978920bb86637532512c8da5f' => 
    array (
      0 => 'C:\\wamp64\\www\\red.ru\\templates\\tarifs.tpl',
      1 => 1550216700,
      2 => 'file',
    ),
    '11ea79a24438e37d5d926669b4a005e9b9f1ebf1' => 
    array (
      0 => 'C:\\wamp64\\www\\red.ru\\templates\\tarifs_prise.tpl',
      1 => 1550225215,
      2 => 'file',
    ),
    'f738d8aadcbc9f00676b6aed1215830c589ff4cf' => 
    array (
      0 => 'C:\\wamp64\\www\\red.ru\\templates\\end.tpl',
      1 => 1550225224,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5c668f4b851316_05540451 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>

<div class="container-fluid" id="tarifs">
  <div class="row">


          <div class="col-lg-4 col-sm-6 col-12" id="tarif_0">
        <div class="tarif">
          <div class="title">Тариф "Земля"</div>
          <div class="param" data-id="0">
            <div class="speed">
              50 Мбит/с
            </div>
            <div class="prise" id="0">
              350 - 480 ₽/мес
            </div>
          </div>
          <div class="link">
            <a href="http://www.sknt.ru/tarifi_internet/in/1.htm" target="_blank">узнать подробнее на сайте www.sknt.ru</a>
          </div>
        </div>
      </div>
          <div class="col-lg-4 col-sm-6 col-12" id="tarif_1">
        <div class="tarif">
          <div class="title">Тариф "Вода"</div>
          <div class="param" data-id="1">
            <div class="speed">
              100 Мбит/с
            </div>
            <div class="prise" id="1">
              450 - 600 ₽/мес
            </div>
          </div>
          <div class="link">
            <a href="http://www.sknt.ru/tarifi_internet/in/2.htm" target="_blank">узнать подробнее на сайте www.sknt.ru</a>
          </div>
        </div>
      </div>
          <div class="col-lg-4 col-sm-6 col-12" id="tarif_2">
        <div class="tarif">
          <div class="title">Тариф "Огонь"</div>
          <div class="param" data-id="2">
            <div class="speed">
              200 Мбит/с
            </div>
            <div class="prise" id="2">
              650 - 800 ₽/мес
            </div>
          </div>
          <div class="link">
            <a href="http://www.sknt.ru/tarifi_internet/in/3.htm" target="_blank">узнать подробнее на сайте www.sknt.ru</a>
          </div>
        </div>
      </div>
          <div class="col-lg-4 col-sm-6 col-12" id="tarif_3">
        <div class="tarif">
          <div class="title">Тариф "Вода HD"</div>
          <div class="param" data-id="3">
            <div class="speed">
              100 Мбит/с
            </div>
            <div class="prise" id="3">
              650 - 800 ₽/мес
            </div>
          </div>
          <div class="link">
            <a href="http://www.sknt.ru/sky-tv/in/2.htm" target="_blank">узнать подробнее на сайте www.sknt.ru</a>
          </div>
        </div>
      </div>
          <div class="col-lg-4 col-sm-6 col-12" id="tarif_4">
        <div class="tarif">
          <div class="title">Тариф "Огонь HD"</div>
          <div class="param" data-id="4">
            <div class="speed">
              200 Мбит/с
            </div>
            <div class="prise" id="4">
              800 - 1000 ₽/мес
            </div>
          </div>
          <div class="link">
            <a href="http://www.sknt.ru/sky-tv/in/3.htm" target="_blank">узнать подробнее на сайте www.sknt.ru</a>
          </div>
        </div>
      </div>
    
  </div>
</div>

	<div class="container-fluid tarif_prise" id="prise_0">
		<div class="row">
			<div class="col-12 prise_title">
					<div class="back back_main" data-id="0" ></div>
				Тариф "Земля"
			</div>
		</div>
		<div class="row">

					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							1 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="1" data-id_tarif="0">
						<div class="prise_prise">
							480 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 480 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							3 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="2" data-id_tarif="0">
						<div class="prise_prise">
							450 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 1350 ₽</p>
														<p>скидка — 30 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							6 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="3" data-id_tarif="0">
						<div class="prise_prise">
							410 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 2460 ₽</p>
														<p>скидка — 70 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							12 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="4" data-id_tarif="0">
						<div class="prise_prise">
							350 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 4200 ₽</p>
														<p>скидка — 130 ₽</p>
													</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>

	<div class="container-fluid tarif_prise" id="prise_1">
		<div class="row">
			<div class="col-12 prise_title">
					<div class="back back_main" data-id="1" ></div>
				Тариф "Вода"
			</div>
		</div>
		<div class="row">

					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							1 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="5" data-id_tarif="1">
						<div class="prise_prise">
							600 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 600 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							3 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="6" data-id_tarif="1">
						<div class="prise_prise">
							550 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 1650 ₽</p>
														<p>скидка — 50 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							6 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="7" data-id_tarif="1">
						<div class="prise_prise">
							510 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 3060 ₽</p>
														<p>скидка — 90 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							12 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="8" data-id_tarif="1">
						<div class="prise_prise">
							450 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 5400 ₽</p>
														<p>скидка — 150 ₽</p>
													</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>

	<div class="container-fluid tarif_prise" id="prise_2">
		<div class="row">
			<div class="col-12 prise_title">
					<div class="back back_main" data-id="2" ></div>
				Тариф "Огонь"
			</div>
		</div>
		<div class="row">

					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							1 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="9" data-id_tarif="2">
						<div class="prise_prise">
							800 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 800 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							3 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="10" data-id_tarif="2">
						<div class="prise_prise">
							750 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 2250 ₽</p>
														<p>скидка — 50 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							6 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="11" data-id_tarif="2">
						<div class="prise_prise">
							710 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 4260 ₽</p>
														<p>скидка — 90 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							12 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="12" data-id_tarif="2">
						<div class="prise_prise">
							650 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 7800 ₽</p>
														<p>скидка — 150 ₽</p>
													</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>

	<div class="container-fluid tarif_prise" id="prise_3">
		<div class="row">
			<div class="col-12 prise_title">
					<div class="back back_main" data-id="3" ></div>
				Тариф "Вода HD"
			</div>
		</div>
		<div class="row">

					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							1 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="13" data-id_tarif="3">
						<div class="prise_prise">
							800 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 800 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							3 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="14" data-id_tarif="3">
						<div class="prise_prise">
							750 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 2250 ₽</p>
														<p>скидка — 50 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							6 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="15" data-id_tarif="3">
						<div class="prise_prise">
							710 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 4260 ₽</p>
														<p>скидка — 90 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							12 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="16" data-id_tarif="3">
						<div class="prise_prise">
							650 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 7800 ₽</p>
														<p>скидка — 150 ₽</p>
													</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>

	<div class="container-fluid tarif_prise" id="prise_4">
		<div class="row">
			<div class="col-12 prise_title">
					<div class="back back_main" data-id="4" ></div>
				Тариф "Огонь HD"
			</div>
		</div>
		<div class="row">

					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							1 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="17" data-id_tarif="4">
						<div class="prise_prise">
							1000 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 1000 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							3 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="18" data-id_tarif="4">
						<div class="prise_prise">
							900 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 2700 ₽</p>
														<p>скидка — 100 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							6 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="19" data-id_tarif="4">
						<div class="prise_prise">
							860 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 5160 ₽</p>
														<p>скидка — 140 ₽</p>
													</div>
					</div>
				</div>
			</div>
					<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							12 месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="20" data-id_tarif="4">
						<div class="prise_prise">
							800 ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — 9600 ₽</p>
														<p>скидка — 200 ₽</p>
													</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>

			
	<div class="container-fluid end" id="prise_end_1">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="0" data-id_prise="1" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Земля"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 1 месяц
						</div>
						<div class="prise_more">
							<p>разовый платеж — 480 ₽</p>
							<p>со счета спишется — 480 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.12.2015</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_2">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="0" data-id_prise="2" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Земля"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 3 месяца
						</div>
						<div class="prise_more">
							<p>разовый платеж — 1350 ₽</p>
							<p>со счета спишется — 1350 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.01.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_3">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="0" data-id_prise="3" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Земля"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 6 месяцев
						</div>
						<div class="prise_more">
							<p>разовый платеж — 2460 ₽</p>
							<p>со счета спишется — 2460 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.04.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_4">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="0" data-id_prise="4" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Земля"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 12 месяцев
						</div>
						<div class="prise_more">
							<p>разовый платеж — 4200 ₽</p>
							<p>со счета спишется — 4200 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.10.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
				
	<div class="container-fluid end" id="prise_end_5">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="1" data-id_prise="5" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Вода"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 1 месяц
						</div>
						<div class="prise_more">
							<p>разовый платеж — 600 ₽</p>
							<p>со счета спишется — 600 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.12.2015</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_6">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="1" data-id_prise="6" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Вода"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 3 месяца
						</div>
						<div class="prise_more">
							<p>разовый платеж — 1650 ₽</p>
							<p>со счета спишется — 1650 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.01.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_7">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="1" data-id_prise="7" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Вода"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 6 месяцев
						</div>
						<div class="prise_more">
							<p>разовый платеж — 3060 ₽</p>
							<p>со счета спишется — 3060 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.04.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_8">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="1" data-id_prise="8" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Вода"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 12 месяцев
						</div>
						<div class="prise_more">
							<p>разовый платеж — 5400 ₽</p>
							<p>со счета спишется — 5400 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.10.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
				
	<div class="container-fluid end" id="prise_end_9">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="2" data-id_prise="9" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Огонь"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 1 месяц
						</div>
						<div class="prise_more">
							<p>разовый платеж — 800 ₽</p>
							<p>со счета спишется — 800 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.12.2015</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_10">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="2" data-id_prise="10" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Огонь"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 3 месяца
						</div>
						<div class="prise_more">
							<p>разовый платеж — 2250 ₽</p>
							<p>со счета спишется — 2250 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.01.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_11">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="2" data-id_prise="11" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Огонь"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 6 месяцев
						</div>
						<div class="prise_more">
							<p>разовый платеж — 4260 ₽</p>
							<p>со счета спишется — 4260 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.04.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_12">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="2" data-id_prise="12" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Огонь"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 12 месяцев
						</div>
						<div class="prise_more">
							<p>разовый платеж — 7800 ₽</p>
							<p>со счета спишется — 7800 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.10.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
				
	<div class="container-fluid end" id="prise_end_13">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="3" data-id_prise="13" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Вода HD"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 1 месяц
						</div>
						<div class="prise_more">
							<p>разовый платеж — 800 ₽</p>
							<p>со счета спишется — 800 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.12.2015</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_14">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="3" data-id_prise="14" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Вода HD"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 3 месяца
						</div>
						<div class="prise_more">
							<p>разовый платеж — 2250 ₽</p>
							<p>со счета спишется — 2250 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.01.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_15">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="3" data-id_prise="15" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Вода HD"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 6 месяцев
						</div>
						<div class="prise_more">
							<p>разовый платеж — 4260 ₽</p>
							<p>со счета спишется — 4260 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.04.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_16">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="3" data-id_prise="16" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Вода HD"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 12 месяцев
						</div>
						<div class="prise_more">
							<p>разовый платеж — 7800 ₽</p>
							<p>со счета спишется — 7800 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.10.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
				
	<div class="container-fluid end" id="prise_end_17">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="4" data-id_prise="17" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Огонь HD"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 1 месяц
						</div>
						<div class="prise_more">
							<p>разовый платеж — 1000 ₽</p>
							<p>со счета спишется — 1000 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.12.2015</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_18">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="4" data-id_prise="18" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Огонь HD"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 3 месяца
						</div>
						<div class="prise_more">
							<p>разовый платеж — 2700 ₽</p>
							<p>со счета спишется — 2700 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.01.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_19">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="4" data-id_prise="19" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Огонь HD"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 6 месяцев
						</div>
						<div class="prise_more">
							<p>разовый платеж — 5160 ₽</p>
							<p>со счета спишется — 5160 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.04.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
			
	<div class="container-fluid end" id="prise_end_20">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="4" data-id_prise="20" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "Огонь HD"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты 12 месяцев
						</div>
						<div class="prise_more">
							<p>разовый платеж — 9600 ₽</p>
							<p>со счета спишется — 9600 ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - 15.10.2016</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="/js/script.js" ></script>
  </body>
</html><?php }
}
