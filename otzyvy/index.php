<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
?>

 <?$APPLICATION->IncludeComponent("bitrix:forum.topic.reviews", "komment_nuovita", Array(
	"SHOW_LINK_TO_FORUM" => "N",	// Показать ссылку на форум
		"FILES_COUNT" => "2",	// Максимальное количество файлов, прикрепленных к одному сообщению
		"FORUM_ID" => "1",	// ID форума для отзывов
		"TASK_ID" => "74",
		"POST_FIRST_MESSAGE" => "Y",
		"POST_FIRST_MESSAGE_TEMPLATE" => "#IMAGE#[url=#LINK#]#TITLE#[/url]#BODY#",
		"URL_TEMPLATES_READ" => "",	// Страница чтения темы форума
		"URL_TEMPLATES_DETAIL" => "",	// Страница элемента инфоблока
		"URL_TEMPLATES_PROFILE_VIEW" => "",	// Страница пользователя
		"SHOW_RATING" => "",	// Включить рейтинг
		"RATING_TYPE" => "like_graphic",	// Вид кнопок рейтинга
		"MESSAGES_PER_PAGE" => "20",	// Количество сообщений на одной странице
		"PAGE_NAVIGATION_TEMPLATE" => "",	// Название шаблона для вывода постраничной навигации
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",	// Формат показа даты и времени
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"USE_CAPTCHA" => "Y",	// Использовать CAPTCHA
		"PREORDER" => "Y",	// Выводить сообщения в прямом порядке
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "0",	// Время кеширования (сек.)
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "reviews",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "11",	// Код информационного блока
		"ELEMENT_ID" => "74",	// ID элемента
		"NAME_TEMPLATE" => "",	// Формат имени
		"EDITOR_CODE_DEFAULT" => "N",	// По умолчанию показывать невизуальный режим редактора
		"SHOW_AVATAR" => "Y",	// Показывать аватары пользователей
		"SHOW_MINIMIZED" => "N",	// Сворачивать форму добавления отзыва
		"AJAX_POST" => "Y",	// Использовать AJAX в диалогах
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>