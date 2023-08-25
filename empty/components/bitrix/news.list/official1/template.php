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
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<article class="news news--wide">
      <div class="news__publication-info">
        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="news__link">
          <h3 class="news__title content-block">
            <mark>
			<?=$arItem["NAME"]?>
            </mark>
            <span>
			<?echo $arItem["PREVIEW_TEXT"];?>
            </span>
          </h3>
        </a>
        <time class="news__publication-date" datetime="2019-11-08"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></time>
      </div>
      <div class="news__illustration" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>');" alt=""></div>
    </article>

<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
