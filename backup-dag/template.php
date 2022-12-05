<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

global $arTheme;

use \Bitrix\Main\Localization\Loc,
    \Aspro\Functions\CAsproAllcorp3;

$bOrderViewBasket = $arParams['ORDER_VIEW'];
$basketURL = isset($arTheme['BASKET_PAGE_URL']) && strlen(trim($arTheme['BASKET_PAGE_URL']['VALUE'])) ? $arTheme['BASKET_PAGE_URL']['VALUE'] : SITE_DIR . 'cart/';
$dataItem = $bOrderViewBasket ? CAllcorp3::getDataItem($arResult) : false;
$bOrderButton = $arResult['PROPERTIES']['FORM_ORDER']['VALUE_XML_ID'] == 'YES';
$bAskButton = $arResult['PROPERTIES']['FORM_QUESTION']['VALUE_XML_ID'] == 'YES';
$bOcbButton = $arParams['SHOW_ONE_CLINK_BUY'] != 'N';
$bGalleryThmbVertical = $arParams['GALLERY_THUMB_POSITION'] == 'vertical';
$cntVisibleChars = intval($arParams['VISIBLE_PROP_COUNT']) > 0 ? intval($arParams['VISIBLE_PROP_COUNT']) : 6;

//Добавление CSS
$APPLICATION->SetAdditionalCSS("/bitrix/templates/aspro-allcorp3/components/bitrix/catalog.element/test/hotel-main.css");

/*set array props for component_epilog*/
$templateData = array(
    'DETAIL_PAGE_URL' => $arResult['DETAIL_PAGE_URL'],
    'ORDER' => $bOrderViewBasket,
    'TIZERS' => array(
        'IBLOCK_ID' => $arResult['PROPERTIES']['LINK_TIZERS']['LINK_IBLOCK_ID'],
        'VALUE' => $arResult['TIZERS'],
    ),
    'FAQ' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_FAQ')),
    'REVIEWS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_REVIEWS')),
    'VACANCY' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_VACANCY')),
    'PARTNERS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_PARTNERS')),
    'SALE' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_SALE'), array('LINK_GOODS', 'LINK_GOODS_FILTER')),
    'NEWS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_NEWS'), array('LINK_GOODS', 'LINK_GOODS_FILTER')),
    'STAFF' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_STAFF'), array('LINK_GOODS', 'LINK_GOODS_FILTER')),
    'ARTICLES' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_ARTICLES'), array('LINK_GOODS', 'LINK_GOODS_FILTER')),
    'PROJECTS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_PROJECTS'), array('LINK_GOODS', 'LINK_GOODS_FILTER')),
    'SERVICES' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_SERVICES'), array('LINK_GOODS', 'LINK_GOODS_FILTER')),
    'SKU' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_SKU')),
    'GOODS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_GOODS', 'LINK_GOODS_FILTER'), array('LINK_GOODS')),
    'TARIFFS' => CAsproAllcorp3::getCrossLinkedItems($arResult, array('LINK_TARIF')),
);
?>

