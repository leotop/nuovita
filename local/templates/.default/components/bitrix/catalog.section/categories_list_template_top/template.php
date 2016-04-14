<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);


if (!empty($arResult['ITEMS']))
{
    foreach ($arResult['ITEMS'] as $key => $arItem)
    {

        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
        $strMainID = $this->GetEditAreaId($arItem['ID']);

        $arItemIDs = array(
            'ID' => $strMainID,
            'PICT' => $strMainID.'_pict',
            'SECOND_PICT' => $strMainID.'_secondpict',
            'STICKER_ID' => $strMainID.'_sticker',
            'SECOND_STICKER_ID' => $strMainID.'_secondsticker',
            'QUANTITY' => $strMainID.'_quantity',
            'QUANTITY_DOWN' => $strMainID.'_quant_down',
            'QUANTITY_UP' => $strMainID.'_quant_up',
            'QUANTITY_MEASURE' => $strMainID.'_quant_measure',
            'BUY_LINK' => $strMainID.'_buy_link',
            'BASKET_ACTIONS' => $strMainID.'_basket_actions',
            'NOT_AVAILABLE_MESS' => $strMainID.'_not_avail',
            'SUBSCRIBE_LINK' => $strMainID.'_subscribe',
            'COMPARE_LINK' => $strMainID.'_compare_link',

            'PRICE' => $strMainID.'_price',
            'DSC_PERC' => $strMainID.'_dsc_perc',
            'SECOND_DSC_PERC' => $strMainID.'_second_dsc_perc',
            'PROP_DIV' => $strMainID.'_sku_tree',
            'PROP' => $strMainID.'_prop_',
            'DISPLAY_PROP_DIV' => $strMainID.'_sku_prop',
            'BASKET_PROP_DIV' => $strMainID.'_basket_prop',
        );

        $strObName = 'ob'.preg_replace("/[^a-zA-Z0-9_]/", "x", $strMainID);

        $productTitle = (
            isset($arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])&& $arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] != ''
            ? $arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
            : $arItem['NAME']
        );

        $imgTitle = (
            isset($arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']) && $arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE'] != ''
            ? $arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']
            : $arItem['NAME']
        );

        ?><div style="display: none; "><?
        //*****************************************
        //  ТУТ ВЫБИРАЕМ ССЫЛКИ НА НУЖНЫЕ РАЗДЕЛЫ
        $APPLICATION->IncludeComponent(
            "bitrix:catalog.element",
            "id_getter_template",
            array(
                "IBLOCK_TYPE" => "products_catigories",
                "IBLOCK_ID" => "5",
                "ELEMENT_ID" => $arItem["ID"],
                "SECTION_URL" => "section.php?IBLOCK_ID=#IBLOCK_ID#&SECTION_ID=#SECTION_ID#",
                "DETAIL_URL" => "element.php?IBLOCK_ID=#IBLOCK_ID#&SECTION_ID=#SECTION_ID#&ELEMENT_ID=#ELEMENT_ID#",
                "BASKET_URL" => "/personal/basket.php",
                "ACTION_VARIABLE" => "action",
                "PRODUCT_ID_VARIABLE" => "id",
                "SECTION_ID_VARIABLE" => "SECTION_ID",
                "META_KEYWORDS" => "-",
                "META_DESCRIPTION" => "-",
                "DISPLAY_PANEL" => "N",
                "SET_TITLE" => "Y",
                "PROPERTY_CODE" => array(
                    0 => "items",
                    1 => "PAGES",
                    2 => "",
                ),
                "PRICE_CODE" => array(
                ),
                "USE_PRICE_COUNT" => "N",
                "SHOW_PRICE_COUNT" => "1",
                "LINK_IBLOCK_TYPE" => "books",
                "LINK_IBLOCK_ID" => "32",
                "LINK_PROPERTY_SID" => "BOOK",
                "LINK_ELEMENTS_URL" => "/product/?PARENT_ELEMENT_ID=#ELEMENT_ID#",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "COMPONENT_TEMPLATE" => "id_getter_template",
                "ELEMENT_CODE" => "",
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_CODE" => "",
                "OFFERS_LIMIT" => "0",
                "BACKGROUND_IMAGE" => "-",
                "TEMPLATE_THEME" => "blue",
                "ADD_PICT_PROP" => "-",
                "LABEL_PROP" => "-",
                "DISPLAY_NAME" => "Y",
                "DETAIL_PICTURE_MODE" => "IMG",
                "ADD_DETAIL_TO_SLIDER" => "N",
                "DISPLAY_PREVIEW_TEXT_MODE" => "E",
                "MESS_BTN_BUY" => "Купить",
                "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                "MESS_BTN_SUBSCRIBE" => "Подписаться",
                "MESS_BTN_COMPARE" => "Сравнить",
                "MESS_NOT_AVAILABLE" => "Нет в наличии",
                "USE_VOTE_RATING" => "N",
                "USE_COMMENTS" => "N",
                "BRAND_USE" => "N",
                "CHECK_SECTION_ID_VARIABLE" => "N",
                "SEF_MODE" => "N",
                "CACHE_GROUPS" => "Y",
                "SET_CANONICAL_URL" => "N",
                "SET_BROWSER_TITLE" => "Y",
                "BROWSER_TITLE" => "-",
                "SET_META_KEYWORDS" => "Y",
                "SET_META_DESCRIPTION" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "USE_MAIN_ELEMENT_SECTION" => "N",
                "ADD_SECTIONS_CHAIN" => "Y",
                "ADD_ELEMENT_CHAIN" => "N",
                "DISPLAY_COMPARE" => "N",
                "PRICE_VAT_INCLUDE" => "Y",
                "PRICE_VAT_SHOW_VALUE" => "N",
                "USE_PRODUCT_QUANTITY" => "N",
                "PRODUCT_QUANTITY_VARIABLE" => "",
                "ADD_PROPERTIES_TO_BASKET" => "Y",
                "PRODUCT_PROPS_VARIABLE" => "prop",
                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                "PRODUCT_PROPERTIES" => array(
                ),
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "USE_ELEMENT_COUNTER" => "Y",
                "SHOW_DEACTIVATED" => "N",
                "DISABLE_INIT_JS_IN_COMPONENT" => "N"
            ),
            false
        );
        ?></div><?

		$selected_item_parameter = "";
		if($_GET['ID'] == $arItem['ID']) {
			$selected_item_parameter = " link-underline";
		}
        ?>
                <a href="<? echo $GLOBALS['link_to_item_info']; ?>" class="link_menu<? echo($selected_item_parameter); ?>">
                  <? echo $productTitle; ?>
                </a>
        <?


    }

}