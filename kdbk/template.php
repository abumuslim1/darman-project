<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<div class="production">
    <div class="container">
        <!--        <h1 align="center" class="h1-title">-->
        <!--            <span class="blu">--><? //=GetMessage('CATALOG_HEAD_1')?><!--</span> <span>-->
        <? //=GetMessage('CATALOG_HEAD_2')?><!--</span>-->
        <!--        </h1>-->
        <? $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_DIR . "include/components/popular_products/catalog_head_desc_inc.php",
            "EDIT_TEMPLATE" => ""
        ),
            false
        ); ?>
        <!--        <p class="text-sdds" align="center" style="color: #000;" class="mt-4 mb-5">-->
        <!--            --><? //=GetMessage('CATALOG_HEAD_DESC_1')?><!-- <br>-->
        <!--            --><? //=GetMessage('CATALOG_HEAD_DESC_2')?>
        <!--        </p>-->
    </div>




    <div class="production-slider dsasda">

        <section class="regular-home slider">
            <div>
                <img src="https://darman3834.tmweb.ru/upload/iblock/391/mfgi24e6t1stm7bmdqlpw3lc07y0kqhy.png">
            </div>
            <div>
                <img src="https://darman3834.tmweb.ru/upload/iblock/391/mfgi24e6t1stm7bmdqlpw3lc07y0kqhy.png">
            </div>
            <div>
                <img src="https://darman3834.tmweb.ru/upload/iblock/391/mfgi24e6t1stm7bmdqlpw3lc07y0kqhy.png">
            </div>
            <div>
                <img src="https://darman3834.tmweb.ru/upload/iblock/391/mfgi24e6t1stm7bmdqlpw3lc07y0kqhy.png">
            </div>
            <div>
                <img src="https://darman3834.tmweb.ru/upload/iblock/391/mfgi24e6t1stm7bmdqlpw3lc07y0kqhy.png">
            </div>
            <div>
                <img src="https://darman3834.tmweb.ru/upload/iblock/391/mfgi24e6t1stm7bmdqlpw3lc07y0kqhy.png">
            </div>
            <div>
                <img src="https://darman3834.tmweb.ru/upload/iblock/391/mfgi24e6t1stm7bmdqlpw3lc07y0kqhy.png">
            </div>
            <div>
                <img src="https://darman3834.tmweb.ru/upload/iblock/391/mfgi24e6t1stm7bmdqlpw3lc07y0kqhy.png">
            </div>
        </section>


        <div class="med-fix-f">

            <section class="regular-home slider">
                <div id="tabs" class="tabs">
                <? $i = true;
                foreach ($arResult["SECTIONS"] as $arSection):
                ?>
                <? if ($i): ?>
                    <button class="tab active">
                        <div class="production-slider-items">
                            <img src="<?= $arSection["PICTURE"]["SRC"] ?>" alt="">
                            <p>
                                <?= $arSection["NAME"] ?>
                            </p>
                        </div>
                    </button>
                    <?
                    $i = false;
                else:
                ?>
                    <button class="tab non-active">
                        <div class="production-slider-items">
                            <img src="<?= $arSection["PICTURE"]["SRC"] ?>" alt="">
                            <p>
                                <?= $arSection["NAME"] ?>
                            </p>
                        </div>
                    </button>

                <?
                endif;
                endforeach; ?>
                </div>
            </section>

<!--            <button class="bttnsliderall" id="left-sc" type="button">-->
<!--                <img src="/bitrix/templates/furniture_pale-blue/assets/img/prev.png" alt="">-->
<!--            </button>-->
            <div class="production-slider-wrapper cat-home">

                <div id="tabs" class="tabs">
                    <? $i = true;
                    foreach ($arResult["SECTIONS"] as $arSection):
                        ?>
                        <? if ($i): ?>
                        <button class="tab active">
                            <div class="production-slider-items">
                                <img src="<?= $arSection["PICTURE"]["SRC"] ?>" alt="">
                                <p>
                                    <?= $arSection["NAME"] ?>
                                </p>
                            </div>
                        </button>

                        <?
                        $i = false;
                    else:
                        ?>
                        <button class="tab non-active">
                            <div class="production-slider-items">
                                <img src="<?= $arSection["PICTURE"]["SRC"] ?>" alt="">
                                <p>
                                    <?= $arSection["NAME"] ?>
                                </p>
                            </div>
                        </button>

                    <?
                    endif;
                    endforeach; ?>
                </div>


                
            </div>