<? // top banner?>
<? $templateData['SECTION_BNR_CONTENT'] = isset($arResult['PROPERTIES']['BNR_TOP']) && $arResult['PROPERTIES']['BNR_TOP']['VALUE_XML_ID'] == 'YES'; ?>
<? if ($templateData['SECTION_BNR_CONTENT']): ?>
    <?
    $templateData['SECTION_BNR_UNDER_HEADER'] = $arResult['PROPERTIES']['BNR_TOP_UNDER_HEADER']['VALUE_XML_ID'];
    $templateData['SECTION_BNR_COLOR'] = $arResult['PROPERTIES']['BNR_TOP_COLOR']['VALUE_XML_ID'];
    $atrTitle = $arResult['PROPERTIES']['BNR_TOP_BG']['DESCRIPTION'] ?: $arResult['PROPERTIES']['BNR_TOP_BG']['TITLE'] ?: $arResult['NAME'];
    $atrAlt = $arResult['PROPERTIES']['BNR_TOP_BG']['DESCRIPTION'] ?: $arResult['PROPERTIES']['BNR_TOP_BG']['ALT'] ?: $arResult['NAME'];

    //buttons
    $bannerButtons = [
        [
            'TITLE' => $arResult['PROPERTIES']['BUTTON1TEXT']['VALUE'] ?? '',
            'CLASS' => 'btn choise ' . ($arResult['PROPERTIES']['BUTTON1CLASS']['VALUE_XML_ID'] ?? 'btn-default') . ' ' . ($arResult['PROPERTIES']['BUTTON1COLOR']['VALUE_XML_ID'] ?? ''),
            'ATTR' => [
                ($arResult['PROPERTIES']['BUTTON1TARGET']['VALUE_XML_ID'] === 'scroll' || !$arResult['PROPERTIES']['BUTTON1TARGET']['VALUE_XML_ID']
                    ? 'data-block=".right_block .detail"'
                    : 'target="' . $arResult['PROPERTIES']['BUTTON1TARGET']['VALUE_XML_ID'] . '"')
            ],
            'LINK' => $arResult['PROPERTIES']['BUTTON1LINK']['VALUE'],
            'TYPE' => $arResult['PROPERTIES']['BUTTON1TARGET']['VALUE_XML_ID'] === 'scroll' || !$arResult['PROPERTIES']['BUTTON1TARGET']['VALUE_XML_ID']
                ? 'anchor'
                : 'link'
        ]
    ];

    if ($arResult['PROPERTIES']['BUTTON2TEXT']['VALUE'] && $arResult['PROPERTIES']['BUTTON2LINK']['VALUE']) {
        $bannerButtons[] = [
            'TITLE' => $arResult['PROPERTIES']['BUTTON2TEXT']['VALUE'],
            'CLASS' => 'btn choise ' . ($arResult['PROPERTIES']['BUTTON2CLASS']['VALUE_XML_ID'] ?? 'btn-default') . ' ' . ($arResult['PROPERTIES']['BUTTON2COLOR']['VALUE_XML_ID'] ?? ''),
            'ATTR' => [
                ($arResult['PROPERTIES']['BUTTON2TARGET']['VALUE_XML_ID'] ? 'target="' . $arResult['PROPERTIES']['BUTTON2TARGET']['VALUE_XML_ID'] . '"' : '')
            ],
            'LINK' => $arResult['PROPERTIES']['BUTTON2LINK']['VALUE'],
            'TYPE' => 'link',
        ];
    }
    ?>
    <? $this->SetViewTarget('section_bnr_content'); ?>
    <? \Aspro\Functions\CAsproAllcorp3::showBlockHtml(array(
        'FILE' => '/images/detail_banner.php',
        'PARAMS' => array(
            'TITLE' => $arResult['NAME'],
            'COLOR' => $templateData['SECTION_BNR_COLOR'],
            'TEXT' => array(
                'TOP' => $arResult['SECTION'] ? reset($arResult['SECTION']['PATH'])['NAME'] : '',
                'PREVIEW' => array(
                    'TYPE' => $arResult['PREVIEW_TEXT_TYPE'],
                    'VALUE' => $arResult['PREVIEW_TEXT'],
                )
            ),
            'PICTURES' => array(
                'BG' => CFile::GetFileArray($arResult['PROPERTIES']['BNR_TOP_BG']['VALUE']),
                'IMG' => CFile::GetFileArray($arResult['PROPERTIES']['BNR_TOP_IMG']['VALUE']),
            ),
            'BUTTONS' => $bannerButtons,
            'ATTR' => array(
                'ALT' => $atrAlt,
                'TITLE' => $atrTitle,
            ),
            'TOP_IMG' => $bTopImg
        ),
    )); ?>
    <? $this->EndViewTarget(); ?>
<? endif; ?>

<?
$article = $arResult['DISPLAY_PROPERTIES']['ARTICLE']['VALUE'];
$status = $arResult['DISPLAY_PROPERTIES']['STATUS']['VALUE'];
$statusCode = $arResult['DISPLAY_PROPERTIES']['STATUS']['VALUE_XML_ID'];

/* sku replace start */
$arCurrentOffer = $arResult['SKU']['CURRENT'];

