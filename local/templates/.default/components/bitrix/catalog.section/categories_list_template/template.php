<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);


$i = 0; # счётчик, чтобы считать число строк
if (!empty($arResult['ITEMS']))
{
    foreach ($arResult['ITEMS'] as $key => $arItem)
    {
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
        $strMainID = $this->GetEditAreaId($arItem['ID']);

        if($i>=3)
        {
            $i = 0;
        }

        # вставляем обертку-строку
        if($i == 0)
        {
            ?>
            <div class = "row main-stuff">
            <?
        }

        $arItemIDs = array(
            'ID' => $strMainID,
            'PICT' => $strMainID.'_pict',
            'SECOND_PICT' => $strMainID.'_secondpict',
            'STICKER_ID' => $strMainID.'_sticker',
            'SECOND_STICKER_ID' => $strMainID.'_secondsticker',
            'QUANTITY' => $strMainID.'_quantity',
            'QUANTITY_DOWN' => $strMainID.'_quant_down',
            'QUANTITY_UP' => $strMainID.'_quant_up',
            'QUANTITY_MEASURE' => $strMainID.'_quant_measure',
            'BUY_LINK' => $strMainID.'_buy_link',
            'BASKET_ACTIONS' => $strMainID.'_basket_actions',
            'NOT_AVAILABLE_MESS' => $strMainID.'_not_avail',
            'SUBSCRIBE_LINK' => $strMainID.'_subscribe',
            'COMPARE_LINK' => $strMainID.'_compare_link',

            'PRICE' => $strMainID.'_price',
            'DSC_PERC' => $strMainID.'_dsc_perc',
            'SECOND_DSC_PERC' => $strMainID.'_second_dsc_perc',
            'PROP_DIV' => $strMainID.'_sku_tree',
            'PROP' => $strMainID.'_prop_',
            'DISPLAY_PROP_DIV' => $strMainID.'_sku_prop',
            'BASKET_PROP_DIV' => $strMainID.'_basket_prop',
        );

        $strObName = 'ob'.preg_replace("/[^a-zA-Z0-9_]/", "x", $strMainID);

        $productTitle = (
            isset($arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])&& $arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] != ''
            ? $arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
            : $arItem['NAME']
        );

        $imgTitle = (
            isset($arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']) && $arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE'] != ''
            ? $arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']
            : $arItem['NAME']
        );
        ?>


        <div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4"  id="<? echo $strMainID; ?>">
               <a href="<? echo $GLOBALS['link_to_item_info']; ?>">

                    <img class = "icon-hover" src="<? echo $arItem['PREVIEW_PICTURE']['SRC']; ?>">
                    <div class = "second-header text-center"><? echo $productTitle; ?></div>
                    <div class = "third-header text-center"><?=$arItem["PREVIEW_TEXT"]?></div>
                    <?
                    if ($arItem['SECOND_PICT'])
                    {
                        ?>
                        <img src="<? echo (
                            !empty($arItem['PREVIEW_PICTURE_SECOND'])
                                ? $arItem['PREVIEW_PICTURE_SECOND']['SRC']
                                : $arItem['PREVIEW_PICTURE']['SRC']
                            ); ?>" class = "img-responsive" alt="<? echo $imgTitle; ?>">
                        <?
                    }
                    ?>
                </a>
        </div>

   <?

        # вставляем обертку-строку
        if($i >= 2)
        {
            ?>
            </div>
            <?
        }

        $i++;
    }

        while($i < 3)
        {
            ?>
            <div class = "col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <br>
            </div>
            <?
            # вставляем обертку-строку
            if($i >= 2)
            {
                ?>
                </div>
                <?
            }
            $i++;

        }
}
?>