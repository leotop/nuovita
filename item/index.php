<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetAdditionalCSS('/plugins/swipebox-master/swipebox.css');
$APPLICATION->SetTitle("item");
?><div class="row it-tabs">





	<br>
	<br>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.element", 
	"single_item_template", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_DETAIL_TO_SLIDER" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BRAND_USE" => "N",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_SECTION_ID_VARIABLE" => "N",
		"COMPONENT_TEMPLATE" => "single_item_template",
		"DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_URL" => "element.php?IBLOCK_ID=#IBLOCK_ID#&SECTION_ID=#SECTION_ID#&ELEMENT_ID=#ELEMENT_ID#",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "index_slider",
		"LABEL_PROP" => "-",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "32",
		"LINK_IBLOCK_TYPE" => "books",
		"LINK_PROPERTY_SID" => "BOOK",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнить",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "0",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PROPERTY_CODE" => array(
			0 => "details_link",
			1 => "PAGES",
			2 => "",
		),
		"SECTION_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "section.php?IBLOCK_ID=#IBLOCK_ID#&SECTION_ID=#SECTION_ID#",
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"TEMPLATE_THEME" => "blue",
		"USE_COMMENTS" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_VOTE_RATING" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"PRODUCT_SUBSCRIPTION" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"CONVERT_CURRENCY" => "N",
		"ADD_TO_BASKET_ACTION" => array(
			0 => "BUY",
		),
		"SET_VIEWED_IN_COMPONENT" => "N"
	),
	false
);?><br>
 <br>
</div>
 <br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>