if ($arCurrentOffer) {
    $arResult['PARENT_IMG'] = '';
    if ($arResult['PREVIEW_PICTURE']) {
        $arResult['PARENT_IMG'] = $arResult['PREVIEW_PICTURE'];
    } elseif ($arResult['DETAIL_PICTURE']) {
        $arResult['PARENT_IMG'] = $arResult['DETAIL_PICTURE'];
    }

    $oid = \Bitrix\Main\Config\Option::get('aspro.allcorp3', 'CATALOG_OID', 'oid');
    if ($oid) {
        $arResult['DETAIL_PAGE_URL'] .= '?' . $oid . '=' . $arCurrentOffer['ID'];
        $arCurrentOffer['DETAIL_PAGE_URL'] = $arResult['DETAIL_PAGE_URL'];
    }
    if ($arParams['SHOW_GALLERY'] === 'Y') {
        $pictureID = $arCurrentOffer['PREVIEW_PICTURE'] ?? $arCurrentOffer['DETAIL_PICTURE'];
        if ($pictureID) {
            array_unshift($arResult['GALLERY'], \CFile::GetFileArray($pictureID));
            array_splice($arResult['GALLERY'], $arParams['MAX_GALLERY_ITEMS']);
        }
    } else {
        if ($arCurrentOffer['PREVIEW_PICTURE'] || $arCurrentOffer['DETAIL_PICTURE']) {
            if ($arCurrentOffer['PREVIEW_PICTURE']) {
                $arResult['PREVIEW_PICTURE'] = $arCurrentOffer['PREVIEW_PICTURE'];
            } elseif ($arCurrentOffer['DETAIL_PICTURE']) {
                $arResult['PREVIEW_PICTURE'] = $arCurrentOffer['DETAIL_PICTURE'];
            }
        }
    }
    if (!$arCurrentOffer['PREVIEW_PICTURE'] && !$arCurrentOffer['DETAIL_PICTURE']) {
        if ($arResult['PREVIEW_PICTURE']) {
            $arCurrentOffer['PREVIEW_PICTURE'] = $arResult['PREVIEW_PICTURE'];
        } elseif ($arResult['DETAIL_PICTURE']) {
            $arCurrentOffer['PREVIEW_PICTURE'] = $arResult['DETAIL_PICTURE'];
        }
    }

    if ($arCurrentOffer["DISPLAY_PROPERTIES"]["ARTICLE"]["VALUE"]) {
        $article = $arCurrentOffer['DISPLAY_PROPERTIES']['ARTICLE']['VALUE'];
    }
    if ($arCurrentOffer["DISPLAY_PROPERTIES"]["STATUS"]["VALUE"]) {
        $status = $arCurrentOffer['DISPLAY_PROPERTIES']['STATUS']['VALUE'];
        $statusCode = $arCurrentOffer['DISPLAY_PROPERTIES']['STATUS']['VALUE_XML_ID'];
    }

    $arResult["DISPLAY_PROPERTIES"]["FORM_ORDER"] = $arCurrentOffer["DISPLAY_PROPERTIES"]["FORM_ORDER"];
    $arResult["DISPLAY_PROPERTIES"]["PRICE"] = $arCurrentOffer["DISPLAY_PROPERTIES"]["PRICE"];
    // $arResult["NAME"] = $arCurrentOffer["NAME"];

    $arResult['OFFER_PROP'] = CAllcorp3::PrepareItemProps($arCurrentOffer['DISPLAY_PROPERTIES']);

    $dataItem = ($bOrderViewBasket ? CAllcorp3::getDataItem($arCurrentOffer) : false);
}


$bOrderButton = ($arResult["DISPLAY_PROPERTIES"]["FORM_ORDER"]["VALUE_XML_ID"] == "YES");
/* sku replace end */
?>

<? // detail description?>
<? $templateData['DETAIL_TEXT'] = boolval(strlen($arResult['DETAIL_TEXT'])); ?>
<? if (strlen($arResult['DETAIL_TEXT'])): ?>
    <? $this->SetViewTarget('PRODUCT_DETAIL_TEXT_INFO'); ?>
    <div class="content" itemprop="description">
        <?= $arResult['DETAIL_TEXT']; ?>
    </div>
    <? $this->EndViewTarget(); ?>
<? endif; ?>



<?php
//map
?>

<? $templateData['MAP'] = boolval($arResult['PROPERTIES']['MAP']['~VALUE']['TEXT']); ?>
<? if (strlen($arResult['PROPERTIES']['MAP']['~VALUE']['TEXT'])): ?>
    <? $this->SetViewTarget('PRODUCT_MAP_INFO'); ?>
    <div class="content" itemprop="map">
        <?= $arResult['PROPERTIES']['MAP']['~VALUE']['TEXT']; ?>
    </div>
    <? $this->EndViewTarget(); ?>
<? endif; ?>


<?php
//dop_text
$templateData['DOP_TEXT'] = boolval($arResult['PROPERTIES']['DOP_TEXT']['~VALUE']['TEXT']);
?>

<main>
    <div class="block-photos-gallery">
        <div class="gallery">

            <? foreach ($arResult['GALLERY'] as $arPhoto): ?>
                <div class="gallery-item">
                    <a data-fancybox="gallery" href="<?= $arPhoto['SRC'] ?>"
                       class="gallery__item fancy" data-alt="<?= $arPhoto['ALT'] ?>">
                        <img class="img-fluid" src="<?= $arPhoto['SRC'] ?>"
                             alt="<?= $arPhoto['ALT'] ?>">
                    </a>
                </div>
            <? endforeach; ?>

            <div class="gallery-item gallery-item_last">
                <? foreach ($arResult['GALLERY'] as $arPhoto): ?>
                    <a data-fancybox="gallery_other" rel="gallery-other"
                       href="<?= $arPhoto['SRC'] ?>"
                       class="fancy gallery__item_other">
                        <img class="img-fluid" src="<?= $arPhoto['SRC'] ?>"
                             alt="<?= $arPhoto['ALT'] ?>">
                        <div class="gallery-item__other"><p>Еще фотографии</p></div>
                    </a>
                <? endforeach; ?>
            </div>
        </div>
    </div>
    <div class="bttns-slide-down fix-m-b">
        <a class="bttn-down-slide" href="">Позвонить</a>
        <a class="bttn-down-slide" href="">Написать</a>
    </div>
    <div class="blocks-other-b-h">

        <? if ($arResult['ROOMS']): ?>
            <? foreach ($arResult['ROOMS'] as $room): ?>
                <div class="block-other-h">
                    <div class="block-left-img">
                        <img src="<?= $arResult['ROOM_PREVIEW']['src'] ?>" alt="">

                    </div>
                    <div class="block-right-info">
                        <div class="title-block-right-info">
                            <h4> <?= $room->GetFields()['NAME'] ?> </h4>
                        </div>

                        <div class="block-price-and-bttn">
                            <div class="f-in-img">
                                <?foreach($room->GetProperties()['TAGS']['VALUE'] as $key=>$value):?>
                                    <div><?=$value?></div>
                                <?endforeach;?>
                            </div>
                            <div class="block-price-an">
                                <?=CAsproAllcorp3::showOnlyPrice([
                                    'ITEM' => ($arCurrentOffer ? $arCurrentOffer : $room->GetProperties()),
                                    'PARAMS' => $arParams,
                                    'SHOW_SCHEMA' => true,
                                    'BASKET' => $bOrderViewBasket,
                                ]);?>
