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
<div class="row wb-large-row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="row wb">
			<div class="hidden-xs hidden-sm col-md-1 col-lg-2">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 second-header wb-padding">
						 Интернет-магазины
					</div>
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 wb-netshops-list">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Babadu
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.babadu.ru">www.babadu.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Ваша первая покупка
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.koliaski-krovatki.ru">www.koliaski-krovatki.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Кораблик
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.korablik.ru">www.korablik.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Купи коляску
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.kupi-kolyasku.ru">www.kupi-kolyasku.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Акушерство
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.akusherstvo.ru">www.akusherstvo.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Элефантенок
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.elefantenok.ru">www.elefantenok.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Мамин городок
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.mamingorodok.ru">www.mamingorodok.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Инфанты
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.infanty.ru">www.infanty.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Tem-Tem
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.tem-tem.ru">www.tem-tem.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 King Baby
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.kingbaby.ru">www.kingbaby.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Mikki House
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.mikki-house.ru">www.mikki-house.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Рубиду
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.oftrade.ru">www.oftrade.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Малыш и Ко
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.malishiko.ru">www.malishiko.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Наследник
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.naslednik-baby.ru">www.naslednik-baby.ru</a>
							</div>
							<div class="clearfix">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Нежная забота
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.topcare.ru">www.topcare.ru</a>
							</div>
							<div class="clearfix">
							</div>
<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-shopname">
								 Colibri&amp;Lilly
							</div>
							<div class="col-xs-12 col-sm-6 col-md-5 wb-netshop-url">
 <a target="_blank" href="http://www.colibri-lilly.ru/">www.colibri-lilly.ru</a>
							</div>
							<div class="clearfix">
							</div>
						</div>
					</div>
				</div>
				<div class="row wb-bottom-back">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 second-header">
						 Розничные магазины
					</div>
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0 wb-shops-list">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-name">
								 Савеловский
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wb-shop-info">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-address">
										 г.&nbsp;Москва, ул.&nbsp;Сущевский вал, д.&nbsp;5,&nbsp;стр.&nbsp;1, 1&nbsp;этаж, пав.&nbsp;М08
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-time">
										 Пн-Вс: 10:00 – 21:00
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-phone">
										 +7 925 384 34 52
									</div>
								</div>
							</div>
							<div class="clearfix wb-margin">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-name">
								 Аэробус
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wb-shop-info">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-address">
										 г.&nbsp;Москва, Варшавское&nbsp;шоссе, д.&nbsp;95,&nbsp;к.&nbsp;1, 2&nbsp;этаж, магазин&nbsp;«Детский»
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-time">
										 Пн-Вс: 10:00 – 22:00
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-phone">
										 +7 968 871 66 79
									</div>
								</div>
							</div>
							<div class="clearfix wb-margin">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-name">
								 Ваша первая покупка
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wb-shop-info">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-address">
										 г. Москва, ул.&nbsp;Подъемная, д.&nbsp;14,&nbsp;стр.&nbsp;37
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-time">
										 Пн-Пт: 10:00 – 19:00
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-phone">
										 8 800 700 56 76
									</div>
								</div>
							</div>
							<div class="clearfix wb-margin">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-xs-12 col-sm-12 col-md-12 wb-shop-name">
								 Малютка 66
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wb-shop-info">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-xs-12 col-sm-12 col-md-12 wb-shop-address">
										 г.&nbsp;Екатеринбург, ул.&nbsp;Розы Люксембург, д.&nbsp;34
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-xs-12 col-sm-12 col-md-12 wb-shop-time">
										 Пн-Пт: 11:00 – 19:00
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-xs-12 col-sm-12 col-md-12 wb-shop-phone">
										 +7 343 269 41 97
									</div>
								</div>
							</div>
							<div class="clearfix wb-margin">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-name">
								 Сын и дочь
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wb-shop-info">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-address">
										 г.&nbsp;Ростов-на-Дону, ул.&nbsp;Кольцевая&nbsp;3-я, д.&nbsp;58&nbsp;Б, 1&nbsp;этаж
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-time">
										 Пн-Пт: 9:00 – 18:00
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-phone">
										 +7 863 236 15 08
									</div>
								</div>
							</div>
							<div class="clearfix wb-margin">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-name">
								 Карапуз
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wb-shop-info">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-address">
										 г.&nbsp;Пятигорск, Георгиевское&nbsp;шоссе,&nbsp;1&nbsp;км, рынок&nbsp;&nbsp;«Кавминводский»
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-time">
										 Пн-Пт: 9:00 – 18:00
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-phone">
										 +7 928 266 12 92
									</div>
								</div>
							</div>
							<div class="clearfix wb-margin">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-name">
								 Детский мир
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wb-shop-info">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-address">
										 г.&nbsp;Симферополь, ул.&nbsp;Пушкина, д.&nbsp;3
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-time">
										 Пн-Пт: 9:00 – 19:00, Сб: 10:00 – 18:00
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-phone">
										 8 800 775 35 06
									</div>
								</div>
							</div>
							<div class="clearfix wb-margin">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-name">
								 Бим Бом
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wb-shop-info">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-address">
										 г.&nbsp;Майкоп, ул.&nbsp;Пролетарская, д.&nbsp;2
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-time">
										 Пн-Пт: 10:00 – 18:00
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-phone">
										 +7 961 827 87 08
									</div>
								</div>
							</div>
							<div class="clearfix wb-margin">
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-name">
								 Детский мир Крош
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wb-shop-info">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-address">
										 г.&nbsp;Анапа, ул.&nbsp;Ленина, д.&nbsp;144&nbsp;Б
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-time">
										 Пн-Вс: 9:00 – 20:00
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-phone">
										 +7 918 987 87 03
									</div>
								</div>
							</div>
							<div class="clearfix wb-margin">
							</div>
					<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-name">
								 Мебельный торговый центр "Гранд-2"
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wb-shop-info">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-address">
										г. Химки, Бутаково 4, секция детской мебели, модуль "Colibri&amp;Lilly"
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-time">
										 Пн-Вс: 11:00 – 20:00
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-phone">
										 +7 499 755 79 05
									</div>
								</div>
							</div>
							<div class="clearfix wb-margin">
							</div>
<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-name">
								 ТК "Три Кита"
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wb-shop-info">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-address">
										Можайское шоссе, 2 км от МКАД (в сторону области), модуль "Cleveroom"
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-time">
										 Пн-Вс: 10:00 – 21:00
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 wb-shop-phone">
										 +7 499 390-20-99
									</div>
								</div>
							</div>
							<div class="clearfix wb-margin">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden-xs hidden-sm col-md-4 col-lg-4">
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>