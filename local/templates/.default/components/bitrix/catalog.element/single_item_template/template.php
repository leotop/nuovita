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
$templateLibrary = array('popup');
$currencyList = '';
if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}
$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css',
	'TEMPLATE_CLASS' => 'bx_'.$arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList
);
unset($currencyList, $templateLibrary);

$strMainID = $this->GetEditAreaId($arResult['ID']);
$arItemIDs = array(
	'ID' => $strMainID,
	'PICT' => $strMainID.'_pict',
	'DISCOUNT_PICT_ID' => $strMainID.'_dsc_pict',
	'STICKER_ID' => $strMainID.'_sticker',
	'BIG_SLIDER_ID' => $strMainID.'_big_slider',
	'BIG_IMG_CONT_ID' => $strMainID.'_bigimg_cont',
	'SLIDER_CONT_ID' => $strMainID.'_slider_cont',
	'SLIDER_LIST' => $strMainID.'_slider_list',
	'SLIDER_LEFT' => $strMainID.'_slider_left',
	'SLIDER_RIGHT' => $strMainID.'_slider_right',
	'OLD_PRICE' => $strMainID.'_old_price',
	'PRICE' => $strMainID.'_price',
	'DISCOUNT_PRICE' => $strMainID.'_price_discount',
	'SLIDER_CONT_OF_ID' => $strMainID.'_slider_cont_',
	'SLIDER_LIST_OF_ID' => $strMainID.'_slider_list_',
	'SLIDER_LEFT_OF_ID' => $strMainID.'_slider_left_',
	'SLIDER_RIGHT_OF_ID' => $strMainID.'_slider_right_',
	'QUANTITY' => $strMainID.'_quantity',
	'QUANTITY_DOWN' => $strMainID.'_quant_down',
	'QUANTITY_UP' => $strMainID.'_quant_up',
	'QUANTITY_MEASURE' => $strMainID.'_quant_measure',
	'QUANTITY_LIMIT' => $strMainID.'_quant_limit',
	'BASIS_PRICE' => $strMainID.'_basis_price',
	'BUY_LINK' => $strMainID.'_buy_link',
	'ADD_BASKET_LINK' => $strMainID.'_add_basket_link',
	'BASKET_ACTIONS' => $strMainID.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $strMainID.'_not_avail',
	'COMPARE_LINK' => $strMainID.'_compare_link',
	'PROP' => $strMainID.'_prop_',
	'PROP_DIV' => $strMainID.'_skudiv',
	'DISPLAY_PROP_DIV' => $strMainID.'_sku_prop',
	'OFFER_GROUP' => $strMainID.'_set_group_',
	'BASKET_PROP_DIV' => $strMainID.'_basket_prop',
);
$strObName = 'ob'.preg_replace("/[^a-zA-Z0-9_]/", "x", $strMainID);
$templateData['JS_OBJ'] = $strObName;




$strTitle = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"] != ''
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]
	: $arResult['NAME']
);
$strAlt = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"] != ''
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]
	: $arResult['NAME']
);



//  ***********************
//   тут начало блока с картинками и описанием товара
//  *****************

