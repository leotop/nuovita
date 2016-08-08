<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class = "row con">

					

				<div class = "col-xs-12 col-sm-12 col-md-6 col-md-push-6 col-lg-6 col-lg-push-6">					
					<div class = "row">
						<div class = "col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<div class = "row">

								<div class = "col-xs-12 second-header">Представительство <br>и сервисный центр</div>
								<div class = "col-xs-12 con-name">ООО «Нуовита»</div>
								<div class = "col-xs-12 con-phone">+7 495 709 34 38</div>
								<div class = "col-xs-12 con-mail"><a href="mailto:info@nuovita.ru">info@nuovita.ru</a></div>
								
								<div class = "col-xs-12 second-header">Эксклюзивный дистрибьютор</div>
								<div class = "col-xs-12 con-cooperation-text">
									<div class = "col-xs-12 con-name">ООО «Амата»</div>
									<div class = "col-xs-12 con-address">г. Москва, 1-й Институтский проезд, д. 3, стр. 10</div>
									<div class = "col-xs-12 con-time">Пн-Пт: 9:00 – 18:00</div>
									<div class = "col-xs-12 con-phone">+7 495 518 96 03, +7 499 174 87 29</div>
									<div class = "col-xs-12 con-mail"><a href="mailto:info@amatagroup.ru">info@amatagroup.ru</a></div>
									<div class = "col-xs-12 con-link"><a target="_blank" href="http://www.amatagroup.ru">www.amatagroup.ru</a></div>								
								</div>
							</div>
						</div>
						<div class = "hidden-xs hidden-sm col-md-4 col-lg-6"></div>
					</div>
				</div>



				<div class = "col-xs-12 col-sm-12 col-md-6 col-md-pull-6 col-lg-6 col-lg-pull-6">					
					<div class = "row">
						<div class = "hidden-xs hidden-sm col-md-2 col-lg-4"></div>
						<div class = "col-xs-12 col-sm-12 col-md-10 col-lg-8">

							<div class = "row">
								<div class = "col-xs-12 col-sm-12 col-md-9 col-lg-9 second-header">
									Обратная связь
								</div>
								<div class = "clearfix"></div>
								<div class = "col-xs-12 col-sm-6 col-md-9 col-lg-9 con-form">
									<form>
										<input type = "text" placeholder = "Имя" class = "con-form-textfield" id = "">
										<input type = "text" placeholder = "Электронный адрес" class = "con-form-textfield" id = "">
										<input type = "text" placeholder = "Номер телефона" class = "con-form-textfield" id = "phone">
										<textarea placeholder = "Текст сообщения" class = "con-form-textmessage" id = ""></textarea>
										<input type = "submit" value = "Отправить" class = "con-form-button" id = "">
									</form>
								</div>
								<div class = "hidden-xs col-sm-6 col-md-3 col-lg-3"></div>
							</div>
						</div>
					</div>
				</div>

			</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>