<!--                                --><?//= $room->GetProperties()['PRICE']['VALUE'] ?><!-- р-->
                            </div>
                            <div class="block-bttn-an">
                                <a class="btn" href="/rooms?ID=<?= $room->GetFields()['ID'] ?>" target="_blank">Смотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        <? endif; ?>
</main>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

<? // props content?>
<? $templateData['CHARACTERISTICS'] = boolval($arResult['CHARACTERISTICS']); ?>
<? if ($arResult['CHARACTERISTICS']): ?>
    <? $this->SetViewTarget('PRODUCT_PROPS_INFO'); ?>
    <? $strGrupperType = $arParams["GRUPPER_PROPS"]; ?>
    <? if ($strGrupperType == "GRUPPER"): ?>
        <div class="props_block bordered rounded-4">
            <div class="props_block__wrapper">
                <? $APPLICATION->IncludeComponent(
                    "redsign:grupper.list",
                    "",
                    array(
                        "CACHE_TIME" => "3600000",
                        "CACHE_TYPE" => "A",
                        "COMPOSITE_FRAME_MODE" => "A",
                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                        "DISPLAY_PROPERTIES" => $arResult["CHARACTERISTICS"]
                    ),
                    $component, array('HIDE_ICONS' => 'Y')
                ); ?>
            </div>
        </div>
    <? elseif ($strGrupperType == "WEBDEBUG"): ?>
        <div class="props_block bordered rounded-4">
            <div class="props_block__wrapper">
                <? $APPLICATION->IncludeComponent(
                    "webdebug:propsorter",
                    "linear",
                    array(
                        "IBLOCK_TYPE" => $arResult['IBLOCK_TYPE'],
                        "IBLOCK_ID" => $arResult['IBLOCK_ID'],
                        "PROPERTIES" => $arResult['CHARACTERISTICS'],
                        "EXCLUDE_PROPERTIES" => array(),
                        "WARNING_IF_EMPTY" => "N",
                        "WARNING_IF_EMPTY_TEXT" => "",
                        "NOGROUP_SHOW" => "Y",
                        "NOGROUP_NAME" => "",
                        "MULTIPLE_SEPARATOR" => ", "
                    ),
                    $component, array('HIDE_ICONS' => 'Y')
                ); ?>
            </div>
        </div>
    <? elseif ($strGrupperType == "YENISITE_GRUPPER"): ?>
        <div class="props_block bordered rounded-4">
            <div class="props_block__wrapper">
                <? $APPLICATION->IncludeComponent(
                    'yenisite:ipep.props_groups',
                    '',
                    array(
                        'DISPLAY_PROPERTIES' => $arResult['CHARACTERISTICS'],
                        'IBLOCK_ID' => $arParams['IBLOCK_ID']
                    ),
                    $component, array('HIDE_ICONS' => 'Y')
                ) ?>
            </div>
        </div>
    <? else: ?>
        <? if ($arParams["PROPERTIES_DISPLAY_TYPE"] != "TABLE"): ?>
            <div class="props_block">
                <div class="props_block__wrapper flexbox row js-offers-prop">
                    <? foreach ($arResult["CHARACTERISTICS"] as $propCode => $arProp): ?>
                        <div class="char col-lg-3 col-md-4 col-xs-6 bordered js-prop-replace"
                             itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue">
                            <div class="char_name font_15 color_666">
                                <div class="props_item js-prop-title <? if ($arProp["HINT"] && $arParams["SHOW_HINTS"] == "Y") { ?>whint<? } ?>">
                                    <span itemprop="name"><?= $arProp["NAME"] ?></span>
                                </div>
                                <? if ($arProp["HINT"] && $arParams["SHOW_HINTS"] == "Y"): ?>
                                    <div class="hint hint--down"><span
                                            class="hint__icon rounded bg-theme-hover border-theme-hover bordered"><i>?</i></span>
                                    <div class="tooltip"><?= $arProp["HINT"] ?></div></div><? endif; ?>
                            </div>
                            <div class="char_value font_15 color_333 js-prop-value" itemprop="value">
                                <? if (count($arProp["DISPLAY_VALUE"]) > 1): ?>
                                    <?= implode(', ', $arProp["DISPLAY_VALUE"]); ?>
                                <? else: ?>
                                    <?= $arProp["DISPLAY_VALUE"]; ?>
                                <? endif; ?>
                            </div>
                        </div>
                    <? endforeach; ?>
                    <? if ($arResult['OFFER_PROP']): ?>
                        <? foreach ($arResult["OFFER_PROP"] as $propCode => $arProp): ?>
                            <div class="char col-lg-3 col-md-4 col-xs-6 bordered js-prop" itemprop="additionalProperty"
                                 itemscope itemtype="http://schema.org/PropertyValue">
                                <div class="char_name font_15 color_666">
                                    <div class="props_item <? if ($arProp["HINT"] && $arParams["SHOW_HINTS"] == "Y") { ?>whint<? } ?>">
                                        <span itemprop="name"><?= $arProp["NAME"] ?></span>
                                    </div>
                                    <? if ($arProp["HINT"] && $arParams["SHOW_HINTS"] == "Y"): ?>
                                        <div class="hint hint--down"><span
                                                class="hint__icon rounded bg-theme-hover border-theme-hover bordered"><i>?</i></span>
                                        <div class="tooltip"><?= $arProp["HINT"] ?></div></div><? endif; ?>
                                </div>
                                <div class="char_value font_15 color_333" itemprop="value">
                                    <? if (count($arProp["VALUE"]) > 1): ?>
                                        <?= implode(', ', $arProp["VALUE"]); ?>
                                    <? else: ?>
                                        <?= $arProp["VALUE"]; ?>
                                    <? endif; ?>
                                </div>
                            </div>
                        <? endforeach; ?>
                    <? endif; ?>
                </div>
            </div>
        <? else: ?>
            <div class="props_block props_block--table props_block--nbg bordered rounded-4">
                <table class="props_block__wrapper ">
                    <tbody class="js-offers-prop">
                    <? foreach ($arResult["CHARACTERISTICS"] as $arProp): ?>
                        <?php
                        if ($arProp["NAME"] != 'Карта') {
                            ?>
                            <tr class="char js-prop-replace" itemprop="additionalProperty" itemscope
                                itemtype="http://schema.org/PropertyValue">
                                <td class="char_name font_15 color_666">
                                    <div class="props_item js-prop-title <? if ($arProp["HINT"] && $arParams["SHOW_HINTS"] == "Y") { ?>whint<?
                                    } ?>">
                                        <span itemprop="name"><?= $arProp["NAME"] ?></span>
                                        <? if ($arProp["HINT"] && $arParams["SHOW_HINTS"] == "Y"): ?>
                                            <div class="hint hint--down"><span
                                                    class="hint__icon rounded bg-theme-hover border-theme-hover bordered"><i>?</i></span>
                                            <div class="tooltip"><?= $arProp["HINT"] ?></div></div><?endif; ?>
                                    </div>
                                </td>
                                <td class="char_value font_15 color_333 js-prop-value">
										<span itemprop="value">
											<? if (count($arProp["DISPLAY_VALUE"]) > 1): ?>
                                                <?= implode(', ', $arProp["DISPLAY_VALUE"]); ?>
                                            <? else: ?>
                                                <?= $arProp["DISPLAY_VALUE"]; ?>
                                            <?endif; ?>
										</span>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    <? endforeach; ?>
                    <? if ($arResult['OFFER_PROP']): ?>
                        <? foreach ($arResult["OFFER_PROP"] as $arProp): ?>
                            <tr class="char js-prop" itemprop="additionalProperty" itemscope
                                itemtype="http://schema.org/PropertyValue">
                                <td class="char_name font_15 color_666">
                                    <div class="props_item <? if ($arProp["HINT"] && $arParams["SHOW_HINTS"] == "Y") { ?>whint<? } ?>">
                                        <span itemprop="name"><?= $arProp["NAME"] ?></span>
                                        <? if ($arProp["HINT"] && $arParams["SHOW_HINTS"] == "Y"): ?>
                                            <div class="hint hint--down"><span
                                                    class="hint__icon rounded bg-theme-hover border-theme-hover bordered"><i>?</i></span>
                                            <div class="tooltip"><?= $arProp["HINT"] ?></div></div><? endif; ?>
                                    </div>
                                </td>
                                <td class="char_value font_15 color_333">
											<span itemprop="value">
												<? if (count($arProp["VALUE"]) > 1): ?>
                                                    <?= implode(', ', $arProp["VALUE"]); ?>
                                                <? else: ?>
                                                    <?= $arProp["VALUE"]; ?>
                                                <? endif; ?>
											</span>
                                </td>
                            </tr>
                        <? endforeach; ?>
                    <? endif; ?>
                    </tbody>
                </table>
            </div>
        <? endif; ?>
    <? endif; ?>
    <? $this->EndViewTarget(); ?>
