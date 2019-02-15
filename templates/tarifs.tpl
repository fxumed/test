<div class="container-fluid" id="tarifs">
  <div class="row">


    {foreach from=$tarifs item=tarif}
      <div class="col-lg-4 col-sm-6 col-12" id="tarif_{$tarif->id}">
        <div class="tarif">
          <div class="title">Тариф "{$tarif->title}"</div>
          <div class="param" data-id="{$tarif->id}">
            <div class="speed">
              {$tarif->speed} Мбит/с
            </div>
            <div class="prise" id="{$tarif->id}">
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