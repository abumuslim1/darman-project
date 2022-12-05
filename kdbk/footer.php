<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
$product = "";
?>
<!--<button type="button" class="btn btn-primary"-->
<!--        data-toggle="modal"-->
<!--        data-target="#exampleModal"-->
<!--        data-name="--><? //="NAME"?><!--"-->
<!--        data-text="--><? //="DETAIL_TEXT"?><!--"-->
<!--        data-price="--><? //="DISPLAY_PROPERTIES"?><!--"-->
<!--        data-img="--><? //="DETAIL_PICTURE"?><!--"-->
<!--        data-link="--><? //="DETAIL_PAGE_URL"?><!--">-->
<!--    Быстрый просмотр-->
<!--</button>-->
<div class="popup-contact" id="exampleModal" role="dialog">
    <div class="modal-order-content">

    </div>

    <!--                --><? //$APPLICATION->IncludeComponent(
    //                    "bitrix:form.result.new",
    //                    "popup_order",
    //                    Array(
    //                        "CACHE_TIME" => "3600",
    //                        "CACHE_TYPE" => "A",
    //                        "CHAIN_ITEM_LINK" => "",
    //                        "CHAIN_ITEM_TEXT" => "",
    //                        "EDIT_URL" => "result_edit.php",
    //                        "IGNORE_CUSTOM_TEMPLATE" => "N",
    //                        "LIST_URL" => "result_list.php",
    //                        "SEF_MODE" => "N",
    //                        "SUCCESS_URL" => "",
    //                        "USE_EXTENDED_ERRORS" => "N",
    //                        "VARIABLE_ALIASES" => Array("RESULT_ID"=>"RESULT_ID","WEB_FORM_ID"=>"WEB_FORM_ID","PRODUCT"=>$product),
    //                        "WEB_FORM_ID" => "2"
    //                    )
    //                );?>
</div>

<div class="popup" role="dialog" id="popupModal">
    <div class="popup-container">
        <a href="#0" class="popup-close img-replace">Close</a>
        <div class="product-item-popup">
            <h2 class="modal-title"></h2>
            <div class="flex-b-pop mt-4">
                <div class="product-item-popup-img">
                    <div class="recommend-item">
                        <div class="recommend-item-img modal-img">
                        </div>
                    </div>
                </div>
                <? if (LANGUAGE_ID == 'ru'): ?>

                    <div class="row scroll-y">
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Наименование:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-name"></span>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Массовая доля жира:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-fat-content"></span>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Состав:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-composition"></span>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Пищевая ценность:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-nutritional-value"></span>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Энергетическая ценность:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-energy-value"></span><br>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Срок годности:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-expiration-date"></span><br>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Условия хранения:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-storage-conditions"></span><br>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Масса нетто:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-net-weight"></span><br>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Стандарт качества:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-quality-standard"></span><br>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Сертификаты соответствия:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-certificates-of-conformity"></span><br>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Тип упаковки:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-type-of-packaging"></span><br>
                        <div class="but mt-3 give btn btn-primary modal-product-btn"
                             data-toggle="modal"
                             data-target="#exampleModal"
                             lang="<?= LANGUAGE_ID ?>">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/shopping-cart.png" alt="">

                            <!--                        <button type="button" class="btn btn-primary modal-product-btn"-->
                            <!--                        data-toggle="modal"      -->
                            <!--                        data-target="#exampleModal">-->
                            Заказать
                            <!--                        </button>-->

                        </div>
                    </div>
                <? elseif (LANGUAGE_ID == 'en'): ?>
                    <div class="row scroll-y">
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Full name:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-name"></span>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Mass fraction of fat:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-fat-content"></span>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Compound:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-composition"></span>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">The nutritional value:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-nutritional-value"></span>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">The energy value:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-energy-value"></span><br>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Expiration date:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-expiration-date"></span><br>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Storage conditions:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-storage-conditions"></span><br>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Net weight:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-net-weight"></span><br>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Quality standard:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-quality-standard"></span><br>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Certificates of conformity:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-certificates-of-conformity"></span><br>
                        <b class="col-xl-6 col-lg-6 col-md-12 col-12">Type of packaging:</b><span
                                class="col-xl-6 col-lg-6 col-md-12 col-12 modal-product-type-of-packaging"></span><br>
                        <div class="but mt-3 give btn btn-primary modal-product-btn"
                             data-toggle="modal"
                             data-target="#exampleModal"
                             lang="<?= LANGUAGE_ID ?>">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/shopping-cart.png" alt="">
                            Order
                        </div>
                    </div>
                <? endif; ?>
            </div>
            <div class="close close-btn" onClick="close_popup_new()"></div>
        </div>
    </div>
