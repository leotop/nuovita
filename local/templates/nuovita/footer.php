<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>



<div class = "row footer">
    <div class = "col-xs-6 col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
            "MAX_LEVEL" => "2",	// Уровень вложенности меню
            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
            "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
            "MENU_CACHE_TYPE" => "A",	// Тип кеширования
            "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
            "COMPONENT_TEMPLATE" => ".default",
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
        ),
            false,
            array(
                "ACTIVE_COMPONENT" => "Y"
            )
        );?>
    </div>
    <div class = "col-xs-6 col-md-2 col-lg-2">
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
    <div class = "col-xs-12 col-md-2 col-lg-2">
        <div class = "row">
            <div class = "col-xs-12 col-md-12 footer-contact-tel">
                <?
                $APPLICATION->IncludeFile(
                    SITE_DIR."include/phone.php",
                    Array(),
                    Array("MODE"=>"html")
                );
                ?>
            </div>
            <div class = "col-xs-12 col-md-12 footer-contact-mail">
                <?
                $APPLICATION->IncludeFile(
                    SITE_DIR."include/email.php",
                    Array(),
                    Array("MODE"=>"html")
                );
                ?>
            </div>
                <?
                $APPLICATION->IncludeFile(
                    SITE_DIR."include/soc_seti.php",
                    Array(),
                    Array("MODE"=>"html")
                );
                ?>
        </div>
    </div>
    <div class = "col-xs-12 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1">
        <div class = "row">
            <div class = "col-xs-12 col-md-12">
                <div class = "footer-text">
                    �������� ��� ���� ����������� �����, ����� ������� �������� �&nbsp;��������, ������������ �&nbsp;����������� ������������!
                </div>
            </div>
            <div class = "col-xs-12 col-md-12 footer_button">
                <form class="" id="form1" action="form/form_processing.php" method="post" onsubmit="">
                    <div class="form-button auto-close red">
                        <label for="name" class="cta">
                            <i class="icon fa fa-file-text-o"></i>
                            <span class="text">�������� �����</span>
                        </label>
                        <input  class="input" type="text" placeholder="" id="user-mail" name="email">
                        <button class="submit" type="submit">
                            <i class="fa fa-arrow-right"></i>
                        </button>
                        <input type="hidden" name="submit1" value="1">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class = "col-xs-12 footer-bottom-row">
        <?
        $APPLICATION->IncludeFile(
            SITE_DIR."include/copyright.php",
            Array(),
            Array("MODE"=>"html")
        );
        ?>
    </div>
</div>
</div>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src = "/local/templates/.default/js/bootstrap.min.js"></script>
<script src="/local/templates/.default/plugins/slider/responsiveslides.min.js"></script>
<script src="/local/templates/.default/plugins/form-button/form_button.min.js"></script>
<script src="/local/templates/.default/plugins/swipebox-master/jquery.swipebox.min.js"></script>
<script type="text/javascript" src = "/local/templates/.default/plugins/social-nets/goodshare.min.js"></script>
<script type="text/javascript">
    /*$(".rslides").responsiveSlides({
     auto: true,             // Boolean: Animate automatically, true or false
     speed: 500,            // Integer: Speed of the transition, in milliseconds
     timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
     pager: false,           // Boolean: Show pager, true or false
     nav: true,             // Boolean: Show navigation, true or false
     random: false,          // Boolean: Randomize the order of the slides, true or false
     pause: false,           // Boolean: Pause on hover, true or false
     pauseControls: true,    // Boolean: Pause when hovering controls, true or false
     prevText: "<",   // String: Text for the "previous" button
     nextText: ">",       // String: Text for the "next" button
     maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
     navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
     manualControls: "",     // Selector: Declare custom pager navigation
     namespace: "rslides",   // String: Change the default namespace used
     before: function(){},   // Function: Before callback
     after: function(){}     // Function: After callback
     });*/

    // Slideshow 1
    $("#slider1").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        timeout: 4000,
        namespace: "centered-btns"
    });
</script>

<script type="text/javascript">
    (function() {

        "use strict";

        var toggles = document.querySelectorAll(".c-hamburger");

        for (var i = toggles.length - 1; i >= 0; i--) {
            var toggle = toggles[i];
            toggleHandler(toggle);
        };

        function toggleHandler(toggle) {
            toggle.addEventListener( "click", function(e) {
                e.preventDefault();
                (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
            });
        }

    })();
</script>

<script type="text/javascript">
    $(function(){
        var zz;
        /*$(window).resize(function() {
         if ($(window).width() > 767) {
         zz = $("mobilemenu").attr("id");
         // $("mobilemenu").attr(style, "display:block;"); -->
         $("x").text("xcv");
         } else {
         $("mobilemenu").attr("style", "display:none;");
         }
         });*/
        $("#dLabel").bind("click", function() {
            if ($("#mobilemenu").hasClass("mob-menu")) {
                $("#mobilemenu").slideDown();
                $("#mobilemenu").removeClass("mob-menu");
            } else {
                $("#mobilemenu").slideUp();
                $("#mobilemenu").addClass("mob-menu");
            };

        })

    });

</script>


<!--<script type="text/javascript">
    $('#responsiveTabs').responsiveTabs({
        startCollapsed: 'tabs',
        active: 0,
        rotate: false,
        event: 'click',
        animation: 'fade',
        animationQueue:  true,
        duration: 500
    });
</script> -->

<script type="text/javascript">
    ;( function( $ ) {

        $( '.swipebox' ).swipebox( {
            useCSS : true, // false will force the use of jQuery for animations
            useSVG : false, // false to force the use of png for buttons
            initialIndexOnArray : 0, // which image index to init when a array is passed
            hideCloseButtonOnMobile : false, // true will hide the close button on mobile devices
            hideBarsDelay : null, // delay before hiding bars on desktop
            videoMaxWidth : 1140, // videos max width
            beforeOpen: function() {}, // called before opening
            afterOpen: null, // called after opening
            afterClose: function() {}, // called after closing
            loopAtEnd: false // true will return to the first image after the last image is reached
        } );

    } )( jQuery );
</script>

<script type="text/javascript">
    var tabs = $('#tabs-titles li'); //grab tabs
    var contents = $('#tabs-contents li'); //grab contents




    tabs.bind('click',function(){
        contents.fadeOut("slow"); //hide all contents
        tabs.removeClass('current');
        $(contents[$(this).index()]).fadeIn("slow");//remove 'current' classes

        $(this).addClass('current'); //add current class on clicked tab title
    });
</script>

</body>
</html>