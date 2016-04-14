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
?>

<div class = "row">
    <div class = "col-xs-12 main-slider">
        <div class="rslides_container">
            <ul class="rslides" id="slider1">

<?foreach($arResult["ITEMS"] as $arItem):?>

    <li style= "display:inline; transition: opacity 0ms ease-in-out;">
        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="" class = "rslider_max_img">
        <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"];?>" alt="" class = "rslider_min_img">
        <div class = "rslider-text">
            <h2><?=$arItem["NAME"];?></h2>
            <p><?=$arItem["PREVIEW_TEXT"];?></p>
            <a href = "<? echo($arItem["DETAIL_TEXT"]); ?>">Узнать больше</a>
        </div>
        <a href="<? echo($arItem["DETAIL_TEXT"]); ?>" class = "main_banner_link"> </a>
        <a href="<? echo($arItem["DETAIL_TEXT"]); ?>" class = "mobile-banner-link"></a>
    </li>

<?endforeach;?>

            </ul>
        </div>
    </div>
</div>