</div>


<footer>
    <div class="container-fluid bg-fix-m">
        <div class="cyaks">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo logo-fot">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo.svg" alt="">
                    </div>
                    <div class="number">
                        <? $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR . "include/phone_footer.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                            false
                        ); ?>

                    </div>

                    <? $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/social_media.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                        false
                    ); ?>
                </div>
                <div class="col-md-2">
                    <div class="links">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE" => "bottom",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "bottom"
                            ),
                            false
                        ); ?>
                    </div>
                </div>
                <div class="col-md">
                    <div class="links">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE" => "bottom2",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => "bottom"
                            ),
                            false
                        ); ?>
                    </div>
                </div>
            </div>
            <hr width="100%">
            <div class="main-foot row">
                <? if (LANGUAGE_ID == 'ru') { ?>
                    <div class="mt-4 mt-md-0 copy">
                        <p align="left">© ООО «Дарман», Все права защищены</p>
                    </div>
                    <div class="polit">
                        <a href="#"><p>Политика конфидециальности</p></a>
                    </div>
                <? } elseif (LANGUAGE_ID == 'en') { ?>
                    <div class="mt-4 mt-md-0 copy">
                        <p align="left">© Darman LLC, All rights reserved</p>
                    </div>
                    <div class="polit">
                        <a href="#"><p>Privacy Policy</p></a>
                    </div>
                <? } ?> <!--   <span class="hover">Russia</span> -->


                <div>
                    <div class="languages mob-languages">
                        <? if (LANGUAGE_ID == 'ru') { ?>
                            <span class="current" title="Russia"><span class="flag-select"><img
                                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/800px-Flag_of_Russia.svg.png"
                                            alt=""></span>RU</span>
                        <? } elseif (LANGUAGE_ID == 'en') { ?>
                            <span class="current" title="English"><span class="flag-select"><img
                                            src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/800px-Flag_of_the_United_States.svg.png?20151118161041"
                                            alt=""></span>ENG</span>
                        <? } ?> <!--   <span class="hover">Russia</span> -->
                        <ul class="select-l-new">
                            <li><a href="/"><span class="flag-select"><img
                                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/800px-Flag_of_Russia.svg.png"
                                                alt=""></span>RU</a></li>
                            <li><a href="/en/"><span class="flag-select"><img
                                                src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/800px-Flag_of_the_United_States.svg.png?20151118161041"
                                                alt=""></span>USA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script src="assets/script.js" type="text/javascript"></script>-->