<? endif; ?>

<? // files?>
<? $templateData['DOCUMENTS'] = boolval($arResult['DOCUMENTS']); ?>
<? if ($templateData['DOCUMENTS']): ?>
    <? $this->SetViewTarget('PRODUCT_FILES_INFO'); ?>
    <div class="doc-list-inner__list  grid-list  grid-list--items-1 grid-list--no-gap ">
        <? foreach ($arResult['DOCUMENTS'] as $arItem): ?>
            <?
            $arDocFile = CAllcorp3::GetFileInfo($arItem);
            $docFileDescr = $arDocFile['DESCRIPTION'];
            $docFileSize = $arDocFile['FILE_SIZE_FORMAT'];
            $docFileType = $arDocFile['TYPE'];
            $bDocImage = false;
            if ($docFileType == 'jpg' || $docFileType == 'jpeg' || $docFileType == 'bmp' || $docFileType == 'gif' || $docFileType == 'png') {
                $bDocImage = true;
            }
            ?>
            <div class="doc-list-inner__wrapper grid-list__item colored_theme_hover_bg-block grid-list-border-outer fill-theme-parent-all">
                <div class="doc-list-inner__item height-100 rounded-4 shadow-hovered shadow-no-border-hovered">
                    <? if ($arDocFile): ?>
                        <div class="doc-list-inner__icon-wrapper">
                            <a class="file-type doc-list-inner__icon">
                                <i class="file-type__icon file-type__icon--<?= $docFileType ?>"></i>
                            </a>
                        </div>
                    <? endif; ?>
                    <div class="doc-list-inner__content-wrapper">
                        <div class="doc-list-inner__top">
                            <? if ($arDocFile): ?>
                                <? if ($bDocImage): ?>
                                    <a href="<?= $arDocFile['SRC'] ?>"
                                       class="doc-list-inner__name fancy dark_link color-theme-target switcher-title"
                                       data-caption="<?= htmlspecialchars($docFileDescr) ?>"><?= $docFileDescr ?></a>
                                <? else: ?>
                                    <a href="<?= $arDocFile['SRC'] ?>" target="_blank"
                                       class="doc-list-inner__name dark_link color-theme-target switcher-title"
                                       title="<?= htmlspecialchars($docFileDescr) ?>">
                                        <?= $docFileDescr ?>
                                    </a>
                                <? endif; ?>
                                <div class="doc-list-inner__label"><?= $docFileSize ?></div>
                            <? else: ?>
                                <div class="doc-list-inner__name switcher-title"><?= $docFileDescr ?></div>
                            <? endif; ?>
                            <? if ($arDocFile): ?>
                                <? if ($bDocImage): ?>
                                    <a class="doc-list-inner__icon-preview-image doc-list-inner__link-file fancy fill-theme-parent"
                                       data-caption="<?= htmlspecialchars($docFileDescr) ?>"
                                       href="<?= $arDocFile['SRC'] ?>">
                                        <?= CAllcorp3::showIconSvg('image-preview fill-theme-target', SITE_TEMPLATE_PATH . '/images/svg/preview_image.svg'); ?>
                                    </a>
                                <? else: ?>
                                    <a class="doc-list-inner__icon-preview-image doc-list-inner__link-file fill-theme-parent"
                                       target="_blank" href="<?= $arDocFile['SRC'] ?>">
                                        <?= CAllcorp3::showIconSvg('image-preview fill-theme-target', SITE_TEMPLATE_PATH . '/images/svg/file_download.svg'); ?>
                                    </a>
                                <? endif; ?>
                            <? endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
    <? $this->EndViewTarget(); ?>
