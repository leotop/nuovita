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
$this->setFrameMode(true);?>
            <div class = "row it-tabs">
                <div class = "col-xs-12 col-sm-12 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
                    <div class = "row">
                        <?if (!empty($arResult["OFFERS"])) {?>
                                    
                            <div class = "col-xs-2 col-sm-1 col-sm-offset-2 col-md-2 col-md-offset-0 col-lg-2">
                                <ul id="tabs-titles" class = "nav">
                                  <?foreach ($arResult['OFFERS'] as $key => $arOneOffer) {?>
                                        <?$picture = CFile::GetPath($arOneOffer["COLOR_ITEM"]["DETAIL_PICTURE"]);?>
                                        <li class="nav-title">
                                            <img src="<?=$picture?>">
                                        </li>
                                  <?}?>
                                </ul>
                            </div>
                        <?}?>
                        <div class = "col-xs-10 col-sm-9 col-md-10 col-lg-10">
                            <ul id="tabs-contents">
                            <?if($arResult['OFFERS']){
                            foreach ($arResult['OFFERS'] as $key => $arOneOffer){?>
                                <li>
                                    <div class="content">
                                        <a href="<?=$arOneOffer["DETAIL_PICTURE"]["SRC"]?>" class="swipebox" title="<?=$arOneOffer["COLOR_ITEM"]["NAME"]?>">
                                            <img src="<?=$arOneOffer["DETAIL_PICTURE"]["SRC"]?>">
                                        </a>
                                        <p class = "it-tab-head"><?=$arOneOffer["COLOR_ITEM"]["NAME"]?></p>
                                        <p class = "it-tab-text"><?=$arOneOffer["NAME"]?></p>
                                    </div>
                                </li>
                                <?}
                            } else { ?>
                                <li>
                                    <div class="content">
                                        <a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="swipebox" title="<?=$arResult["NAME"]?>">
                                            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
                                        </a>
                                        <p class = "it-tab-head"><?=$arResult["NAME"]?></p>
                                        <p class = "it-tab-text"><?=$arOneOffer["NAME"]?></p>
                                    </div>
                                </li>

                            <?}?>
                            </ul>
                        </div>
                    </div>
                </div>




                <div class = "col-xs-12 col-sm-12 col-md-5 col-lg-5 it-descript">
                    <div class = "row">
                        <div class = "col-xs-12 col-sm-12 col-md-12 it-descript-header">
                            <? echo (
                                isset($arResult["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"] != ''
                                ? $arResult["IPROPERTY_VALUES"]["ELEMENT_PAGE_TITLE"]
                                : $arResult["NAME"]
                            ); ?>
                        </div>

                        <div class = "col-xs-12 col-sm-12 col-md-12 it-descript-text"><?=$arResult["DETAIL_TEXT"]?></div>

                        <div class = "col-xs-12 col-sm-12 col-md-12 it-descript-contact">
                            <div class = "row">
                                <div class = "col-xs-12 col-sm-12 col-md-7 col-lg-6 it-descript-social goodshare-color">
                                    <a href="#" class="goodshare" data-type="fb"><img src="/local/templates/.default/img/item/fb.png"></a>
                                    <a href="#" class="goodshare" data-type="vk"><img src="/local/templates/.default/img/item/vk.png"></a>
                                    <a href="#" class="goodshare" data-type="ok"><img src="/local/templates/.default/img/item/oc.png"></a>
                                    <a href="#" class="goodshare" data-type="tw"><img src="/local/templates/.default/img/item/tw.png"></a>
                                    <a href="#" class="goodshare" data-type="mr"><img src="/local/templates/.default/img/item/social.png"></a>
                                </div>
                                <div class = "col-xs-12 col-sm-12 col-md-5 col-lg-6 it-descript-shop">
                                    <a href="/gde-kupit/">Найти магазин</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "hidden-xs hidden-sm col-md-1 col-lg-1"></div>
            </div>

            <?//if (!empty($arResult["PROPERTIES"]["item_photos"]["VALUE"])) {
                $transformationsList = CIBlockElement::GetList (
                    array(), 
                    array(
                        "IBLOCK_ID" => 11, 
                        "PROPERTY_ITEM" => $arResult["ID"]
                    ), 
                    false, 
                    false, 
                    array(
                        "ID",
                        "NAME", 
                        "PROPERTY_ITEM",
                        "PROPERTY_PICT",
                        "PROPERTY_AGE_LIMIT"
                    )
                );
                if ($transformationsList -> SelectedRowsCount() > 0) {
                ?>
                    <div class = "row">
                        <div class = "hidden-xs hidden-sm col-md-12 col-lg-12 item-second-header">Возможные трансформации</div>

                        <div class = "hidden-xs hidden-sm col-md-0 col-lg-0"></div>
                        
                        <div class = "hidden-xs hidden-sm col-md-12 col-lg-12">
                            <div class = "row photos_list">
                                <?while ($transformations = $transformationsList -> Fetch()) {?>

                                        <?$additionalPhoto = CFile::GetPath($transformations["PROPERTY_PICT_VALUE"]);?>
                                        <?if($additionalPhoto) {?>
                                            <div class = "col-md-12 col-lg-12 it-trans-img-1">
                                                <img src="<?=$additionalPhoto?>">
                                                <div class = "col-md-12 col-lg-12 it-trans-header"><?=$transformations["NAME"]?></div>
                                                <div class = "col-md-12 col-lg-12 it-trans-age"><?=$transformations["PROPERTY_AGE_LIMIT_VALUE"]?></div>
                                            </div>
                                        <?}?>

                                    <div class = "hidden-xs hidden-sm col-md-0 col-lg-0"></div>

                                <?}?>
                            </div>
                        </div>
                    </div>
                            <?}?>

            <div class = "row it-character">

                <div class = "hidden-xs hidden-sm col-md-1 col-lg-2"></div>
                <?
                    if (!empty($arResult['DISPLAY_PROPERTIES']))
                    {
                ?>
                <div class = "col-xs-12 col-sm-10 col-sm-offset-1 col-md-11 col-md-offset-1 col-lg-6 col-lg-offset-0">

                    <div class = "row">
                        <div class = "col-xs-12 col-sm-12 col-md-12 second-header wb-padding">
                            Характеристики
                        </div>
                        <div></div>

                        <div class = "col-xs-12 col-sm-12 col-md-10 col-lg-12 col-lg-offset-0 wb-netshops-list">

                                    <div class = "row">
                                <?
                                        foreach ($arResult['DISPLAY_PROPERTIES'] as &$arOneProp)
                                        {
                                ?>
                                        <div class="col-xs-12 col-sm-5 col-md-4 wb-netshop-name">
                                        <? echo $arOneProp['NAME']; ?></div>
                                        <div class="col-xs-12 col-sm-7 col-md-7 it-charact-value"><?
                                            echo (
                                                is_array($arOneProp['DISPLAY_VALUE'])
                                                ? implode(' / ', $arOneProp['DISPLAY_VALUE'])
                                                : $arOneProp['DISPLAY_VALUE']
                                            ); ?></div>
                                            <div class = "clearfix"></div><?
                                        }
                                        unset($arOneProp);
                                ?>
                                    </div>
                                <?
                                    
                                    if ($arResult['SHOW_OFFERS_PROPS'])
                                    {
                                ?>
                                    <div id="<? echo $arItemIDs['DISPLAY_PROP_DIV'] ?>" style="display: none;"></div>
                                    <?}?>
                        </div>
                    </div>

                </div>

                <?
                    }
                ?>
                <?if($arResult["PROPERTIES"]["DOCUMENTS"]["VALUE"]){
                foreach($arResult["PROPERTIES"]["DOCUMENTS"]["VALUE"] as $arFile){
                    $file = CFile::GetFileArray($arFile);
                    $fileOrigin[] = $file;
                }
                ?>
                <div class = "col-xs-12 col-sm-11 col-sm-offset-1 col-md-11 col-md-offset-1 col-lg-2">
                    <div class = "row">
                        <div class = "col-xs-12 second-header">Документы</div>
                        <?if($fileOrigin[0]["SRC"]){?>
                        <div class = "col-xs-12 usually-text">Инструкция по сборке и эксплуатации</div>
                        <div class = "col-xs-12 it-docum-url"><a target="_blank" href="<?=$fileOrigin[0]["SRC"]?>"><?=$fileOrigin[0]["ORIGINAL_NAME"]?></a></div>
                        <?}
                        if($fileOrigin[1]["SRC"]){?>
                        <div class = "col-xs-12 usually-text">Сертификат соответствия</div>
                        <div class = "col-xs-12 it-docum-url"><a target="_blank" href="<?=$fileOrigin[1]["SRC"]?>"><?=$fileOrigin[1]["ORIGINAL_NAME"]?></a></div>
                        <?}?>
                    </div>
                </div>
                <?}?>
            </div> 
