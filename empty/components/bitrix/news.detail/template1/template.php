<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="article__content-wrapper">
    <div class="article__content content-block">
      <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"]?>" alt="Красивое изображение">
      <div class="image-caption">
        Подпись к&nbsp;фотографии. Как и&nbsp;сама фотография не&nbsp;является необходимой
      </div>
      <h2><?=$arResult["NAME"]?></h2>
	  <?echo $arResult["PREVIEW_TEXT"];?>
      <blockquote class="blockquote" data-controller="polar-lights-masked"
        data-action="mousemove->polar-lights-masked#updateMaskPosition">
		<?echo $arResult["DETAIL_TEXT"];?>

        <div class="person-info">
          <img class="person-info__photo" src="<?=ASSET_PATH?>stub/12.jpg" alt="Виталий Лагутин">
          <div class="person-info__description">
            <span class="person-info__name">Виталий Лагутин</span>
            <span class="person-info__position">директор дирекции транспорта ЯНАО</span>
          </div>
        </div>
        <div class="polar-lights polar-lights--dim">
          <div class="polar-lights__mask" data-target="polar-lights-masked.mask"></div>
        </div>
      </blockquote>
</div>
</div>
     