<? endif; ?>

<? // big gallery?>
<? $templateData['BIG_GALLERY'] = boolval($arResult['BIG_GALLERY']); ?>
<? if ($arResult['BIG_GALLERY']): ?>
    <? $bShowSmallGallery = $arParams['TYPE_BIG_GALLERY'] === 'SMALL'; ?>
    <? $this->SetViewTarget('PRODUCT_BIG_GALLERY_INFO'); ?>
    <? // gallery view swith?>
    <div class="gallery-view_switch">
        <div class="flexbox flexbox--direction-row flexbox--align-center">
            <div class="gallery-view_switch__count color_666 font_13">
                <div class="gallery-view_switch__count-wrapper gallery-view_switch__count-wrapper--small" <?= ($bShowSmallGallery ? "" : "style='display:none;'"); ?>>
                    <span class="gallery-view_switch__count-value"><?= count($arResult['BIG_GALLERY']); ?></span>
                    <?= Loc::getMessage('PHOTO'); ?>
                    <span class="gallery-view_switch__count-separate">&mdash;</span>
                </div>
                <div class="gallery-view_switch__count-wrapper gallery-view_switch__count-wrapper--big" <?= ($bShowSmallGallery ? "style='display:none;'" : ""); ?>>
                    <span class="gallery-view_switch__count-value">1/<?= count($arResult['BIG_GALLERY']); ?></span>
                    <span class="gallery-view_switch__count-separate">&mdash;</span>
                </div>
            </div>
            <div class="gallery-view_switch__icons-wrapper">
                <span class="gallery-view_switch__icons<?= (!$bShowSmallGallery ? ' active' : '') ?> gallery-view_switch__icons--big"
                      title="<?= Loc::getMessage("BIG_GALLERY"); ?>"><?= CAllcorp3::showIconSvg("gallery", SITE_TEMPLATE_PATH . "/images/svg/gallery_alone.svg", "", "colored_theme_hover_bg-el-svg", true, false); ?></span>
                <span class="gallery-view_switch__icons<?= ($bShowSmallGallery ? ' active' : '') ?> gallery-view_switch__icons--small"
                      title="<?= Loc::getMessage("SMALL_GALLERY"); ?>"><?= CAllcorp3::showIconSvg("gallery", SITE_TEMPLATE_PATH . "/images/svg/gallery_list.svg", "", "colored_theme_hover_bg-el-svg", true, false); ?></span>
            </div>
        </div>
    </div>

    <? // gallery big?>
    <div class="gallery-big"<?= ($bShowSmallGallery ? ' style="display:none;"' : ''); ?> >
        <div class="owl-carousel appear-block owl-carousel--outer-dots owl-carousel--nav-hover-visible owl-bg-nav owl-carousel--light owl-carousel--button-wide owl-carousel--button-offset-half"
             data-plugin-options='{"items": "1", "autoplay" : false, "autoplayTimeout" : "3000", "smartSpeed":1000, "dots": true, "dotsContainer": false, "nav": true, "loop": false, "index": true, "margin": 0}'>
            <? foreach ($arResult['BIG_GALLERY'] as $arPhoto): ?>
                <div class="item">
                    <a href="<?= $arPhoto['DETAIL']['SRC'] ?>" class="fancy" data-fancybox="big-gallery" target="_blank"
                       title="<?= $arPhoto['TITLE'] ?>">
                        <img data-src="<?= $arPhoto['PREVIEW']['src'] ?>" src="<?= $arPhoto['PREVIEW']['src'] ?>"
                             class="img-responsive inline lazy rounded-4" title="<?= $arPhoto['TITLE'] ?>"
                             alt="<?= $arPhoto['ALT'] ?>"/>
                    </a>
                </div>
            <? endforeach; ?>
        </div>
    </div>

    <? // gallery small?>
    <div class="gallery-small"<?= ($bShowSmallGallery ? '' : ' style="display:none;"'); ?>>
        <div class="grid-list grid-list--gap-20">
            <? foreach ($arResult['BIG_GALLERY'] as $arPhoto): ?>
                <div class="gallery-item-wrapper">
                    <div class="item rounded-4">
                        <a href="<?= $arPhoto['DETAIL']['SRC'] ?>" class="fancy" data-fancybox="small-gallery"
                           target="_blank" title="<?= $arPhoto['TITLE'] ?>">
                            <img data-src="<?= $arPhoto['PREVIEW']['src'] ?>" src="<?= $arPhoto['PREVIEW']['src'] ?>"
                                 class="lazy img-responsive inline rounded-4" title="<?= $arPhoto['TITLE'] ?>"
                                 alt="<?= $arPhoto['ALT'] ?>"/>
                        </a>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
    <? $this->EndViewTarget(); ?>
