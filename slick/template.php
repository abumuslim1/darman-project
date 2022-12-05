<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
$emptyImagePath = $this->getFolder() . '/images/tile-empty.png';

if ($arResult['SECTIONS_COUNT'] > 0) {
//    echo '<pre>';
//    print_r($arParams);
//    echo '</pre>';
//    $current_link  = "/catalog/".$_REQUEST["ID"]."/";

    ?>


    <div class="production-slider dsasda">
        <div class="production-slider-wrapper wpfp">
            <section class="regular slider">

                <?php
                $sectionEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'SECTION_EDIT');
                $sectionDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'SECTION_DELETE');
                $sectionDeleteParams = [
                    'CONFIRM' => Loc::getMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'),
                ];
                foreach ($arResult['SECTIONS'] as &$section) {
                    $cur_page = $APPLICATION->GetCurPage(false);
                    $is_active = ($section['SECTION_PAGE_URL'] == $cur_page || strpos($cur_page,$section['SECTION_PAGE_URL'])!==false)?" prod-active":"";
                    $this->addEditAction($section['ID'], $section['EDIT_LINK'], $sectionEdit);
                    $this->addDeleteAction($section['ID'], $section['DELETE_LINK'], $sectionDelete, $sectionDeleteParams);
                    $catalog_page = "/catalog/".$section['ID']."/";
//                    $current_link2  = CSite::InDir("/catalog/".$current_link."/");
//                    print_r($catalog_page);
//                    die();

                        $class_name = "production-slider-items$is_active";

                    ?>
                        <div class="<?=$class_name?>" dataname="<?=$section['CODE'] ?>"
                              href="<?= $section['SECTION_PAGE_URL'] ?>" onclick="location.href='<?= $section['SECTION_PAGE_URL'] ?>';">
                            <img src="<?= $section['PICTURE']['SRC'] ?>" alt="">
                            <p>
                                <?= $section['NAME'] ?>
                            </p>
                        </div>
                    <?php

                }
                unset($section);
                ?>
            </section>

        </div>
    </div>
    <?php
}
?>