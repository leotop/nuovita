<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
    IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE HTML>
<html>
<head>

    <?$APPLICATION->ShowHead();?>

    <title><?$APPLICATION->ShowTitle()?></title>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/local/templates/.default/plugins/slider/responsiveslides.css">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="stylesheet" type="text/css" href="/local/templates/.default/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/local/templates/.default/style/main.css" media = "screen">
    <link rel="stylesheet" type="text/css" href="/local/templates/.default/style/form_button.css" media = "screen">

</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div id = "x"></div>
<div class = "container-fluid">
    <div class = "row  dropdown" >
        <div class = "col-xs-12 header main-header">
            <div class = "col-xs-6 hidden-md hidden-lg">
                <a href="<?=SITE_DIR?>" title="<?=GetMessage('CFT_MAIN')?>" class = "logo">
                    <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/company_name.php",
                            Array(),
                            Array("MODE"=>"html")
                        );
                    ?>
                </a>
            </div>
            <a class="c-hamburger c-hamburger--htx xl-header-view hidden-md hidden-lg"  id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">
                <span>toggle menu</span>
            </a>


            <div class = "row  m-menu mob-menu main-header" id = "mobilemenu" style = "">

                <div class = "col-xs-6 col-md-12 header-link-row-1">
                    <div class = "row">
                        <div class = "col-md-2 visible-md visible-lg header-tel">
                            <?$APPLICATION->IncludeFile(
                                    SITE_DIR."include/phone.php",
                                    Array(),
                                    Array("MODE"=>"html")
                                );
                            ?>
                        </div>
                        <div class = "col-xs-12 col-md-8 header-link-1">
                            <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "top_menu",
                                    array(
                                        "ROOT_MENU_TYPE" => "top",
                                        "MAX_LEVEL" => "2",
                                        "CHILD_MENU_TYPE" => "left",
                                        "USE_EXT" => "Y",
                                        "MENU_CACHE_TYPE" => "A",
                                        "MENU_CACHE_TIME" => "36000000",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "MENU_CACHE_GET_VARS" => array(
                                        ),
                                        "COMPONENT_TEMPLATE" => "top_menu",
                                        "DELAY" => "N",
                                        "ALLOW_MULTI_SELECT" => "N"
                                    ),
                                    false,
                                    array(
                                        "ACTIVE_COMPONENT" => "Y"
                                    )
                                );?>
                        </div>

                        <div class = "col-xs-12 col-md-2 m-search">
                            <?$APPLICATION->IncludeComponent(
                                    "bitrix:search.form",
                                    "search",
                                    Array(
                                        "PAGE" => "#SITE_DIR#search/index.php"
                                    ),
                                    false
                                );?>
                        </div>
                    </div>
                </div>

                <div class = "col-xs-6 col-md-12 header-link-row-2">
                    <div class = "row">
                        <div class = "col-md-2 visible-md visible-lg">
                            <a href="/" class = "logo">
                                <img src="/local/templates/.default/img/main/logo.png">
                            </a>
                        </div>
                        <div class = "col-xs-12 col-md-10 header-link-2">
                            <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "top_menu",
                                    array(
                                        "ROOT_MENU_TYPE" => "catalogmanu",
                                        "MAX_LEVEL" => "1",
                                        "CHILD_MENU_TYPE" => "catalogmanu",
                                        "USE_EXT" => "Y",
                                        "MENU_CACHE_TYPE" => "A",
                                        "MENU_CACHE_TIME" => "36000000",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "MENU_CACHE_GET_VARS" => array(
                                        ),
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "DELAY" => "N",
                                        "ALLOW_MULTI_SELECT" => "N"
                                    ),
                                    false,
                                    array(
                                        "ACTIVE_COMPONENT" => "Y"
                                    )
                                );?>
                        </div>
                    </div>
                </div>

            </div>
            <div class = "row">

                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider_list_template", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "-",
		"IBLOCK_ID" => "6",
		"NEWS_COUNT" => "5",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "details_link",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"COMPONENT_TEMPLATE" => "slider_list_template",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>

            </div>
            <div class = "row">
                <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/care_block.php",
                        Array(),
                        Array("MODE"=>"html")
                    );
                ?>
            </div>
            <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.section",
                    "categories_list_template",
                    array(
                        "ACTION_VARIABLE" => "action",
                        "ADD_PICT_PROP" => "-",
                        "ADD_PROPERTIES_TO_BASKET" => "Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "BACKGROUND_IMAGE" => "-",
                        "BASKET_URL" => "/personal/basket.php",
                        "BROWSER_TITLE" => "-",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COMPONENT_TEMPLATE" => "categories_list_template",
                        "DETAIL_URL" => "",
                        "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "ELEMENT_SORT_FIELD" => "sort",
                        "ELEMENT_SORT_FIELD2" => "id",
                        "ELEMENT_SORT_ORDER" => "asc",
                        "ELEMENT_SORT_ORDER2" => "desc",
                        "FILTER_NAME" => "arrFilter",
                        "IBLOCK_ID" => "5",
                        "IBLOCK_TYPE" => "products_catigories",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "LABEL_PROP" => "-",
                        "LINE_ELEMENT_COUNT" => "5",
                        "MESSAGE_404" => "",
                        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                        "MESS_BTN_BUY" => "Купить",
                        "MESS_BTN_DETAIL" => "Подробнее",
                        "MESS_BTN_SUBSCRIBE" => "Подписаться",
                        "MESS_NOT_AVAILABLE" => "Нет в наличии",
                        "META_DESCRIPTION" => "-",
                        "META_KEYWORDS" => "-",
                        "OFFERS_LIMIT" => "5",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Товары",
                        "PAGE_ELEMENT_COUNT" => "30",
                        "PARTIAL_PRODUCT_PROPERTIES" => "N",
                        "PRICE_CODE" => array(
                            0 => "BASE",
                        ),
                        "PRICE_VAT_INCLUDE" => "Y",
                        "PRODUCT_ID_VARIABLE" => "id",
                        "PRODUCT_PROPERTIES" => array(
                        ),
                        "PRODUCT_PROPS_VARIABLE" => "prop",
                        "PRODUCT_QUANTITY_VARIABLE" => "",
                        "PROPERTY_CODE" => array(
                            0 => "items",
                            1 => "",
                        ),
                        "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
                        "SECTION_ID" => $_REQUEST["SECTION_ID"],
                        "SECTION_ID_VARIABLE" => "SECTION_ID",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SEF_MODE" => "Y",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "Y",
                        "SHOW_404" => "N",
                        "SHOW_ALL_WO_SECTION" => "N",
                        "SHOW_PRICE_COUNT" => "1",
                        "TEMPLATE_THEME" => "blue",
                        "USE_MAIN_ELEMENT_SECTION" => "N",
                        "USE_PRICE_COUNT" => "N",
                        "USE_PRODUCT_QUANTITY" => "N",
                        "HIDE_NOT_AVAILABLE" => "N",
                        "PRODUCT_SUBSCRIPTION" => "N",
                        "SHOW_DISCOUNT_PERCENT" => "N",
                        "SHOW_OLD_PRICE" => "N",
                        "SHOW_CLOSE_POPUP" => "N",
                        "CONVERT_CURRENCY" => "N",
                        "ADD_TO_BASKET_ACTION" => "ADD",
                        "SEF_RULE" => "#SECTION_CODE#",
                        "SECTION_CODE_PATH" => ""
                    ),
                    false
                );?>

            <div class = "row wb-buy">
                <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/shop_selection_block.php",
                        Array(),
                        Array("MODE"=>"html")
                    );
                ?>
            </div>


        </div>
    </div>
</div>