<? endif; ?>

<? // video?>
<?
$templateData['VIDEO'] = boolval($arResult['VIDEO']);
$bOneVideo = count($arResult['VIDEO']) == 1;
?>
<? if ($arResult['VIDEO']): ?>
    <? $this->SetViewTarget('PRODUCT_VIDEO_INFO'); ?>
    <div class="hidden_print">
        <div class="video_block">
            <div class="grid-list grid-list--gap-20 <?= ($bOneVideo ? 'grid-list--items-1' : 'grid-list--items-2'); ?>">
                <? foreach ($arResult['VIDEO'] as $v => $value): ?>
                    <div class="grid-list__item item rounded-4">
                        <? if (strpos($value, 'iframe')): ?>
                            <? if ($bOneVideo): ?>
                                <?= $value ?>
                            <? else: ?>
                                <div class="video_body">
                                    <?= str_replace('src=', 'width="660" height="457" src=', str_replace(array('width', 'height'), array('data-width', 'data-height'), $value)); ?>
                                </div>
                            <? endif; ?>
                        <? else: ?>
                            <?
                            $videoMimeType = mime_content_type($_SERVER['DOCUMENT_ROOT'] . $value['path']);
                            ?>
                            <div class="video_body video_from_file">
                                <video id="js-video_<?= $v; ?>"
                                       width="<?= $bOneVideo ? $value['width'] : '540'; ?>"
                                       height="<?= $bOneVideo ? $value['height'] : '357'; ?>"
                                       class="video-js"
                                       controls="controls"
                                       preload="metadata"
                                       data-setup="{}"
                                >
                                    <source src="<?= $value['path']; ?>" type="<?= $videoMimeType; ?>"/>
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a web
                                        browser that supports HTML5 video
                                    </p>
                                </video>
                            </div>
                            <div class="title"><?= (strlen($value["title"]) ? $value["title"] : '') ?></div>
                        <? endif; ?>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
    <? $this->EndViewTarget(); ?>
