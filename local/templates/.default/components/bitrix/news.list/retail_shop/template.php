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
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 second-header">
     <?=$arResult["NAME"]?>
</div>
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 wb-shops-list">
    <div class="row">
        <?foreach($arResult["ITEMS"] as $key => $arItem):?>
        <?$countProduct = count($arResult["ITEMS"])-1;?>
        <div class="<?=($key > 2) ? 'product_next' : '';?>">
	        <?
	        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	        ?>
		        <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			        <span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		        <?endif?>

                <div class="col-xs-12 col-sm-12 col-md-12 wb-shop-name">
		            <?if($arItem["NAME"]):?>
			            <?echo $arItem["NAME"]?>
		            <?endif;?>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wb-shop-info" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 wb-shop-address">
                            <?=$arItem["PROPERTIES"]["ADRESS"]["VALUE"]?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 wb-shop-time">
                             <?=$arItem["PROPERTIES"]["TIME_WORK"]["VALUE"]?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 wb-shop-phone">
                             <?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?>
                        </div>
                    </div>
                </div>
                <div class="clearfix wb-margin"></div>
<?

          //Подготовка карты
          $arMap['POSITION']['yandex_scale'] = "9"; // Подбираем размер карты, чтобы поместились все маркеры
          // В yandex_lat и yandex_lon заносим координаты центральной точки карты
          $arMap['POSITION']['yandex_lat'] = '55.753518'.', '; // В нашем случае координаты первого элемента инфоблока
          $arMap['POSITION']['yandex_lon'] = '37.622852';
          //Собираем маркеры
          $arMap['POSITION']['PLACEMARKS'][] = array(
            'LON' => $arItem['PROPERTIES']['LON']['VALUE'], // LON и LAT - координаты маркера
            'LAT' => $arItem['PROPERTIES']['LAT']['VALUE'],
            'TEXT'=> $arItem["PROPERTIES"]["ADRESS"]["VALUE"],
          );

?>      </div>
        <?endforeach;?>
        <?if($countProduct > 2){?>
        <span class="toggle_shop" onclick="toggle_product()"><?=GetMessage('SHOP')?></span>
        <?}?>
    </div>
</div>
<div class="yandex_map">
    <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	array(
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",
        "MAP_DATA" => serialize($arMap['POSITION']),
      	"MAP_HEIGHT" => "400",
		"MAP_ID" => "",
		"MAP_WIDTH" => "500",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<h3>КАРТА МОСКВЫ И БЛИЖАЙШЕГО ПОДМОСКОВЬЯ!</h3>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
