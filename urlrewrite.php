<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/communication/forum/#",
		"RULE" => "",
		"ID" => "bitrix:forum",
		"PATH" => "/otzyvy/index.php",
	),
	array(
		"CONDITION" => "#^([^/]+?)\\??(.*)#",
		"RULE" => "SECTION_CODE=\$1&\$2",
		"ID" => "bitrix:catalog.section",
		"PATH" => "/local/templates/nuovita/header.php",
	),
	array(
		"CONDITION" => "#^/services/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/products/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/products/index.php",
	),
	array(
		"CONDITION" => "#^/catalog/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/catalog/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>