<? endif; ?>


<div class="b">
    <? //meta?>
    <meta itemprop="name"
          content="<?= $name = strip_tags(!empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']) ? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] : $arResult['NAME']) ?>"/>
    <link itemprop="url" href="<?= $arResult['DETAIL_PAGE_URL'] ?>"/>
    <meta itemprop="category" content="<?= $arResult['CATEGORY_PATH'] ?>"/>
    <meta itemprop="description"
          content="<?= (strlen(strip_tags($arResult['PREVIEW_TEXT'])) ? strip_tags($arResult['PREVIEW_TEXT']) : (strlen(strip_tags($arResult['DETAIL_TEXT'])) ? strip_tags($arResult['DETAIL_TEXT']) : $name)) ?>"/>
    <meta itemprop="sku" content="<?= $arResult['ID']; ?>"/>

    <? if ($arResult['SKU_CONFIG']): ?>
        <div class="js-sku-config"
             data-value='<?= str_replace('\'', '"', CUtil::PhpToJSObject($arResult['SKU_CONFIG'], false, true)) ?>'></div><? endif; ?>

    <div class="catalog-detail__main">
        <? if ($arResult['SKU']['PROPS']): ?>
            <div class="catalog-block__offers1">
                <div
                        class="sku-props sku-props--detail"
                        data-site-id="<?= SITE_ID; ?>"
                        data-item-id="<?= $arResult['ID']; ?>"
                        data-iblockid="<?= $arResult['IBLOCK_ID']; ?>"
                        data-offer-id="<?= $arCurrentOffer['ID']; ?>"
                        data-offer-iblockid="<?= $arCurrentOffer['IBLOCK_ID']; ?>"
                >
                    <div class="line-block line-block--flex-wrap line-block--flex-100 line-block--40 line-block--align-flex-end">
                        <?= \Aspro\Allcorp3\Functions\CSKUTemplate::showSkuPropsHtml($arResult['SKU']['PROPS']) ?>
                    </div>
                </div>
            </div>
        <? endif; ?>
        <? if (strlen($arResult['PREVIEW_TEXT'])): ?>
            <div class="catalog-detail__previewtext" itemprop="description">
                <div class="text-block font_14 color_666">
                    <? // element preview text?>
                    <? if ($arResult['PREVIEW_TEXT_TYPE'] == 'text'): ?>
                        <p><?= $arResult['PREVIEW_TEXT'] ?></p>
                    <? else: ?>
                        <?= $arResult['PREVIEW_TEXT'] ?>
                    <? endif; ?>
                </div>
                <? if (strlen($arResult['DETAIL_TEXT'])): ?>
                    <span class="more-char-link font_14">
						<span class="choise dotted" data-block="desc"><?= Loc::getMessage('MORE_TEXT_BOTTOM') ?></span>
					</span>
                <? endif; ?>
            </div>
        <? endif; ?>


    </div>
</div>
<script>
    function look(elemId) {
        var elem = document.getElementById(elemId);
        elem.style.display === "none" ?
            elem.style.display = "block" : elem.style.display = "none";
    }

    document.getElementById('title_price').innerHTML = `<?=CAsproAllcorp3::showPrice([
        'ITEM' => ($arCurrentOffer ? $arCurrentOffer : $arResult),
        'PARAMS' => $arParams,
        'SHOW_SCHEMA' => true,
        'BASKET' => $bOrderViewBasket,
    ]);?>`
    document.getElementById('title_btn').innerHTML = `<a href='tel:<?= $arResult['PROPERTIES']['TELEFON']['VALUE'] ?>' class='btn-h-fl btn' target='_blank'>Позвонить</a>
        <a href='https://wa.me/<?= $arResult['PROPERTIES']['TELEFON']['VALUE'] ?>' class='btn-h-fl btn' target='_blank'>
        <i class='fa-brands fa-whatsapp'></i> Написать</a>`

</script>




