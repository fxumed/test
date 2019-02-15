
{foreach from=$tarifs item=tarif}
	{foreach from=$tarif->tarifs_sort item=prises}
		
	<div class="container-fluid end" id="prise_end_{$prises->ID}">
		<div class="row">
			<div class="col-12 prise_title">
				<div class="back back_tarif" data-id_tarif="{$tarif->id}" data-id_prise="{$prises->ID}" ></div>
				Выбор тарифа
			</div>
		</div>

			<div class="col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							Тариф "{$tarif->title}"
						</div>
					</div>
					<div class="prise_param">
						<div class="prise_prise">
							Период оплаты {$prises->pay_mesyacev}
						</div>
						<div class="prise_more">
							<p>разовый платеж — {$prises->price} ₽</p>
							<p>со счета спишется — {$prises->price} ₽</p>
						</div>
						<div class="date">
							<p>вступило в силу - {$prises->time}</p>
						</div>
					</div>
					<div class="bott">Выбрать</div>
				</div>
			</div>


	</div>
	{/foreach}
{/foreach}