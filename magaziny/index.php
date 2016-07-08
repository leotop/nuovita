<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Магазины");
?>
<div class="row wb-large-row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row wb">
        <div class="hidden-xs hidden-sm col-md-1 col-lg-2"></div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6" style="padding: 0em 0em 15em 0em;">
                <div class="row wb-bottom-back">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"retail_shop", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "shop",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "0",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "ADRESS",
			1 => "TIME_WORK",
			2 => "PHONE",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "retail_shop"
	),
	false
);?>
                </div>
                <div class="row bottom-wrap">
                     <?$APPLICATION->IncludeComponent(
	                    "bitrix:news.list",
	                    "internet_shop",
	                    array(
		                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
		                    "ADD_SECTIONS_CHAIN" => "Y",
		                    "AJAX_MODE" => "N",
		                    "AJAX_OPTION_ADDITIONAL" => "",
		                    "AJAX_OPTION_HISTORY" => "N",
		                    "AJAX_OPTION_JUMP" => "N",
		                    "AJAX_OPTION_STYLE" => "Y",
		                    "CACHE_FILTER" => "N",
		                    "CACHE_GROUPS" => "Y",
		                    "CACHE_TIME" => "36000000",
		                    "CACHE_TYPE" => "A",
		                    "CHECK_DATES" => "Y",
		                    "DETAIL_URL" => "",
		                    "DISPLAY_BOTTOM_PAGER" => "Y",
		                    "DISPLAY_DATE" => "Y",
		                    "DISPLAY_NAME" => "Y",
		                    "DISPLAY_PICTURE" => "Y",
		                    "DISPLAY_PREVIEW_TEXT" => "Y",
		                    "DISPLAY_TOP_PAGER" => "N",
		                    "FIELD_CODE" => array(
			                    0 => "",
			                    1 => "",
		                    ),
		                    "FILTER_NAME" => "",
		                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
		                    "IBLOCK_ID" => "12",
		                    "IBLOCK_TYPE" => "shop",
		                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		                    "INCLUDE_SUBSECTIONS" => "Y",
		                    "MESSAGE_404" => "",
		                    "NEWS_COUNT" => "0",
		                    "PAGER_BASE_LINK_ENABLE" => "N",
		                    "PAGER_DESC_NUMBERING" => "N",
		                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		                    "PAGER_SHOW_ALL" => "N",
		                    "PAGER_SHOW_ALWAYS" => "N",
		                    "PAGER_TEMPLATE" => ".default",
		                    "PAGER_TITLE" => "Новости",
		                    "PARENT_SECTION" => "",
		                    "PARENT_SECTION_CODE" => "",
		                    "PREVIEW_TRUNCATE_LEN" => "",
		                    "PROPERTY_CODE" => array(
			                    0 => "ADRESS_SHOP",
			                    1 => "LINK",
		                    ),
		                    "SET_BROWSER_TITLE" => "Y",
		                    "SET_LAST_MODIFIED" => "N",
		                    "SET_META_DESCRIPTION" => "Y",
		                    "SET_META_KEYWORDS" => "Y",
		                    "SET_STATUS_404" => "N",
		                    "SET_TITLE" => "Y",
		                    "SHOW_404" => "N",
		                    "SORT_BY1" => "ACTIVE_FROM",
		                    "SORT_BY2" => "SORT",
		                    "SORT_ORDER1" => "DESC",
		                    "SORT_ORDER2" => "ASC",
		                    "COMPONENT_TEMPLATE" => "internet_shop"
	                    ),
	                    false
                    );?>
                </div>
            </div>
        </div>
    </div>
</div>

 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>