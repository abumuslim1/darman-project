<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/page-title-1.css'); ?>


    <?if (CSite::InDir('/test/') || CSite::InDir('/rooms/')):?>
<div class="page-top-wrapper page-top-wrapper--white v1">
    <section class="page-top maxwidth-theme <? CAllcorp3::ShowPageProps('TITLE_CLASS'); ?>" style="padding-bottom: 0px; padding-top: 10px;">
<!--        --><?// $APPLICATION->ShowViewContent('cowl_buttons') ?>
        <div class="wrap-h">
            <div class="fl-one-l">
                <div class="title-p-w">
                    <h2><? $APPLICATION->ShowTitle(false) ?></h2>
                </div>
                <div class="fl-two-r">
                     <div class="f-in-img f-in-img-mobile">
                        <div>Включен трансфер</div>
                        <div>Включен завтрак</div>
                    </div> 
                    <div class="block-r-fl-two fl-24" id="title_price">
                    </div>
                    <div class="block-r-fl-two fl-25" id="title_btn">

                    </div>
                    <? $APPLICATION->ShowViewContent('cowl_buttons') ?>

                </div>
            </div>
        </div>
<!--        <div id="navigation">-->
<!--            --><?// $APPLICATION->IncludeComponent(
//                "bitrix:breadcrumb",
//                "main",
//                array(
//                    "START_FROM" => "0",
//                    "PATH" => "",
//                    "SITE_ID" => SITE_ID,
//                    "COMPONENT_TEMPLATE" => "main"
//                ),
//                false
//            ); ?>
<!--        </div>-->
    </section>
</div>
    <?else:?>
<div class="page-top-info">
    <? $APPLICATION->ShowViewContent('side-over-title') ?>

    <div class="page-top-wrapper page-top-wrapper--white v1">
        <section class="page-top maxwidth-theme <? CAllcorp3::ShowPageProps('TITLE_CLASS'); ?>">
            <div class="cowl">
                <? $APPLICATION->ShowViewContent('cowl_buttons') ?>
				<?= $APPLICATION->GetPageProperty('TEST'); ?>
                <!--h1_content-->
                <div class="topic">
                    <div class="topic__inner">
                        <div class="topic__heading">
                            <h1 id="pagetitle" class="switcher-title"><? $APPLICATION->ShowTitle(false) ?></h1>
                            <? $APPLICATION->ShowViewContent('more_text_title'); ?>
                        </div>
                    </div>
                </div>
                <!--/h1_content-->
            </div>
            <div id="navigation">
                <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "main",
                array(
                "START_FROM" => "0",
                "PATH" => "",
                "SITE_ID" => SITE_ID,
                "COMPONENT_TEMPLATE" => "main"
                ),
                false
                ); ?>
            </div>
        </section>
    </div>
</div>
    <?endif;?>