$APPLICATION->IncludeComponent(
	"bitrix:catalog.element", 
	"id_getter_template", 
	array(
		"IBLOCK_TYPE" => "item",
		"IBLOCK_ID" => "7",
		"ELEMENT_ID" => $arResult["ID"],
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
			0 => "item_photos",
			1 => "items",
			2 => "PAGES",
			3 => "",
		),
		"PRICE_CODE" => array(
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"LINK_IBLOCK_TYPE" => "ptodict_photos",
		"LINK_IBLOCK_ID" => "8",
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

//*******************************************************
// ***   ТУТ ДАННЫЕ ДЛЯ ТЕСТ�?РОВАН�?Я ПЕРЕМЕННЫХ

//echo("TTTT");
//echo($GLOBALS['link_cat_id']);
//print_r($GLOBALS['link_cat_id']);
//echo("<br> HH <br>");
//var_dump($GLOBALS['link_cat_id']);
//echo("YYYYY");

/*
$arSelect = [];//Array("ID", "NAME");
$arFilter = Array("IBLOCK_ID"=>8, "DETAIL_PICTURE"=>70);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
echo '<pre>'; print_r($res); echo '</pre>';
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    print_r($arFields);
}

*/
//echo("<br>??????????????<br>");

// *************************************
// ***   НАЧАЛО ШАБЛОНА  ******
?>
<div class = "row it-tabs">

    <div class = "col-xs-12 col-sm-12 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
        <div class = "row">
<?

$line_for_icons = "<div class = \"col-xs-2 col-sm-1 col-sm-offset-2 col-md-2 col-md-offset-0 col-lg-2\">";
$line_for_icons .= "<ul id=\"tabs-titles\" class = \"nav\">";

$line_for_images = "<div class = \"col-xs-10 col-sm-9 col-md-10 col-lg-10\">";
$line_for_images .= "                <ul id=\"tabs-contents\">";

$current_icon_text = " current";

foreach ($GLOBALS['link_cat_id'] as $cur_cat_id)
{
    //echo("ID=".$cur_cat_id."<br>");
    //************************************************************
    //********     здесь берем данные о картинках для элемента
    $APPLICATION->IncludeComponent("bitrix:catalog.element", "item_photos_output_template", Array(
        "ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
        "ADD_DETAIL_TO_SLIDER" => "N",	// Добавлять детальную картинку в слайдер
        "ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
        "ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
        "ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
        "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
        "BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
        "BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
        "BRAND_USE" => "N",	// �?спользовать компонент "Бренды"
        "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
        "CACHE_TYPE" => "A",	// Тип кеширования
        "CHECK_SECTION_ID_VARIABLE" => "N",	// �?спользовать код группы из переменной, если не задан раздел элемента
        "COMPONENT_TEMPLATE" => ".default",
        "DETAIL_PICTURE_MODE" => "IMG",	// Режим показа детальной картинки
        "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
        "DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
        "DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
        "DISPLAY_NAME" => "Y",	// Выводить название элемента
        "DISPLAY_PREVIEW_TEXT_MODE" => "E",	// Показ описания для анонса
        "ELEMENT_CODE" => "",	// Код элемента

        "ELEMENT_ID" => $cur_cat_id,	// ID элемента  <---  !!!!!!!!!!!!!!!

        "IBLOCK_ID" => "8",	// �?нфоблок
        "IBLOCK_TYPE" => "ptodict_photos",	// Тип инфоблока
        "LABEL_PROP" => "-",	// Свойство меток товара
        "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу, где будет показан список связанных элементов
        "LINK_IBLOCK_ID" => "",	// ID инфоблока, элементы которого связаны с текущим элементом
        "LINK_IBLOCK_TYPE" => "",	// Тип инфоблока, элементы которого связаны с текущим элементом
        "LINK_PROPERTY_SID" => "",	// Свойство, в котором хранится связь
        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
        "MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
        "MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
        "MESS_BTN_COMPARE" => "Сравнить",	// Текст кнопки "Сравнить"
        "MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
        "MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
        "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
        "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
        "OFFERS_LIMIT" => "0",	// Максимальное количество предложений для показа (0 - все)
        "PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
        "PRICE_CODE" => "",	// Тип цены
        "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
        "PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
        "PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
        "PRODUCT_PROPERTIES" => "",	// Характеристики товара
        "PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
        "PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
        "PROPERTY_CODE" => array(	// Свойства
            0 => "",
            1 => "",
        ),
        "SECTION_CODE" => "",	// Код раздела
        "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
        "SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
        "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
        "SEF_MODE" => "N",	// Включить поддержку ЧПУ
        "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
        "SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
        "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",	// Устанавливать статус 404
        "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
        "SHOW_404" => "N",	// Показ специальной страницы
        "SHOW_DEACTIVATED" => "N",	// Показывать деактивированные товары
        "SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
        "TEMPLATE_THEME" => "blue",	// Цветовая тема
        "USE_COMMENTS" => "N",	// Включить отзывы о товаре
        "USE_ELEMENT_COUNTER" => "Y",	// �?спользовать счетчик просмотров
        "USE_MAIN_ELEMENT_SECTION" => "N",	// �?спользовать основной раздел для показа элемента
        "USE_PRICE_COUNT" => "N",	// �?спользовать вывод цен с диапазонами
        "USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
        "USE_VOTE_RATING" => "N",	// Включить рейтинг товара
    ),
        false
    );

    // *********************************************
    // выводим данные в шаблон для картинок
    //echo("<img src=\"".$GLOBALS['small_pic_data']['SRC']."\" width=50>");
    //echo("<img src=\"".$GLOBALS['big_pic_data']['SRC']."\" width=100><br>");

    $line_for_icons .= "                <li class = \"nav-title ".$current_icon_text."\">";
    $line_for_icons .= "                   <img src=\"".$GLOBALS['small_pic_data']['SRC']."\">";
    $line_for_icons .= "                </li>";
    $current_icon_text = "";


    $line_for_images .= "                <li>";
    $line_for_images .= "                        <div class=\"content\">";
    $line_for_images .= "                            <a href=\"".$GLOBALS['big_pic_data']['SRC']."\" class=\"swipebox\" title=\"".$GLOBALS['small_pic_data']['TITLE']."\">";
    $line_for_images .= "                                <img src=\"".$GLOBALS['big_pic_data']['SRC']."\">";
    $line_for_images .= "                            </a>";
    $line_for_images .= "                            <p class = \"it-tab-head\">".$GLOBALS['pic_head_data']."</p>";
    $line_for_images .= "                            <p class = \"it-tab-text\">".$GLOBALS['pic_text_data']."</p>";
    $line_for_images .= "                        </div>";
    $line_for_images .= "                    </li>";


    // **************************
} // foreach ($GLOBALS['link_cat_id'] as $cur_cat_id)

$line_for_icons .= "                </ul>";
$line_for_icons .= "            </div>";

$line_for_images .= "                </ul>";
$line_for_images .= "            </div>";

// выводим иконки
echo($line_for_icons);

// выводим иконки
echo($line_for_images);

?>

        </div>
    </div>


    <div class = "col-xs-12 col-sm-12 col-md-5 col-lg-5 it-descript">
        <div class = "row">
            <div class = "col-xs-12 col-sm-12 col-md-12 it-descript-header"><? echo($arResult["NAME"]); ?></div>
<?
// **************************
// блок с коротким описанием (анонсом)
if ('' != $arResult['PREVIEW_TEXT'])
{
    if (
        'S' == $arParams['DISPLAY_PREVIEW_TEXT_MODE']
        || ('E' == $arParams['DISPLAY_PREVIEW_TEXT_MODE'] && '' == $arResult['DETAIL_TEXT'])
    )
    {
        ?>
        <div class = "col-xs-12 col-sm-12 col-md-12 it-descript-text">
            <?
            echo ('html' == $arResult['PREVIEW_TEXT_TYPE'] ? $arResult['PREVIEW_TEXT'] : '<p>'.$arResult['PREVIEW_TEXT'].'</p>');
            ?>
        </div>
        <?
    }
}

// *************
// тут закрывающий див для контейнера с текстом о товаре и с картинками
?>
            <div class = "col-xs-12 col-sm-12 col-md-12 it-descript-contact">
                <div class = "row">
                    <div class = "col-xs-12 col-sm-12 col-md-7 col-lg-6 it-descript-social goodshare-color">
                        <a href="#" class="goodshare" data-type="fb"><img src="<?= SITE_TEMPLATE_PATH ?>/img/item/fb.png"></a>
                        <a href="#" class="goodshare" data-type="vk"><img src="<?= SITE_TEMPLATE_PATH ?>/img/item/vk.png"></a>
                        <a href="#" class="goodshare" data-type="ok"><img src="<?= SITE_TEMPLATE_PATH ?>/img/item/oc.png"></a>
                        <a href="#" class="goodshare" data-type="tw"><img src="<?= SITE_TEMPLATE_PATH ?>/img/item/tw.png"></a>
                        <a href="#" class="goodshare" data-type="mr"><img src="<?= SITE_TEMPLATE_PATH ?>/img/item/social.png"></a>
                    </div>
                    <div class = "col-xs-12 col-sm-12 col-md-5 col-lg-6 it-descript-shop">
                        <a href="#">Найти магазин</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class = "hidden-xs hidden-sm col-md-1 col-lg-1"></div>
</div>
<?

//*******************************************
//*******************************************
//****     ����� ����� ��� ��������     *****
if(strcmp($arResult['CODE'], "transformers") == 0)
{
    ?>
    <div class="row">
        <div class="hidden-xs hidden-sm col-md-12 col-lg-12 item-second-header">��������� �������������</div>

        <div class="hidden-xs hidden-sm col-md-0 col-lg-0"></div>

        <div class="hidden-xs hidden-sm col-md-12 col-lg-12">

            <div class="row">
                <div class="col-md-12 col-lg-12 it-trans-img-1">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/item/it-img-row-1.png">
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-3 col-lg-3">
                            <div class="col-md-12 col-lg-12 it-trans-header">��������</div>
                            <div class="col-md-12 col-lg-12 it-trans-age">0�6 �������</div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="col-md-12 col-lg-12 it-trans-header">����������� ������</div>
                            <div class="col-md-12 col-lg-12 it-trans-age">0�9 �������</div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="col-md-12 col-lg-12 it-trans-header">��������</div>
                            <div class="col-md-12 col-lg-12 it-trans-age">0�2 ����</div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="col-md-12 col-lg-12 it-trans-header">���������� �������</div>
                            <div class="col-md-12 col-lg-12 it-trans-age">1�2 ����</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12 it-trans-img-2">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/item/it-img-row-2.png">
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-3 col-lg-3">
                            <div class="col-md-12 col-lg-12 it-trans-header">�����</div>
                            <div class="col-md-12 col-lg-12 it-trans-age">9�18 �������</div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="col-md-12 col-lg-12 it-trans-header">��������</div>
                            <div class="col-md-12 col-lg-12 it-trans-age">2�3 ����</div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="col-md-12 col-lg-12 it-trans-header">������ � ������</div>
                            <div class="col-md-12 col-lg-12 it-trans-age">3�9 ���</div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="col-md-12 col-lg-12 it-trans-header">������������ �������</div>
                            <div class="col-md-12 col-lg-12 it-trans-age">3�9 ���</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="hidden-xs hidden-sm col-md-0 col-lg-0"></div>

    </div>
    <?
} // end if
//#**********************************
//****     �������� ������      *****
?> <div class = "hidden-xs hidden-sm col-md-1 col-lg-2"></div>

    <div class = "col-xs-12 col-sm-10 col-sm-offset-1 col-md-11 col-md-offset-1 col-lg-6 col-lg-offset-0">

        <div class = "row">
            <div class = "col-xs-12 col-sm-12 col-md-12 second-header wb-padding">
                ��������������
            </div>
            <div></div>
            <div class = "col-xs-12 col-sm-12 col-md-10 col-lg-12 col-lg-offset-0 wb-netshops-list">
                <div class = "row">
<?
foreach ($arResult['PROPERTIES'] as $arPropertyData)
{
    if(strcmp($arPropertyData['CODE'], "item_photos") != 0)
    {
        ?>
        <div class = "col-xs-12 col-sm-5 col-md-4 wb-netshop-name"><? echo($arPropertyData['NAME']); ?></div>
        <div class = "col-xs-12 col-sm-7 col-md-7 it-charact-value"><? echo($arPropertyData['VALUE']); ?></div>
        <div class = "clearfix"></div>
        <?
    }
}

?>
                </div>
            </div>
        </div>

    </div>