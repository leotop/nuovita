<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("Регистрация");

   ?>
    <?$APPLICATION->IncludeFile(SITE_DIR."include/register_description.php", Array(), Array("MODE" => "html", "NAME" => GetMessage("REGISTER_INCLUDE_AREA"), ));?>
    <div class="wrap_main">
       <?$APPLICATION->IncludeComponent("bitrix:main.register", "registration_nuovita", Array(
	"USER_PROPERTY_NAME" => "",	// Название блока пользовательских свойств
		"SEF_MODE" => "Y",
		"SHOW_FIELDS" => array(	// Поля, которые показывать в форме
			0 => "EMAIL",
			1 => "NAME",
			2 => "SECOND_NAME",
			3 => "LAST_NAME",
		),
		"REQUIRED_FIELDS" => array(	// Поля, обязательные для заполнения
			0 => "EMAIL",
			1 => "NAME",
			2 => "LAST_NAME",
		),
		"AUTH" => "Y",	// Автоматически авторизовать пользователей
		"USE_BACKURL" => "Y",	// Отправлять пользователя по обратной ссылке, если она есть
		"SUCCESS_PAGE" => "",	// Страница окончания регистрации
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"USER_PROPERTY" => "",	// Показывать доп. свойства
		"SEF_FOLDER" => "/",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
     </div>
    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");