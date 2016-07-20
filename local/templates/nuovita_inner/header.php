<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE HTML>
<html>
<head>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src = "/local/templates/.default/js/bootstrap.min.js"></script>
    <script src="/local/templates/.default/plugins/slider/responsiveslides.min.js"></script>
    <script src="/local/templates/.default/plugins/form-button/form_button.min.js"></script>
    <script src="/local/templates/.default/plugins/swipebox-master/jquery.swipebox.min.js"></script>
    <script type="text/javascript" src = "/local/templates/.default/plugins/social-nets/goodshare.min.js"></script>

	<?$APPLICATION->ShowHead();?>

	<title><?$APPLICATION->ShowTitle()?></title>
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/local/templates/.default/plugins/slider/responsiveslides.css">
	<meta name = "format-detection" content = "telephone=no" />
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/local/templates/.default/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/local/templates/.default/style/main.css" media = "screen">
    <link rel="stylesheet" type="text/css" href="/local/templates/.default/style/form_button.css" media = "screen">
    <link rel="stylesheet" href="/local/templates/.default/plugins/swipebox-master/swipebox.css">

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
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "top",
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

		</div>
	</div>