<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/script.js"></script>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script src="<?= SITE_TEMPLATE_PATH ?>/assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

    $('#exampleModal').on('show.bs.modal', function (event) {

        event.preventDefault();
        var button = $(event.relatedTarget);
        var name = button.attr('product-name');
        var lang = button.attr('lang');
        var userdata = {'prod': name, 'site': lang};

        $.ajax({
            type: "POST",
            url: "/test/index.php",
            data: userdata,
            success: function (data) {
                $('.modal-order-content').html(data);
                $('.popup').removeClass('is-visible');
                $('.popup-contact').addClass('is-visible');

            }
        });

    })

    $('#popupModal').on('show.bs.modal', function (event) {
        event.preventDefault();
        var button = $(event.relatedTarget);
        var name = button.data('name'),
            product_name = button.data('product-name'),
            fat_content = button.data('product-fat-content'),
            composition = button.data('product-composition'),
            nutritional_value = button.data('product-nutritional-value'),
            energy_value = button.data('product-energy-value'),
            quality_standard = button.data('product-quality-standard'),
            certificates_of_conformity = button.data('product-certificates-of-conformity'),
            type_of_packaging = button.data('product-type-of-packaging'),
            popular = button.data('product-popular'),
            expiration_date = button.data('product-expiration-date'),
            storage_conditions = button.data('product-storage-conditions'),
            net_weight = button.data('product-net-weight'),
            img = button.data('img');
        var date = new Date;
        date.setDate(date.getDate() + 30);
        document.cookie = "product_name=" + name + "; path=/; expires=" + date.toUTCString();


        var modal = $(this);
        modal.find('.modal-title').text(name);
        modal.find('.modal-product-name').text(product_name);
        modal.find('.modal-product-fat-content').text(fat_content);
        modal.find('.modal-product-composition').text(composition);
        modal.find('.modal-product-nutritional-value').text(nutritional_value);
        modal.find('.modal-product-energy-value').text(energy_value);
        modal.find('.modal-product-quality-standard').text(quality_standard);
        modal.find('.modal-product-certificates-of-conformity').text(certificates_of_conformity);
        modal.find('.modal-product-type-of-packaging').text(type_of_packaging);
        modal.find('.modal-product-popular').text(popular);
        modal.find('.modal-product-expiration-date').text(expiration_date);
        modal.find('.modal-product-storage-conditions').text(storage_conditions);
        modal.find('.modal-product-net-weight').text(net_weight);
        modal.find('.modal-img').html("<img src='" + img + "'/>");
        modal.find('.modal-product-btn').attr("product-name", name);
        // aaa.attr("product-name",name);

        $('.popup').addClass('is-visible');

        // const btn = document.querySelector('.give');
        // btn.addEventListener('click', function(e) {
        //     const el = document.createElement('div');
        //     el.classList.add('product-item-popup-wrapper');
        //     const templ = `<div class="popup-form-item fix-newd">
        // 	<form action="" class="contacts-form-form">
        // 		<h2 align="center">Заполните форму для заказа товара</h2>
        // 		<input class="mt-lg-5 mt-xl-5" type="text" name="name" placeholder="Ваше имя">
        // 		<input type="mail" name="mail" placeholder="Ваш email">
        // 		<textarea type="text" name="message" placeholder="Ваше сообщение"></textarea>
        // 		<button type="submit" class="but mt-lg-4 mt-xl-4">
        // 		<div class="img-but">
        // 			<img src="./img/paln.png" alt="">
        // 		</div>
        // 		<div class="link-but">
        // 			Отправить сообщение
        // 		</div>
        //
        // 		</button>
        //
        //
        // 	</form>
        // 	<div class="close close-btn" onClick="close_popup()"></div>
        // </div>`;
        //     el.innerHTML = templ;
        //     testfunc('body').appendChild(el);
        //
        // });
    })
    // //open popup
    // $('.popup-trigger').on('click', function(event){
    //     var button0 = $(this.relatedTarget);
    //     var button01 = $(this.dataset);
    //     var button1 = $(event.relatedTarget);
    //     var button2 = $(event.dataset);
    //     console.log(button1);
    //     console.log(button0);
    //     console.log(button01);
    //     console.log(this.dataset.name);
    //     console.log(button2);
    //
    //     event.preventDefault();
    //     var button = $(event.relatedTarget);
    //     var name = button.data('name');
    //     var modal = $(this);
    //     modal.find('.modal-title').text(name);
    //     console.log("action");
    //     console.log(button);
    //     console.log(name);
    //     $('.popup').addClass('is-visible');
    // });
    //
    //close popup
    $('.popup').on('click', function (event) {
        if ($(event.target).is('.popup-close') || $(event.target).is('.popup')) {
            event.preventDefault();
            $(this).removeClass('is-visible');
        }
    });
    //close popup when clicking the esc keyboard button
    $(document).keyup(function (event) {
        if (event.which == '27') {
            $('.popup').removeClass('is-visible');
        }
    });

    jQuery(document).ready(function ($) {

        $(".languages").click(function () {
            $(".languages ul").show();
        })
        $(".languages ul").mouseleave(function () {
            $(".languages ul").hide();
        });

        $(".languages li a").click(function () {
            $(".languages li a").removeClass('sel');
            $(this).addClass('sel');
            var selectedValue = $(this).html();
            var showLang = selectedValue;
            $('.languages .current').html(showLang);
            $('.languages .current').attr("title", selectedValue);
            $('.languages .hover').html(selectedValue);
        })
    });


    const tabs = document.querySelectorAll(".tab");
    const tabContent = document.querySelectorAll(".tab-content");

    let tabNo = 0;
    let contentNo = 0;

    tabs.forEach((tab) => {
        tab.dataset.id = tabNo;
        tabNo++;
        tab.addEventListener("click", function () {
            tabs.forEach((tab) => {
                tab.classList.remove("active");
                tab.classList.add("non-active");
            });
            this.classList.remove("non-active");
            this.classList.add("active");
            tabContent.forEach((content) => {
                content.classList.add("hidden");
                if (content.dataset.id === tab.dataset.id) {
                    content.classList.remove("hidden");
                }
            });
        });
    });

    tabContent.forEach((content) => {
        content.dataset.id = contentNo;
        contentNo++;
    });

    $('#myCarousel').carousel({
        wrap: true
    })

    $('#left-sc').click(function myfunc1() {
        $('#tabs').scrollLeft($('#tabs').scrollLeft() - 100);
        console.log(2);
    });

    $('#right-sc').click(function myfunc2() {
        $('#tabs').scrollLeft($('#tabs').scrollLeft() + 100);
        console.log(2);
    });

    $('#left-sc-cat').click(function myfunc1() {
        $('#scroll-cat').scrollLeft($('#scroll-cat').scrollLeft() - 100);
        console.log(2);
    });

    $('#right-sc-cat').click(function myfunc2() {
        $('#scroll-cat').scrollLeft($('#scroll-cat').scrollLeft() + 100);
        console.log(2);
    });


    var $slider = $('.recommend-items');
    var isDown = false;
    var startX;
    var scrollLeft;

    $slider.mousedown(function (e) {
        isDown = true;
        $slider.addClass('active');
        startX = e.pageX - $slider.get(0).offsetLeft;
        scrollLeft = $slider.get(0).scrollLeft;
    });
    $slider.mouseleave(function () {
        isDown = false;
        $slider.removeClass('active');
    });
    $slider.mouseup(function () {
        isDown = false;
        $slider.removeClass('active');
    });
    $slider.mousemove(function (e) {
        if (!isDown) return;
        e.preventDefault();
        var x = e.pageX - $slider.get(0).offsetLeft;
        var walk = (x - startX) * 1; //scroll-fast
        $slider.get(0).scrollLeft = scrollLeft - walk;
        // console.log(walk);
    });

    $(document).on('ready', function() {
        $(".regular").slick({
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                }
            ]
        });

        $(".regular-home").slick({
            dots: false,
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                }
            ]
        });

    });

    $("#tip4").click(function() {
        $.fancybox(
            {
                'type' : 'iframe',
                // hide the related video suggestions and autoplay the video
                'href' : this.href.replace(new RegExp('watch\\?v=', 'i'), 'embed/') + '?rel=0&autoplay=1',
                'overlayShow' : true,
                'centerOnScroll' : true,
                'speedIn' : 100,
                'speedOut' : 50,
                'width' : 640,
                'height' : 480
            }
        );

        return false;
    });
</script>


<div class="modal-backdrop" aria-hidden="true"></div>
<div class="modal js-upload-file">
    <div class="modal-dialog" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Запрос успешно отправлен</h3>
            </div>
            <div class="modal-body">
                <button class="product-item-btn"
                        onclick="location.reload(true);">
                    OK
                </button>

            </div>

        </div>
    </div>
</div>
</body>
</html>
