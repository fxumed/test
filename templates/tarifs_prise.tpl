
{foreach from=$tarifs item=tarif}

	<div class="container-fluid tarif_prise" id="prise_{$tarif->id}">
		<div class="row">
			<div class="col-12 prise_title">
					<div class="back back_main" data-id="{$tarif->id}" ></div>
				Тариф "{$tarif->title}"
			</div>
		</div>
		<div class="row">

		{foreach from=$tarif->tarifs_sort item=prises}
			<div class="col-lg-4 col-sm-6 col-12">
				<div class="tarif">
					<div class="prise_tarif">
						<div class="title">
							{$prises->pay_period} месяц
						</div>
					</div>
					<div class="prise_param" data-id_prise="{$prises->ID}" data-id_tarif="{$tarif->id}">
						<div class="prise_prise">
							{$prises->price_mes} ₽/мес
						</div>
						<div class="prise_more">
							<p>разовый платеж — {$prises->price} ₽</p>
							{if ($tarif->max_prise-$prises->price_mes) gt 0}
							<p>скидка — {$tarif->max_prise-$prises->price_mes} ₽</p>
							{/if}
						</div>
					</div>
				</div>
			</div>
		{/foreach}

		</div>
	</div>
{/foreach}