<div class="container" id="tarifs">
  <div class="row">


    {foreach from=$tarifs item=tarif}
      <div class="col-lg-4 col-sm-6 col-12" id="tarif_id_{$tarif->id}">
        <div class="tarif">
          <div class="title">Тариф "{$tarif->title}"</div>
          <div class="param">
            <div class="speed">
              {$tarif->speed}
            </div>
            <div class="prise">
              {$tarif->min_prise} - {$tarif->max_prise} ₽/мес
            </div>
          </div>
          <div class="link">
            <a href="{$tarif->link}" target="_blank">узнать подробнее на сайте www.sknt.ru</a>
          </div>
        </div>
      </div>
    {/foreach}

  </div>
</div>