<!--            <button class="bttnsliderall" id="right-sc" type="button">-->
<!--                <img src="/bitrix/templates/furniture_pale-blue/assets/img/next.png" alt="">-->
<!--            </button>-->



        </div>
        <div class="container">
            <p class="tile-c-p">
                <?= GetMessage('CATALOG_POPULAR') ?>
            </p>
        </div>
        <? $n = true;
        foreach ($arResult["SECTIONS"] as $arSection):
            if ($n) {
                $class = "tab-content";
            } else {
                $class = "tab-content hidden";
            }

            ?>
            <div class="<?= $class ?>">
                <div class="flenow">
                    <div class="recommend-items">
                        <?
                        $cell = 0;
                        foreach ($arSection["ITEMS"] as $arElement):
                            $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCST_ELEMENT_DELETE_CONFIRM')));
                            if (is_array($arElement["PREVIEW_PICTURE"])) {
                                $img = $arElement["PREVIEW_PICTURE"]["SRC"];
                            } elseif (is_array($arElement["DETAIL_PICTURE"])) {
                                $img = $arElement["DETAIL_PICTURE"]["SRC"];
                            }
                            ?>
                            <div class="recommend-item">
                                <div class="recommend-item-img">
                                    <img src="<?= $img ?>" alt="">
                                </div>
                                <p><?= $arElement["NAME"] ?></p>
                                <!--                                <a class="callback-block feedback_btn colored btn-default btn" data-event="jqm" data-param-id="1" data-name="question" data-order="4фыв" id="order_tab_btn">Заказать</a>-->
                                <div class="product-item-btn"
                                     data-toggle="modal"
                                     data-target="#popupModal"
                                     data-name="<?= $arElement["NAME"] ?>"
                                     data-img="<?= $img ?>"
                                     data-product-name="<?= $arElement["PROPERTIES"]["FULL_NAME"]["VALUE"] ?>"
                                     data-product-fat-content="<?= $arElement["PROPERTIES"]["FAT_CONTENT"]["VALUE"] ?>"
                                     data-product-composition="<?= $arElement["PROPERTIES"]["COMPOSITION"]["VALUE"] ?>"
                                     data-product-nutritional-value="<?= $arElement["PROPERTIES"]["NUTRITIONAL_VALUE"]["VALUE"] ?>"
                                     data-product-energy-value="<?= $arElement["PROPERTIES"]["ENERGY_VALUE"]["VALUE"] ?>"
                                     data-product-quality-standard="<?= $arElement["PROPERTIES"]["QUALITY_STANDARD"]["VALUE"] ?>"
                                     data-product-certificates-of-conformity="<?= $arElement["PROPERTIES"]["CERTIFICATES_OF_CONFORMITY"]["VALUE"] ?>"
                                     data-product-type-of-packaging="<?= $arElement["PROPERTIES"]["TYPE_OF_PACKAGING"]["VALUE"] ?>"
                                     data-product-popular="<?= $arElement["PROPERTIES"]["POPULAR"]["VALUE"] ?>"
                                     data-product-expiration-date="<?= $arElement["PROPERTIES"]["EXPIRATION_DATE"]["VALUE"] ?>"
                                     data-product-storage-conditions="<?= $arElement["PROPERTIES"]["STORAGE_CONDITIONS"]["VALUE"] ?>"
                                     data-product-net-weight="<?= $arElement["PROPERTIES"]["NET_WEIGHT"]["VALUE"] ?>"
                                >
                                    <?= GetMessage('CATALOG_ORDER') ?>
                                </div>
                                <!--                                <div class="product-item-btn">-->
                                <!---->
                                <!--                                    Заказать-->
                                <!--                                </div>-->

                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </div>
            <? $n = false;endforeach; ?>


    </div>
    <div class="container">
        <div class="center mt-4 mob-fix-cr">
            <a href="catalog/">
                <div class="but">
                    <div class="img-but">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/glass-alt.png" alt="">
                    </div>
                    <div class="link-but">
                        <?= GetMessage('CATALOG_SHOW_ALL') ?>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="sirok">
        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/sirok.png" alt="">
    </div>

</div>

