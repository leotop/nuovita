<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Îòçûâû");
?>

 <?$APPLICATION->IncludeComponent(
	"bitrix:forum.topic.reviews", 
	"komment_nuovita", 
	array(
		"SHOW_LINK_TO_FORUM" => "N",
		"FILES_COUNT" => "2",
		"FORUM_ID" => "1",
		"TASK_ID" => "74",
		"POST_FIRST_MESSAGE" => "Y",
		"POST_FIRST_MESSAGE_TEMPLATE" => "#IMAGE#[url=#LINK#]#TITLE#[/url]#BODY#",
		"URL_TEMPLATES_READ" => "",
		"URL_TEMPLATES_DETAIL" => "",
		"URL_TEMPLATES_PROFILE_VIEW" => "",
		"SHOW_RATING" => "",
		"RATING_TYPE" => "like_graphic",
		"MESSAGES_PER_PAGE" => "20",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"USE_CAPTCHA" => "Y",
		"PREORDER" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "0",
		"COMPONENT_TEMPLATE" => "komment_nuovita",
		"IBLOCK_TYPE" => "rewievs",
		"IBLOCK_ID" => "14",
		"ELEMENT_ID" => "187",
		"NAME_TEMPLATE" => "",
		"EDITOR_CODE_DEFAULT" => "N",
		"SHOW_AVATAR" => "Y",
		"SHOW_MINIMIZED" => "N",
		"AJAX_POST" => "Y"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>