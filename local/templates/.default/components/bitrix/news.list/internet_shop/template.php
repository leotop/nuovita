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
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 second-header wb-padding">
      <?=$arResult["NAME"]?>
</div>
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 wb-netshops-list">
    <div class="row">
        <?foreach($arResult["ITEMS"] as $key => $arItem):?>
        <?$countProduct = count($arResult["ITEMS"])-1;?>
        <div class="<?=($key > 2) ? 'product_shop' : '';?>">
	        <?
	        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	        ?>
		        <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			        <span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		        <?endif?>

                <div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
                      <?if($arItem["NAME"]):?>
                        <?echo $arItem["NAME"]?>
                    <?endif;?>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <a target="_blank" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["ADRESS_SHOP"]["VALUE"]?></a>
                </div>
                <div class="clearfix"></div>
        </div>
        <?endforeach;?>
        <?if($countProduct > 2){?>
            <span class="toggle_shop_bottom" onclick="toggle_product('product_shop')"><?=GetMessage('SHOP')?></span>
        <?}?>
    </div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
