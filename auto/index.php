
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>АВТО В РЕМОНТ | Ремонт автомобиля, топливной системы, регулировка клапонов, ремонт кузова, ходовой части, покраска.</title>

<link rel="shortcut icon" href="favicon.ico"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type='text/javascript' src='js/jquery.js'></script>

<script type='text/javascript'>

jQuery(document).ready(function() {

$(window).resize(function(){
$("div.verx-mobile").hide();
$("div.filter-bg").hide();
   });

jQuery("a.mobile").click(function () {
$("div.verx-mobile").show();
$("div.filter-bg").show();
  });

jQuery("div.closes-block, div.filter-bg, div.fcclose").click(function () {
$("div.verx-mobile").hide();
$("div.filter-bg").hide();
$("div.fcmodal").hide();
  });





  jQuery("a.consult, a.consult1").click(function () {
    elementClick = jQuery(this).attr("href")
    destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
    return false;
    $("div.verx-mobile").hide();
$("div.filter-bg").hide();
  });
  
jQuery("a.garantii, a.garantii1").click(function () {
    elementClick = jQuery(this).attr("href")
    destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
    return false;
    $("div.verx-mobile").hide();
$("div.filter-bg").hide();
  });
  
  jQuery("a.remont, a.remont1").click(function () {
    elementClick = jQuery(this).attr("href")
    destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
    return false;
    $("div.verx-mobile").hide();
$("div.filter-bg").hide();
  });
  
  jQuery("a.diag, a.diag1").click(function () {
    elementClick = jQuery(this).attr("href")
    destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
    return false;
    $("div.verx-mobile").hide();
$("div.filter-bg").hide();
  });
  
  jQuery("a.otzivi, a.otzivi1").click(function () {
    elementClick = jQuery(this).attr("href")
    destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
    return false;
    $("div.verx-mobile").hide();
$("div.filter-bg").hide();
  });
  
  jQuery("a.maps, a.maps1").click(function () {
    elementClick = jQuery(this).attr("href")
    destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
    return false;
    $("div.verx-mobile").hide();
$("div.filter-bg").hide();
  }); 


  jQuery("a.icont").click(function () {
    elementClick = jQuery(this).attr("href")
    destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
    return false;
    $("div.verx-mobile").hide();
$("div.filter-bg").hide();
  });

  $("#fc78659_1").submit(function () {
    var str = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: str,
      success: function (msg) {

$("#fc78659_1").html("<div align='center'><h3 style='font-size: 16px!important;'><strong style='font-size: 32px!important; color: #1b96a9!important;'>СПАСИБО ЗА ЗАЯВКУ!</strong><br><hr style='color: #1b96a9!important; 'background-color: #1b96a9!important;'>Наш менеджер позвонит Вам в самое ближайшее время.</h3></div>");
        
      }
    });
    return false;
  });

$("#fc58681_2").submit(function () {
    var str = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: str,
      success: function (msg) {

alert("Ваша заявка принята, наш специалист перезвонит в ближайшее время");
        
      }
    });
    return false;
  });



$("#fc10425_1").submit(function () {
    var str = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: str,
      success: function (msg) {

$("#fc10425_1").html("<div align='center'><h3 style='font-size: 16px!important;'><strong style='font-size: 32px!important; color: #1b96a9!important;'>СПАСИБО ЗА ЗАЯВКУ!</strong><br><hr style='color: #1b96a9!important; 'background-color: #1b96a9!important;'>Наш менеджер позвонит Вам в самое ближайшее время.</h3></div>");
        
      }
    });
    return false;
  });

$("#fc76244_3").submit(function () {
    var str = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: str,
      success: function (msg) {

$("#fc76244_3").html("<div align='center'><h3 style='font-size: 16px!important;'><strong style='font-size: 32px!important; color: #1b96a9!important;'>СПАСИБО ЗА ЗАЯВКУ!</strong><br><hr style='color: #1b96a9!important; 'background-color: #1b96a9!important;'>Наш менеджер позвонит Вам в самое ближайшее время.</h3></div>");
        
      }
    });
    return false;
  });

$("#fc15039_4").submit(function () {
    var str = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: str,
      success: function (msg) {

$("#fc15039_4").html("<div align='center'><h3 style='font-size: 16px!important;'><strong style='font-size: 32px!important; color: #1b96a9!important;'>СПАСИБО ЗА ЗАЯВКУ!</strong><br><hr style='color: #1b96a9!important; 'background-color: #1b96a9!important;'>Наш менеджер позвонит Вам в самое ближайшее время.</h3></div>");
        
      }
    });
    return false;
  });

$("#fc39039_5").submit(function () {
    var str = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: str,
      success: function (msg) {

$("#fc39039_5").html("<div align='center'><h3 style='font-size: 16px!important;'><strong style='font-size: 32px!important; color: #1b96a9!important;'>СПАСИБО ЗА ЗАЯВКУ!</strong><br><hr style='color: #1b96a9!important; 'background-color: #1b96a9!important;'>Наш менеджер позвонит Вам в самое ближайшее время.</h3></div>");
        
      }
    });
    return false;
  });

$("#fc13508_6").submit(function () {
    var str = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: str,
      success: function (msg) {

$("#fc13508_6").html("<div align='center'><h3 style='font-size: 16px!important;'><strong style='font-size: 32px!important; color: #1b96a9!important;'>СПАСИБО ЗА ЗАЯВКУ!</strong><br><hr style='color: #1b96a9!important; 'background-color: #1b96a9!important;'>Наш менеджер позвонит Вам в самое ближайшее время.</h3></div>");
        
      }
    });
    return false;
  });

$("#fc20350_7").submit(function () {
    var str = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: str,
      success: function (msg) {

$("#fc20350_7").html("<div align='center'><h3 style='font-size: 16px!important;'><strong style='font-size: 32px!important; color: #1b96a9!important;'>СПАСИБО ЗА ЗАЯВКУ!</strong><br><hr style='color: #1b96a9!important; 'background-color: #1b96a9!important;'>Наш менеджер позвонит Вам в самое ближайшее время.</h3></div>");
        
      }
    });
    return false;
  });

$("#fc14030_6").submit(function () {
    var str = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: str,
      success: function (msg) {

$("#fc14030_6").html("<div align='center'><h3 style='font-size: 16px!important;'><strong style='font-size: 32px!important; color: #1b96a9!important;'>СПАСИБО ЗА ЗАЯВКУ!</strong><br><hr style='color: #1b96a9!important; 'background-color: #1b96a9!important;'>Наш менеджер позвонит Вам в самое ближайшее время.</h3></div>");
        
      }
    });
    return false;
  });





















});

</script>

<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='js/combined-js.js'></script>


<!-- 
<script type='text/javascript' src='js/jquery.maskedinput.js'></script>
<script type='text/javascript' src='js/jquery.ui.core.min.js'></script>
<script type='text/javascript' src='js/jquery.ui.mouse.min.js'></script>
<script type='text/javascript' src='jquery.ui.slider.min.js'></script>
<script type='text/javascript' src='js/jquery.fileupload.min.js'></script>
<script type='text/javascript' src='js/form_only.js'></script>
<script type='text/javascript' src='js/jquery.iframe-transport.min.js'></script>
-->

<script type='text/javascript' src='js/jquery.ui.widget.min.js'></script>

<script type='text/javascript' src='js/jquery.ui.sortable.min.js'></script>



<script type='text/javascript' src='js/form.js'></script>
 
<script src="js/bootstrap.min.js"></script>
<script src="js/theme.js"></script>



<link rel='stylesheet' id='fc_common_style-css' href='css/common.css' type='text/css' media='all'/>
<link rel='stylesheet' id='main_style_fc-css' href='css/editor_form.css' type='text/css' media='all'/>
<link rel='stylesheet' id='fc-fontello-css' href='css/eartforms.css' type='text/css' media='all'/>


<link rel="stylesheet" href="css/custom.min.css">

<link rel="stylesheet" href="css/media.css">

</head>
<body>

<?php

require_once 'mobile/Mobile_Detect.php';
$detect = new Mobile_Detect;

if( !$detect->isMobile() && !$detect->isTablet() ){ ?>
 
<audio src="audio/car2.mp3" autoplay></audio>

<?php
}
?>

<div class='filter-bg'></div>

<div class='verx-mobile'>
<div class='menu-mobile'>

<div class='closes-block'>
<div class='closes-text'>
Закрыть
</div>
<div class='closes'>
</div>

</div>



<ul>
<a class='consult1' href='#consult'><li>Консультация</li></a><a class='garantii1' href='#garantii'><li>Гарантии</li></a><a class='remont1' href='#remont'><li>Ремонт</li></a><a class='diag1' href='#diag'><li>Диагностика</li></a><a class='otzivi1' href='#otzivi'><li>Отзывы</li></a><a class='icont' href='#ibottom'><li>Как доехать?</li></a></ul>


</div>

</div>






<div class='polosa'>&nbsp;</div>

<div class='verx'>
<div class='menu'>
<ul>
<a class='scrollto' href='#top'><li class='image'><img style='padding-right: 20px;' class="logos" src='img/logo2.png' align='center' /></li></a><a class='consult' href='#consult'><li>Консультация</li></a><a class='garantii' href='#garantii'><li>Гарантии</li></a><a class='remont' href='#remont'><li>Ремонт</li></a><a class='diag' href='#diag'><li>Диагностика</li></a><a class='otzivi' href='#otzivi'><li>Отзывы</li></a><a class='maps' href='#maps'><li>Как доехать?</li></a><a class='mobile' href='#mobile'><li></li></a></ul>


</div>

</div>

<div class="content">
<div class="page-wrapper">
<div class="b-00-wrapper">
<div class="b-00">
<div class="b-00-text-01 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s">РЕМОНТ АВТО,</div>

<div class="b-00-text-02 wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">ДИАГНОСТИКА И ПОКРАСКА</div>
</p></div>
</p></div>
<p> <a href="#b-01"></a></p>
<div id="b-01" class="b-01">
<div class="container">
<div class="row row-01">
<div class="col-sm-4 col-md-2 logo wow fadeInDown" data-wow-delay="0.5s" style='overflow: hidden!important; background: none!important; background-color: none!important;'>
<div class="b-01-text-01" style='background: none!important; background-color: none!important;'>
<br/>
<br/>
</div>
</p></div>
<div class="col-sm-6 col-sm-offset-2 col-md-offset-4 callback">
<div class="capt-container" align="center">
<h1 class="capt-mobile">
Ремонт авто,
<br>
<span>диагностика и покраска</span>
</h1>
</div>
<div class="phone" style="color: #1b96a9!important; text-shadow: 1px 1px 2px black;">+7 (912) 884-60-22</div>
<div class="btn-wrapper">
<style></style><style>.nform{behavior:url('http://mitsubishi.e-art.bz/wp-content/plugins/eartforms/libraries/pie/PIE.htc');}</style><input type='hidden' class='form_un' value='78659'><a data-target='#fc-fc78659_1' data-toggle='fcmodal' class='fc-btn' style='color: #fff; background-color: #48e'>Заказать обратный звонок</a>
<div class='fcmodal fcfade fc-form-modal fc-common' id='fc-fc78659_1' tabindex='-1' role='dialog' aria-hidden='true'>
<div class='fcmodal-dialog' style='width: 440px;'>
<div class='fcmodal-content'>
<div class='fcclose'>×</div>
<div class='fcmodal-body' style='padding: 0px !important'>
<input type='hidden' id='emails_fc78659' value=''>
<form id="fc78659_1" class="a_1231 nform no_submit_hidden no_save_form placeholder noframe ltr none spin check_conflict allow_multi one  block_label star_true vertical fc-common" style="width: 700px; font-family: 'Helvetica Neue', Arial;"><input type="hidden" class="form_id ng-pristine ng-valid" val="1" /><a id="anchor_25709_anchor"></a><a href="#anchor_25709_anchor" class="anchor_trigger"></a><div id="fe_title" class="nform_li form_title none" style="font-size: 32px; font-weight: normal; text-align: left;"></div><ul class="form_ul none" id="form_ul" style="height: auto; opacity: 1; border-top-width: 0px;"> <li ng-repeat="el in build" id="fe_0_1231" class="nform_li ng-scope inline1 left fe_0 required-0" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}" style="margin-bottom: 20px; margin-top: 20px;"><input type="hidden" class="name_holder ng-scope" value=""><span class="custom-text ng-scope" ng-style="{ paddingTop: el.divspa_in, paddingBottom: el.divspa_in, fontSize: el.divfs, color: el.divfc, fontFamily: el.family, background: el.custom_bg_color }" compile="el.customText" style="display: block; position: relative; white-space: pre-line; line-height: 1.2; padding-left: 6px; padding-right: 6px; font-size: 14px; color: rgb(102, 102, 102);"><h4 class="ng-scope"><strong>ЗАПОЛНИТЕ ФОРМУ,</strong>
и мы обязательно свяжемся с Вами</h4></span></div><span class="element_id ng-binding">0</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_1_1231" class="nform_li ng-scope inline1 left fe_1 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите имя"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите имя<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">full name</span></span><span class="input_cover text_cover ng-scope">

<input type="text" placeholder="Введите имя" id="name" name="name" class="field_class" style="width: 100%; font-size: 14px;">

<span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="eartforms-help-circled"></i></span></span><span class="field1 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">1</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_2_1231" class="nform_li ng-scope inline1 left fe_2 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите телефон"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите телефон<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">+7 (code) number</span></span><span class="input_cover text_cover ng-scope">

<input type="text" placeholder="Введите телефон" id="tel" name="tel" class="field_class phonenum" style="width: 100%; font-size: 14px;" required>

<span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="formcraft-help-circled"></i></span></span><span class="field2 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">2</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_3_1231" class="nform_li ng-scope inline1 left fe_3 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Заказать звонок">

<button type="submit" class="submit_button nform_btn boots" style="font-size: 15px; height: 37px; width: 100%; border-radius: 4px; font-weight: normal; color: rgb(0, 0, 0); background-color: rgb(249, 192, 4);">Заказать звонок</button>

</div><span class="element_id ng-binding">3</span></li></ul>

</form>


</div>
</div>
</div>
</div>
</div>
</p></div>
</p></div>
<div class="row row-02">
<div class="col-sm-6 col-sm-offset-6 bubbles">
<div class="bubble bubble-01 wow fadeInDown" data-wow-delay="1s"></div>
<div class="bubble bubble-02 wow fadeInDown" data-wow-delay="1.5s"></div>
<div class="bubble bubble-03 wow fadeInDown" data-wow-delay="2s"></div>
</p></div>
</p></div>
<div class="b-01-polygons"></div>
</p></div>
<p> <img class="b-01-kia" src="img/b-01-02.png" alt="Kia">
</div>
<p>  </p>
<p> <a href="#b-02"></a></p>



<div id="b-02" class="b-02">
<div class="container" name='consult' id='consult'>

<div class="b-02-text-01">
Получите бесплатную консультацию <br/>
и расчет стоимости ремонта:
</div>
<div class="wow fadeInRight">
<style>.nform{behavior:url('http://mitsubishi.e-art.bz/wp-content/plugins/eartforms/libraries/pie/PIE.htc');}</style><form id="fc58681_2" class="a_1232 nform no_submit_hidden no_save_form placeholder noframe ltr none spin check_conflict allow_multi one  block_label star_true vertical fc-common" style="width: 762px; font-family: 'Helvetica Neue', Arial;"><input type="hidden" class="form_id ng-pristine ng-valid" val="2" ng-model="con[0].form_main_id"><input type="hidden" class="getlocation" val="" name="location_hidden__0_0_1000_" value="http://mitsubishi.e-art.bz/wp-admin/admin.php?page=eartforms_admin&amp;id=2"><a id="anchor_16758_anchor"></a><a href="#anchor_16758_anchor" class="anchor_trigger"></a><div id="fe_title" class="nform_li form_title none" ng-style="{fontSize: con[0].ft_px+&quot;px&quot;, borderTopLeftRadius: con[0].fr+&quot;px&quot;, MozBorderTopLeftRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopLeftRadius: con[0].fr+&quot;px&quot;, borderTopRightRadius: con[0].fr+&quot;px&quot;, MozBorderTopRightRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopRightRadius: con[0].fr+&quot;px&quot;, color: con[0].ft_co, backgroundColor: con[0].ft_bg, fontFamily: con[0].tfamily, fontWeight: con[0].tbold, backgroundImage: con[0].bg_image, textAlign: con[0].ftalign}" style="font-size: 32px; font-weight: normal; text-align: left;"></div><ul class="form_ul none" id="form_ul" style="height: auto; opacity: 1; border-top-width: 0px;"> <li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_0_1232" class="nform_li ng-scope inline2 left fe_0 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите имя"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите имя<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">full name</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите имя" name="name" class="field_class" style="width: 98%; font-size: 14px;"><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="eartforms-help-circled"></i></span></span><span class="field0 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">0</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_1_1232" class="nform_li ng-scope inline2 left fe_1 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите телефон"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите телефон<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">+7 (code) number</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите телефон" name="tel" class="field_class phonenum" style="width: 98%; font-size: 14px;" required><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="formcraft-help-circled"></i></span></span><span class="field1 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">1</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_2_1232" class="nform_li ng-scope inline2 left fe_2 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите марку авто"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите марку авто<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">full name</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите марку авто" name="marka" class="field_class" style="width: 98%; font-size: 14px;"><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="eartforms-help-circled"></i></span></span><span class="field2 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">2</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_3_1232" class="nform_li ng-scope inline2 left fe_3 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите модель авто"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите модель авто<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">full name</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите модель авто" name="model" class="field_class" style="width: 98%; font-size: 14px;"><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="eartforms-help-circled"></i></span></span><span class="field3 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">3</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_4_1232" class="nform_li ng-scope inline1 left fe_4 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Опишите проблемы с авто"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc }" style="font-size: 11px;">Опишите проблемы с авто<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">something more</span></span><span class="input_cover text_cover ng-scope"><textarea rows="5" placeholder="Опишите проблемы с авто" name="problems" class="field_class" style="width: 100%; font-size: 14px;"></textarea><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="eartforms-help-circled"></i></span></span><span class="field4 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">4</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_5_1232" class="nform_li ng-scope inline2 left fe_5 required-0 nform_li_before" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Получить консультацию"><button type="submit" class="submit_button nform_btn boots" ng-style="{backgroundColor: el.sco, fontSize: el.sfs,  left: el.lp,  marginTop: el.tp,  marginBottom: el.bp,  marginRight: el.rp,  height: el.spad1, width: el.spad2,  borderRadius: el.curve,  MozBorderRadius: el.curve,  WebkitBorderRadius: el.curve, fontFamily: el.sfamily, fontWeight: el.sbold, color: el.sbfco}" style="font-size: 15px; height: 37px; width: 100%; border-radius: 4px; font-weight: normal; color: rgb(0, 0, 0); background-color: rgb(249, 192, 4);">Получить консультацию</button></div><span class="element_id ng-binding">5</span></li></ul><input type="hidden" class="getreferal" value="нет" name="AFFILIAT_hidden__0_0_1000_"></form>
</div>
</p></div>
</p></div>
<p>  </p>
<p> <a href="#b-03"></a></p>
<div id="b-03" class="b-03">
<div class="container" name='garantii' id='garantii'>
<div class="b-03-text-01">
Почему более 100 требовательных клиентов <br/>
доверяют нам даже самый сложный ремонт автомобилей?
</div>
<div class="row row-01">
<div class="col-sm-6 b-03-cell b-03-cell-01 wow fadeInLeft" data-wow-delay="0s">
<strong>Более 10 лет</strong> – опыт обслуживания <br/>
и ремонта автомобилей
</div>
<div class="col-sm-6 b-03-cell b-03-cell-02 wow fadeInRight" data-wow-delay="0.25s">
<strong>Точность диагностики.</strong> Новейшие стенды, <br/>
детекторы, диагностические линии.
</div>
</p></div>
<div class="row row-01">
<div class="col-sm-6 b-03-cell b-03-cell-03 wow fadeInLeft" data-wow-delay="0.5s">
<strong>Большой опыт,</strong> <br/>
высокий уровень квалификации
</div>
<div class="col-sm-6 b-03-cell b-03-cell-04 wow fadeInRight" data-wow-delay="0.75s">
Соблюдение <strong>сроков</strong> и стоимости работ
</div>
</p></div>
</p></div>
</p></div>
<p>  </p>
<p> <a href="#b-04"></a></p>
<div id="b-04" class="b-04">
<div class="container" name='remont' id='remont'>
<div class="b-04-text-01">
Ремонт и покраска автомобиля, <br/>
со 100% гарантией качества, в срок!
</div>
<div class="row row-01">
<div class="col-sm-6">
<div class="b-04-cell b-04-cell-01">
Ремонт и обслуживание автомобилей на высшем уровне. Первоклассный сервис и современное оборудование. Мы аккуратны, компетентны, внимательны.
</div>
<div class="b-04-cell b-04-cell-02">
Эксперты в обслуживании <br/>
<strong>любых марок автомобилей</strong>
</div>
</p></div>
<div class="col-sm-6">
<div class="b-04-cell b-04-cell-03">
Система контроля качества работы специалистов. Сотрудники всегда «в тонусе», готовы к внезапным проверкам и тестированию.
</div>
<div class="b-04-cell b-04-cell-04">
Знаем все тонкости и нюансы ремонта автомобилей
</div>
</p></div>
</p></div>
<div class="b-04-text-02">
Быстро подберем любые запчасти, <br/>
даже самые редкие.
</div>
<div class="row row-02">
<div class="col-sm-5">
<div class="b-04-text-03">
<p>
Более <strong>2500</strong> наименований <br/>
запасных частей;
</p>
<p>
Найдем запчасти под любую <br/>
марку автомобиля;
</p>
</p></div>
</p></div>
<div class="col-sm-2"></div>
<div class="col-sm-5">
<div class="b-04-text-04">
<p><strong>Всего 1 день</strong> – срок доставки<br/>
запчастей с Центрального склада;
</p>
<p>
<strong>Гарантия за з/ч</strong> <br/>
оригинальных запчастей.
</p>
</p></div>
</p></div>
</p></div>
<div class="btn-wrapper">
<style></style><style>.nform{behavior:url('http://mitsubishi.e-art.bz/wp-content/plugins/eartforms/libraries/pie/PIE.htc');}</style><input type='hidden' class='form_un' value='10425'><a data-target='#fc-fc10425_1' data-toggle='fcmodal' class='fc-btn' style='color: #fff; background-color: #48e'>Заказать звонок</a>
<div class='fcmodal fcfade fc-form-modal fc-common' id='fc-fc10425_1' tabindex='-1' role='dialog' aria-hidden='true'>
<div class='fcmodal-dialog' style='width: 440px;'>
<div class='fcmodal-content'>
<div class='fcclose'>×</div>
<div class='fcmodal-body' style='padding: 0px !important'>
<input type='hidden' id='emails_fc10425' value=''>
<form id="fc10425_1" class="a_1231 nform no_submit_hidden no_save_form placeholder noframe ltr none spin check_conflict allow_multi one  block_label star_true vertical fc-common" style="width: 700px; font-family: 'Helvetica Neue', Arial;"><input type="hidden" class="form_id ng-pristine ng-valid" val="1" ng-model="con[0].form_main_id"><input type="hidden" class="getlocation" val="" name="location_hidden__0_0_1000_" value="http://mitsubishi.e-art.bz/wp-admin/admin.php?page=eartforms_admin&amp;id=1"><a id="anchor_25709_anchor"></a><a href="#anchor_25709_anchor" class="anchor_trigger"></a><div id="fe_title" class="nform_li form_title none" ng-style="{fontSize: con[0].ft_px+&quot;px&quot;, borderTopLeftRadius: con[0].fr+&quot;px&quot;, MozBorderTopLeftRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopLeftRadius: con[0].fr+&quot;px&quot;, borderTopRightRadius: con[0].fr+&quot;px&quot;, MozBorderTopRightRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopRightRadius: con[0].fr+&quot;px&quot;, color: con[0].ft_co, backgroundColor: con[0].ft_bg, fontFamily: con[0].tfamily, fontWeight: con[0].tbold, backgroundImage: con[0].bg_image, textAlign: con[0].ftalign}" style="font-size: 32px; font-weight: normal; text-align: left;"></div><ul class="form_ul none" id="form_ul" style="height: auto; opacity: 1; border-top-width: 0px;"> <li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_0_1231" class="nform_li ng-scope inline1 left fe_0 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}" style="margin-bottom: 20px; margin-top: 20px;"><input type="hidden" class="name_holder ng-scope" value=""><span class="custom-text ng-scope" ng-style="{ paddingTop: el.divspa_in, paddingBottom: el.divspa_in, fontSize: el.divfs, color: el.divfc, fontFamily: el.family, background: el.custom_bg_color }" compile="el.customText" style="display: block; position: relative; white-space: pre-line; line-height: 1.2; padding-left: 6px; padding-right: 6px; font-size: 14px; color: rgb(102, 102, 102);"><h4 class="ng-scope"><strong>ЗАПОЛНИТЕ ФОРМУ,</strong>
и мы обязательно свяжемся с Вами</h4></span><input type="hidden" name="_custom__0_0_99999999_field0_" class="field_class text_hidden_class ng-scope" value="" do_what="[]"></div><span class="element_id ng-binding">0</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_1_1231" class="nform_li ng-scope inline1 left fe_1 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите имя"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите имя<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">full name</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите имя" id="name" name="name" class="field_class" style="width: 100%; font-size: 14px;"><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="eartforms-help-circled"></i></span></span><span class="field1 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">1</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_2_1231" class="nform_li ng-scope inline1 left fe_2 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите телефон"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите телефон<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">+7 (code) number</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите телефон" name="tel" class="field_class phonenum" style="width: 100%; font-size: 14px;" required><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="formcraft-help-circled"></i></span></span><span class="field2 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">2</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_3_1231" class="nform_li ng-scope inline1 left fe_3 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Заказать звонок"><button type="submit" class="submit_button nform_btn boots" style="font-size: 15px; height: 37px; width: 100%; border-radius: 4px; font-weight: normal; color: rgb(0, 0, 0); background-color: rgb(249, 192, 4);">Заказать звонок</button></div><span class="element_id ng-binding">3</span></li></ul><input type="hidden" class="getreferal" value="нет" name="AFFILIAT_hidden__0_0_1000_"></form>
</div>
</div>
</div>
</div>
</div>
</p></div>
</p></div>
<p>  </p>
<p> <a href="#b-05"></a></p>
<div id="b-05">
<div class="container" class="b-05" name='diag' id='diag'>
<div class="b-05-text-01">
Только новейшее, современное оборудование <br/>
для точной диагностики
</div>
<ul id="car-parts-01" class="b-05-parts list-unstyled">
<li class="b-05-parts-item" data-part="parts-01-01" style="padding-left: 7px!important;">Ходовая часть</li>
<li class="b-05-parts-item" data-part="parts-01-02" style="padding-left: 7px!important;">Тормозные диски</li>
<li class="b-05-parts-item" data-part="parts-01-03" style="padding-left: 7px!important;">Кузов</li>
<li class="b-05-parts-item" data-part="parts-01-04" style="padding-left: 7px!important;">Амортизаторы</li>
<li class="b-05-parts-item" data-part="parts-01-05" style="padding-left: 7px!important;">Форсунки</li>
<li class="b-05-parts-item active" data-part="parts-01-06" style="padding-left: 7px!important;">Кондиционер</li>
</ul>
<div class="b-05-text-02" data-part="parts-01-01">
Контроль состояния ходовой в нагруженном состоянии: <br/>
люфт-детектор Nussbaum.
</div>
<div class="b-05-text-02" data-part="parts-01-02">
Проточка тормозных дисков без демонтажа с авто: <br/>
стенд для проточки дисков Hunter OCL-360.
</div>
<div class="b-05-text-02" data-part="parts-01-03">
Регулировка углов установки колес, контроль геометрии <br/>
кузова: новейший цифровой стенд Hunter DSP-400. </p>
<p> <strong>Сверхточное измерение:</strong> <br/>
до 0,01 м на длину кузова.
</div>
<div class="b-05-text-02" data-part="parts-01-04">
Оценка распределения тормозных усилий, состояния амортизаторов, <br/>
развесовки по осям, бокового скольжения: диагностическая линия Hunter.
</div>
<div class="b-05-text-02" data-part="parts-01-05">
Тестер и реаниматор форсунок – стенд Spin. <br/>
Диагностика и ультразвуковая чистка форсунок для впрыска топлива бензиновых двигателей.
</div>
<div class="b-05-text-02 active" data-part="parts-01-06">
Диагностика и заправка кондиционеров: <br/>
станция Sun Kool Kare. Работает на современном хладагенте 134а.
</div>
<div id="car-images-01" class="b-05-car-wrapper">
<div class="b-05-wing"></div>
<div class="b-05-wheel">
<img class="b-05-car-img" src="img/h-wheel.png" alt="Машина">
</div>
<div class="b-05-wheel-back">
<img class="b-05-car-img" src="img/h-wheel-back.png" alt="Машина">
</div>
<div class="b-05-wheel-right">
<img class="b-05-car-img" src="img/h-wheel-right.png" alt="Машина">
</div>
<div class="b-05-hood active" data-part="hood" >
<img style="margin-left: 320px!important;" class="b-05-car-img" src="img/car-hood.png" alt="Машина">
</div>
<div class="b-05-car-item origin" data-part="parts-01-00">
<img class="b-05-car-img" src="img/h-origin.png" alt="Машина">
</div>
<div class="b-05-car-item" data-part="parts-01-01">
<img class="b-05-car-img" src="img/h-bottom.png" alt="Машина">
</div>
<div class="b-05-car-item wheel-wrapper wheel-wrapper-01" data-part="parts-01-02">
<div class="b-05-breaks"></div>
</p></div>
<div class="b-05-car-item" data-part="parts-01-03">
<img class="b-05-car-img" src="img/h-body.png" alt="Машина">
</div>
<div class="b-05-car-item wheel-wrapper wheel-wrapper-02" data-part="parts-01-04">
<div class="b-05-abs"></div>
</p></div>
<div class="b-05-car-item nozzle" data-part="parts-01-05">
<div class="b-05-nozzle"></div>
</p></div>
<div class="b-05-car-item b-05-cond active" data-part="parts-01-06">
<img class="b-05-car-img" src="img/h-cond.png" alt="Машина">
</div>
</p></div>
<div class="b-05-polygons"></div>
<div class="btn-wrapper">
<style></style><style>.nform{behavior:url('http://mitsubishi.e-art.bz/wp-content/plugins/eartforms/libraries/pie/PIE.htc');}</style><input type='hidden' class='form_un' value='76244'><a data-target='#fc-fc76244_3' data-toggle='fcmodal' class='fc-btn' style='color: #fff; background-color: #48e'>Записаться на диагностику</a>
<div class='fcmodal fcfade fc-form-modal fc-common' id='fc-fc76244_3' tabindex='-1' role='dialog' aria-hidden='true'>
<div class='fcmodal-dialog' style='width: 440px;'>
<div class='fcmodal-content'>
<div class='fcclose'>×</div>
<div class='fcmodal-body' style='padding: 0px !important'>
<input type='hidden' id='emails_fc76244' value=''>
<form id="fc76244_3" class="a_1233 nform no_submit_hidden no_save_form placeholder noframe ltr none spin check_conflict allow_multi one  block_label star_true vertical fc-common" style="width: 700px; font-family: 'Helvetica Neue', Arial;"><input type="hidden" class="form_id ng-pristine ng-valid" val="3" ng-model="con[0].form_main_id"><input type="hidden" class="getlocation" val="" name="location_hidden__0_0_1000_" value="http://mitsubishi.e-art.bz/wp-admin/admin.php?page=eartforms_admin&amp;id=3"><a id="anchor_37505_anchor"></a><a href="#anchor_37505_anchor" class="anchor_trigger"></a><div id="fe_title" class="nform_li form_title none" ng-style="{fontSize: con[0].ft_px+&quot;px&quot;, borderTopLeftRadius: con[0].fr+&quot;px&quot;, MozBorderTopLeftRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopLeftRadius: con[0].fr+&quot;px&quot;, borderTopRightRadius: con[0].fr+&quot;px&quot;, MozBorderTopRightRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopRightRadius: con[0].fr+&quot;px&quot;, color: con[0].ft_co, backgroundColor: con[0].ft_bg, fontFamily: con[0].tfamily, fontWeight: con[0].tbold, backgroundImage: con[0].bg_image, textAlign: con[0].ftalign}" style="font-size: 32px; font-weight: normal; text-align: left;"></div><ul class="form_ul none" id="form_ul" style="height: auto; opacity: 1; border-top-width: 0px;"> <li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_0_1233" class="nform_li ng-scope inline1 left fe_0 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}" style="margin-bottom: 20px; margin-top: 20px;"><input type="hidden" class="name_holder ng-scope" value=""><span class="custom-text ng-scope" ng-style="{ paddingTop: el.divspa_in, paddingBottom: el.divspa_in, fontSize: el.divfs, color: el.divfc, fontFamily: el.family, background: el.custom_bg_color }" compile="el.customText" style="display: block; position: relative; white-space: pre-line; line-height: 1.2; padding-left: 6px; padding-right: 6px; font-size: 14px; color: rgb(102, 102, 102);"><h4 class="ng-scope"><strong>ЗАПОЛНИТЕ ФОРМУ,</strong>
и мы обязательно свяжемся с Вами</h4></span><input type="hidden" name="_custom__0_0_99999999_field0_" class="field_class text_hidden_class ng-scope" value="" do_what="[]"></div><span class="element_id ng-binding">0</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_1_1233" class="nform_li ng-scope inline1 left fe_1 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите имя"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите имя<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">full name</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите имя" id="name" name="name" class="field_class" style="width: 100%; font-size: 14px;"><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="eartforms-help-circled"></i></span></span><span class="field1 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">1</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_2_1233" class="nform_li ng-scope inline1 left fe_2 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите телефон"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите телефон<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">+7 (code) number</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите телефон" name="tel" class="field_class phonenum" style="width: 100%; font-size: 14px;" required><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="formcraft-help-circled"></i></span></span><span class="field2 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">2</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_3_1233" class="nform_li ng-scope inline1 left fe_3 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Записаться на диагностику"><button type="submit" class="submit_button nform_btn boots" style="font-size: 15px; height: 37px; width: 100%; border-radius: 4px; font-weight: normal; color: rgb(0, 0, 0); background-color: rgb(249, 192, 4);">Записаться на диагностику</button></div><span class="element_id ng-binding">3</span></li></ul><input type="hidden" class="getreferal" value="нет" name="AFFILIAT_hidden__0_0_1000_"></form>
</div>
</div>
</div>
</div>
</div>
</p></div>
</p></div>
<p>  </p>
<p> <a href="#b-06"></a></p>
<div id="b-06" class="b-06">
<div class="container">
<div class="b-06-text-01">
Вы сильно спешите? <br/>
Умеем работать быстро и качественно!
</div>
<div class="row row-01">
<div class="col-sm-4">
<div class="b-06-text-02">
Диагностика ЭСУД <br/>
за 30 минут
</div>
<div class="b-06-text-02">
Можем принять авто на <br/>
ТО моментально, «с колес»
</div>
</p></div>
<div class="col-sm-4 b-06-speed">
<div class="b-06-arrow"></div>
</p></div>
<div class="col-sm-4">
<div class="b-06-text-02">
Замена масла ДВС <br/>
за 30-40 минут
</div>
<div class="b-06-text-02">
Замена тормозных дисков, <br/>
колодок за 60 минут
</div>
</p></div>
</p></div>
</p></div>
</p></div>
<p>  </p>
<p> <a href="#b-07"></a></p>
<div id="b-07" class="b-07">
<div class="container">
<div class="b-07-text-01">
Как скоротать ожидание? Отдохните.
</div>
<div class="b-07-text-02">
Комфортная зона отдыха для клиентов:
</div>
<div class="row row-02">
<div class="col-sm-4">
<div class="b-07-text-03">
<p>
Удобные диваны, телевизор. <br/>
Бесплатный WI-FI.
</p>
</p></div>
</p></div>
<div class="col-sm-4">
<div class="b-07-text-04">
<p>
Столик с печатной продукцией<br/>
по автомобильной тематике.
</p>
</p></div>
</p></div>
<div class="col-sm-4">
<div class="b-07-text-05">
<p>
Кафе, где можно выпить чай, <br/>
кофе, пообедать.
</p>
</p></div>
</p></div>
</p></div>
</p></div>
</p></div>
<p>  </p>
<p> <a href="#b-08"></a></p>
<div id="b-08" class="b-08">
<img class="b-08-parts b-08-parts-01 img-responsive wow fadeInUp" data-wow-delay="0.2s" src="img/b-08-parts-01.png" alt="Комфортная зона"><br/>
<img class="b-08-parts b-08-parts-02 img-responsive wow fadeInLeft" data-wow-delay="1.6s" src="img/b-08-parts-02.png" alt="Комфортная зона"><br/>
<img class="b-08-parts b-08-parts-03 img-responsive wow fadeInRight" data-wow-delay="1.6s" src="img/b-08-parts-03.png" alt="Комфортная зона"><br/>
<img class="b-08-parts b-08-parts-04 img-responsive wow fadeInUp" data-wow-delay="0.8s" src="img/b-08-parts-04.png" alt="Комфортная зона">
</div>
<p>  </p>
<p> <a href="#b-09"></a></p>
<div id="b-09" class="b-09">
<div class="container">
<div class="row row-01">
<div class="col-sm-4 b-09-cell b-09-cell-01">
<div class="b-09-text-01">
Беспокоят странные <br/> звуки в машине?
</div>
</p></div>
<div class="col-sm-4 b-09-cell b-09-cell-02">
<div class="b-09-text-01">
Появились <br/> неприятные запахи?
</div>
</p></div>
<div class="col-sm-4 b-09-cell b-09-cell-03">
<div class="b-09-text-01">
Или просто <br/>
машина требует <br/>
ремонта?
</div>
</p></div>
</p></div>
</p></div>
<div class="b-09-text-02">
Запишитесь на ТО Если это первый Ваш визит к нам – получите ценный подарок:
</div>
<div class="btn-wrapper">
<style></style><style>.nform{behavior:url('http://mitsubishi.e-art.bz/wp-content/plugins/eartforms/libraries/pie/PIE.htc');}</style><input type='hidden' class='form_un' value='15039'><a data-target='#fc-fc15039_4' data-toggle='fcmodal' class='fc-btn' style='color: #fff; background-color: #48e'>Записаться на ТО</a>
<div class='fcmodal fcfade fc-form-modal fc-common' id='fc-fc15039_4' tabindex='-1' role='dialog' aria-hidden='true'>
<div class='fcmodal-dialog' style='width: 440px;'>
<div class='fcmodal-content'>
<div class='fcclose'>×</div>
<div class='fcmodal-body' style='padding: 0px !important'>
<input type='hidden' id='emails_fc15039' value=''>
<form id="fc15039_4" class="a_1234 nform no_submit_hidden no_save_form placeholder noframe ltr none spin check_conflict allow_multi one  block_label star_true vertical fc-common" style="width: 700px; font-family: 'Helvetica Neue', Arial;"><input type="hidden" class="form_id ng-pristine ng-valid" val="4" ng-model="con[0].form_main_id"><input type="hidden" class="getlocation" val="" name="location_hidden__0_0_1000_" value="http://mitsubishi.e-art.bz/wp-admin/admin.php?page=eartforms_admin&amp;id=4"><a id="anchor_13102_anchor"></a><a href="#anchor_13102_anchor" class="anchor_trigger"></a><div id="fe_title" class="nform_li form_title none" ng-style="{fontSize: con[0].ft_px+&quot;px&quot;, borderTopLeftRadius: con[0].fr+&quot;px&quot;, MozBorderTopLeftRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopLeftRadius: con[0].fr+&quot;px&quot;, borderTopRightRadius: con[0].fr+&quot;px&quot;, MozBorderTopRightRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopRightRadius: con[0].fr+&quot;px&quot;, color: con[0].ft_co, backgroundColor: con[0].ft_bg, fontFamily: con[0].tfamily, fontWeight: con[0].tbold, backgroundImage: con[0].bg_image, textAlign: con[0].ftalign}" style="font-size: 32px; font-weight: normal; text-align: left;"></div><ul class="form_ul none" id="form_ul" style="height: auto; opacity: 1; border-top-width: 0px;"> <li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_0_1234" class="nform_li ng-scope inline1 left fe_0 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}" style="margin-bottom: 20px; margin-top: 20px;"><input type="hidden" class="name_holder ng-scope" value=""><span class="custom-text ng-scope" ng-style="{ paddingTop: el.divspa_in, paddingBottom: el.divspa_in, fontSize: el.divfs, color: el.divfc, fontFamily: el.family, background: el.custom_bg_color }" compile="el.customText" style="display: block; position: relative; white-space: pre-line; line-height: 1.2; padding-left: 6px; padding-right: 6px; font-size: 14px; color: rgb(102, 102, 102);"><h4 class="ng-scope"><strong>ЗАПОЛНИТЕ ФОРМУ,</strong>
и мы обязательно свяжемся с Вами</h4></span><input type="hidden" name="_custom__0_0_99999999_field0_" class="field_class text_hidden_class ng-scope" value="" do_what="[]"></div><span class="element_id ng-binding">0</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_1_1234" class="nform_li ng-scope inline1 left fe_1 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите имя"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите имя<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">full name</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите имя" id="name" name="name" class="field_class" style="width: 100%; font-size: 14px;"><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="eartforms-help-circled"></i></span></span><span class="field1 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">1</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_2_1234" class="nform_li ng-scope inline1 left fe_2 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите телефон"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите телефон<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">+7 (code) number</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите телефон" name="tel" class="field_class phonenum" style="width: 100%; font-size: 14px;" required><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="formcraft-help-circled"></i></span></span><span class="field2 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">2</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_3_1234" class="nform_li ng-scope inline1 left fe_3 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Записаться на ТО"><button type="submit" class="submit_button nform_btn boots" ng-style="{backgroundColor: el.sco, fontSize: el.sfs,  left: el.lp,  marginTop: el.tp,  marginBottom: el.bp,  marginRight: el.rp,  height: el.spad1, width: el.spad2,  borderRadius: el.curve,  MozBorderRadius: el.curve,  WebkitBorderRadius: el.curve, fontFamily: el.sfamily, fontWeight: el.sbold, color: el.sbfco}" style="font-size: 15px; height: 37px; width: 100%; border-radius: 4px; font-weight: normal; color: rgb(0, 0, 0); background-color: rgb(249, 192, 4);">Записаться на ТО</button></div><span class="element_id ng-binding">3</span></li></ul><input type="hidden" class="getreferal" value="нет" name="AFFILIAT_hidden__0_0_1000_"></form>
</div>
</div>
</div>
</div>
</div>
</p></div>
<p>  </p>
<p> <a href="#b-10"></a></p>
<div id="b-10" class="b-10">
<div class="container">
<div class="b-10-text-01">
Хотите получить качественное обслуживание, <br/>
при этом сэкономить? Так бывает!
</div>
<div class="b-10-discount">
<div class="b-10-text-02">Скидка &#8212; 25%</div>
<div class="b-10-text-03">
на слесарный ремонт или ТО. <br/>
Скидку можно использовать сразу же!
</div>
<div class="b-10-text-04">До конца акции осталось:</div>
<div id="countdown-01" class="countdown"></div>
<div class="countdown-note">
<div class="countdown-item">Дней</div>
<div class="countdown-item">Часов</div>
<div class="countdown-item">Минут</div>
<div class="countdown-item">Секунд</div>
</p></div>
<div class="btn-wrapper">
<style></style><style>.nform{behavior:url('http://mitsubishi.e-art.bz/wp-content/plugins/eartforms/libraries/pie/PIE.htc');}</style><input type='hidden' class='form_un' value='39039'><a data-target='#fc-fc39039_5' data-toggle='fcmodal' class='fc-btn' style='color: #fff; background-color: #48e'>Получить скидку</a>
<div class='fcmodal fcfade fc-form-modal fc-common' id='fc-fc39039_5' tabindex='-1' role='dialog' aria-hidden='true'>
<div class='fcmodal-dialog' style='width: 440px;'>
<div class='fcmodal-content'>
<div class='fcclose'>×</div>
<div class='fcmodal-body' style='padding: 0px !important'>
<input type='hidden' id='emails_fc39039' value=''>
<form id="fc39039_5" class="a_1235 nform no_submit_hidden no_save_form placeholder noframe ltr none spin check_conflict allow_multi one  block_label star_true vertical fc-common" style="width: 700px; font-family: 'Helvetica Neue', Arial;"><input type="hidden" class="form_id ng-pristine ng-valid" val="5" ng-model="con[0].form_main_id"><input type="hidden" class="getlocation" val="" name="location_hidden__0_0_1000_" value="http://mitsubishi.e-art.bz/wp-admin/admin.php?page=eartforms_admin&amp;id=5"><a id="anchor_18801_anchor"></a><a href="#anchor_18801_anchor" class="anchor_trigger"></a><div id="fe_title" class="nform_li form_title none" ng-style="{fontSize: con[0].ft_px+&quot;px&quot;, borderTopLeftRadius: con[0].fr+&quot;px&quot;, MozBorderTopLeftRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopLeftRadius: con[0].fr+&quot;px&quot;, borderTopRightRadius: con[0].fr+&quot;px&quot;, MozBorderTopRightRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopRightRadius: con[0].fr+&quot;px&quot;, color: con[0].ft_co, backgroundColor: con[0].ft_bg, fontFamily: con[0].tfamily, fontWeight: con[0].tbold, backgroundImage: con[0].bg_image, textAlign: con[0].ftalign}" style="font-size: 32px; font-weight: normal; text-align: left;"></div><ul class="form_ul none" id="form_ul" style="height: auto; opacity: 1; border-top-width: 0px;"> <li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_0_1235" class="nform_li ng-scope inline1 left fe_0 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}" style="margin-bottom: 20px; margin-top: 20px;"><input type="hidden" class="name_holder ng-scope" value=""><span class="custom-text ng-scope" ng-style="{ paddingTop: el.divspa_in, paddingBottom: el.divspa_in, fontSize: el.divfs, color: el.divfc, fontFamily: el.family, background: el.custom_bg_color }" compile="el.customText" style="display: block; position: relative; white-space: pre-line; line-height: 1.2; padding-left: 6px; padding-right: 6px; font-size: 14px; color: rgb(102, 102, 102);"><h4 class="ng-scope"><strong>ЗАПОЛНИТЕ ФОРМУ,</strong>
и мы обязательно свяжемся с Вами</h4></span><input type="hidden" name="_custom__0_0_99999999_field0_" class="field_class text_hidden_class ng-scope" value="" do_what="[]"></div><span class="element_id ng-binding">0</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_1_1235" class="nform_li ng-scope inline1 left fe_1 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите имя"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите имя<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">full name</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите имя" id="name" name="name" class="field_class" style="width: 100%; font-size: 14px;"><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="eartforms-help-circled"></i></span></span><span class="field1 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">1</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_2_1235" class="nform_li ng-scope inline1 left fe_2 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите телефон"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите телефон<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">+7 (code) number</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите телефон" name="tel" class="field_class phonenum" style="width: 100%; font-size: 14px;" required><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="formcraft-help-circled"></i></span></span><span class="field2 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">2</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_3_1235" class="nform_li ng-scope inline1 left fe_3 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Получить скидку"><button type="submit" class="submit_button nform_btn boots" style="font-size: 15px; height: 37px; width: 100%; border-radius: 4px; font-weight: normal; color: rgb(0, 0, 0); background-color: rgb(249, 192, 4);">Получить скидку</button></div><span class="element_id ng-binding">3</span></li></ul><input type="hidden" class="getreferal" value="нет" name="AFFILIAT_hidden__0_0_1000_"></form>
</div>
</div>
</div>
</div>
</div>
</p></div>
</p></div>
</p></div>
<p>  </p>
<p> <a href="#b-11"></a></p>
<div id="b-11" class="b-11">
<div class="container">
<div class="b-11-text-01">7 шагов к блестящему результату</div>
<div class="row row-01">
<div class="col-sm-6 col-md-3">
<div class="b-11-text-02">1</div>
<div class="b-11-text-03">
<strong>Оставьте заявку:</strong> <br/>
выясним потребности, определим предварительную стоимость ТО/ремонта, согласуем время визита
</div>
</p></div>
<div class="col-sm-6 col-md-3">
<div class="b-11-text-02">2</div>
<div class="b-11-text-03">
<strong>Приемка</strong> <br/>
(включает в себя круговой осмотр) + мойка
</div>
</p></div>
<div class="col-sm-6 col-md-3">
<div class="b-11-text-02">3</div>
<div class="b-11-text-03">
<span>Заказ-наряд</span>, определение дополнительных потребностей, работ, запчастей. Оценка стоимости, согласование с клиентом.
</div>
</p></div>
<div class="col-sm-6 col-md-3">
<div class="b-11-text-02">4</div>
<div class="b-11-text-03">
Контроль хода выполнения работ и установки необходимых запчастей.<br/>
<strong>100%-е соответствие заказу</strong>
</div>
</p></div>
</p></div>
<div class="row row-02">
<div class="col-sm-6 col-md-3">
<div class="b-11-text-02">5</div>
<div class="b-11-text-03">
<strong>Контроль качества</strong> <br/>
согласно листу контроля качества. <br/>
Гарантия надежности и соответствия стандартам
</div>
</p></div>
<div class="col-sm-6 col-md-3">
<div class="b-11-text-02">6</div>
<div class="b-11-text-03">
<strong>Выдача автомобиля <br/>
точно в срок.</strong> <br/>
Демонстрация устранения неисправностей, замененных деталей.
</div>
</p></div>
<div class="col-sm-6 col-md-3">
<div class="b-11-text-02">7</div>
<div class="b-11-text-03">
Будем признательны за оценку работы наших специалистов,<br/>
отзывы о степени удовлетворенности.<br/>
<strong>Мы станем еще лучше для Вас!</strong>
</div>
</p></div>
<div class="col-sm-6 col-md-3">
<div class="b-11-text-02 arrow-down">8</div>
<div class="b-11-text-03">
<strong>Удобные формы оплаты:</strong> <br/>
наличный и безналичный расчет.</p>
<div class="btn-wrapper wow wobble">
<style></style><style>.nform{behavior:url('http://mitsubishi.e-art.bz/wp-content/plugins/eartforms/libraries/pie/PIE.htc');}</style><input type='hidden' class='form_un' value='13508'><a data-target='#fc-fc13508_6' data-toggle='fcmodal' class='fc-btn' style='color: #fff; background-color: #48e'>Оставить заявку</a>
<div class='fcmodal fcfade fc-form-modal fc-common' id='fc-fc13508_6' tabindex='-1' role='dialog' aria-hidden='true'>
<div class='fcmodal-dialog' style='width: 440px;'>
<div class='fcmodal-content'>
<div class='fcclose'>×</div>
<div class='fcmodal-body' style='padding: 0px !important'>
<input type='hidden' id='emails_fc13508' value=''>
<form id="fc13508_6" class="a_1236 nform no_submit_hidden no_save_form placeholder noframe ltr none spin check_conflict allow_multi one  block_label star_true vertical fc-common" style="width: 700px; font-family: 'Helvetica Neue', Arial;"><input type="hidden" class="form_id ng-pristine ng-valid" val="6" ng-model="con[0].form_main_id"><input type="hidden" class="getlocation" val="" name="location_hidden__0_0_1000_" value="http://mitsubishi.e-art.bz/wp-admin/admin.php?page=eartforms_admin&amp;id=6"><a id="anchor_10814_anchor"></a><a href="#anchor_10814_anchor" class="anchor_trigger"></a><div id="fe_title" class="nform_li form_title none" ng-style="{fontSize: con[0].ft_px+&quot;px&quot;, borderTopLeftRadius: con[0].fr+&quot;px&quot;, MozBorderTopLeftRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopLeftRadius: con[0].fr+&quot;px&quot;, borderTopRightRadius: con[0].fr+&quot;px&quot;, MozBorderTopRightRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopRightRadius: con[0].fr+&quot;px&quot;, color: con[0].ft_co, backgroundColor: con[0].ft_bg, fontFamily: con[0].tfamily, fontWeight: con[0].tbold, backgroundImage: con[0].bg_image, textAlign: con[0].ftalign}" style="font-size: 32px; font-weight: normal; text-align: left;"></div><ul class="form_ul none" id="form_ul" style="height: auto; opacity: 1; border-top-width: 0px;"> <li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_0_1236" class="nform_li ng-scope inline1 left fe_0 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}" style="margin-bottom: 20px; margin-top: 20px;"><input type="hidden" class="name_holder ng-scope" value=""><span class="custom-text ng-scope" ng-style="{ paddingTop: el.divspa_in, paddingBottom: el.divspa_in, fontSize: el.divfs, color: el.divfc, fontFamily: el.family, background: el.custom_bg_color }" compile="el.customText" style="display: block; position: relative; white-space: pre-line; line-height: 1.2; padding-left: 6px; padding-right: 6px; font-size: 14px; color: rgb(102, 102, 102);"><h4 class="ng-scope"><strong>ЗАПОЛНИТЕ ФОРМУ,</strong>
и мы обязательно свяжемся с Вами</h4></span><input type="hidden" name="_custom__0_0_99999999_field0_" class="field_class text_hidden_class ng-scope" value="" do_what="[]"></div><span class="element_id ng-binding">0</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_1_1236" class="nform_li ng-scope inline1 left fe_1 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите имя"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите имя<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">full name</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите имя" id="name" name="name" class="field_class" style="width: 100%; font-size: 14px;"><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="eartforms-help-circled"></i></span></span><span class="field1 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">1</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_2_1236" class="nform_li ng-scope inline1 left fe_2 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите телефон"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите телефон<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">+7 (code) number</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите телефон" name="tel" class="field_class phonenum" style="width: 100%; font-size: 14px;" required><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="formcraft-help-circled"></i></span></span><span class="field2 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">2</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_3_1236" class="nform_li ng-scope inline1 left fe_3 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Оставить заявку"><button type="submit" class="submit_button nform_btn boots" style="font-size: 15px; height: 37px; width: 100%; border-radius: 4px; font-weight: normal; color: rgb(0, 0, 0); background-color: rgb(249, 192, 4);">Оставить заявку</button></div><span class="element_id ng-binding">3</span></li></ul><input type="hidden" class="getreferal" value="нет" name="AFFILIAT_hidden__0_0_1000_"></form>
</div>
</div>
</div>
</div>
</div>
</p></div>
</p></div>
</p></div>
</p></div>
</p></div>
<p>  </p>
<p> <a href="#b-12"></a></p>
<div id="b-12" class="b-12">
<div class="container">
<div class="b-12-text-01">
Предлагаем кузовной ремонт по Вашей цене!
</div>
<div class="b-12-text-02">
Только до 31 декабря 2014 года
</div>
<div class="row row-01">
<div class="col-sm-3 b-12-cell b-12-cell-01 wow flipInY">
Ваша машина попала в ДТП, <br/>
и вы не знаете, что делать?
</div>
<div class="col-sm-3 b-12-cell b-12-cell-02 wow flipInY">
Оцените самостоятельно <br/>
стоимость ремонта
</div>
<div class="col-sm-3 b-12-cell b-12-cell-03 wow flipInY">
Просто оставьте свою <br/>
заявку ниже
</div>
<div class="col-sm-3 b-12-cell b-12-cell-04 wow flipInY">
Приезжайте ремонтировать <br/>
Ваш автомобиль
</div>
</p></div>
<div class="b-12-text-03">
Наши специалисты предложат несколько вариантов ремонта <br/>
в зависимости от суммы, которую Вы готовы потратить.
</div>
<div class="btn-wrapper">
<style></style><style>.nform{behavior:url('http://mitsubishi.e-art.bz/wp-content/plugins/eartforms/libraries/pie/PIE.htc');}</style><input type='hidden' class='form_un' value='20350'><a data-target='#fc-fc20350_7' data-toggle='fcmodal' class='fc-btn' style='color: #fff; background-color: #48e'>Оставить заявку на консультацию</a>
<div class='fcmodal fcfade fc-form-modal fc-common' id='fc-fc20350_7' tabindex='-1' role='dialog' aria-hidden='true'>
<div class='fcmodal-dialog' style='width: 440px;'>
<div class='fcmodal-content'>
<div class='fcclose'>×</div>
<div class='fcmodal-body' style='padding: 0px !important'>
<input type='hidden' id='emails_fc20350' value=''>
<form id="fc20350_7" class="a_1237 nform no_submit_hidden no_save_form placeholder noframe ltr none spin check_conflict allow_multi one  block_label star_true vertical fc-common" style="width: 700px; font-family: 'Helvetica Neue', Arial;"><input type="hidden" class="form_id ng-pristine ng-valid" val="7" ng-model="con[0].form_main_id"><input type="hidden" class="getlocation" val="" name="location_hidden__0_0_1000_" value="http://mitsubishi.e-art.bz/wp-admin/admin.php?page=eartforms_admin&amp;id=7"><a id="anchor_21112_anchor"></a><a href="#anchor_21112_anchor" class="anchor_trigger"></a><div id="fe_title" class="nform_li form_title none" ng-style="{fontSize: con[0].ft_px+&quot;px&quot;, borderTopLeftRadius: con[0].fr+&quot;px&quot;, MozBorderTopLeftRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopLeftRadius: con[0].fr+&quot;px&quot;, borderTopRightRadius: con[0].fr+&quot;px&quot;, MozBorderTopRightRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopRightRadius: con[0].fr+&quot;px&quot;, color: con[0].ft_co, backgroundColor: con[0].ft_bg, fontFamily: con[0].tfamily, fontWeight: con[0].tbold, backgroundImage: con[0].bg_image, textAlign: con[0].ftalign}" style="font-size: 32px; font-weight: normal; text-align: left;"></div><ul class="form_ul none" id="form_ul" style="height: auto; opacity: 1; border-top-width: 0px;"> <li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_0_1237" class="nform_li ng-scope inline1 left fe_0 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}" style="margin-bottom: 20px; margin-top: 20px;"><input type="hidden" class="name_holder ng-scope" value=""><span class="custom-text ng-scope" ng-style="{ paddingTop: el.divspa_in, paddingBottom: el.divspa_in, fontSize: el.divfs, color: el.divfc, fontFamily: el.family, background: el.custom_bg_color }" compile="el.customText" style="display: block; position: relative; white-space: pre-line; line-height: 1.2; padding-left: 6px; padding-right: 6px; font-size: 14px; color: rgb(102, 102, 102);"><h4 class="ng-scope"><strong>ЗАПОЛНИТЕ ФОРМУ,</strong>
и мы обязательно свяжемся с Вами</h4></span><input type="hidden" name="_custom__0_0_99999999_field0_" class="field_class text_hidden_class ng-scope" value="" do_what="[]"></div><span class="element_id ng-binding">0</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_1_1237" class="nform_li ng-scope inline1 left fe_1 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите имя"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите имя<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">full name</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите имя" id="name" name="name" class="field_class" style="width: 100%; font-size: 14px;"><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="eartforms-help-circled"></i></span></span><span class="field1 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">1</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_2_1237" class="nform_li ng-scope inline1 left fe_2 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите телефон"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите телефон<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">+7 (code) number</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите телефон" name="tel" class="field_class phonenum" style="width: 100%; font-size: 14px;" required><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="formcraft-help-circled"></i></span></span><span class="field2 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">2</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_3_1237" class="nform_li ng-scope inline1 left fe_3 required-0 nform_li_before" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Оставить заявку на консультацию"><button type="submit" class="submit_button nform_btn boots" style="font-size: 15px; height: 37px; width: 100%; border-radius: 4px; font-weight: normal; color: rgb(0, 0, 0); background-color: rgb(249, 192, 4);">Оставить заявку на консультацию</button></div><span class="element_id ng-binding">3</span></li></ul><input type="hidden" class="getreferal" value="нет" name="AFFILIAT_hidden__0_0_1000_"></form>
</div>
</div>
</div>
</div>
</div>
</p></div>
</p></div>
<p>  </p>
<p> <a href="#b-13"></a></p>
<div id="b-13" class="b-13">
<div class="b-13-text-01" style="color: #133439!important;">Ремонт авто – дело тонкое</div>
<div class="b-13-text-02">
Ищете профессионалов, которые идеально выполнят любые кузовные работы? <br/>
Мелкая царапина, сколы, вмятины или серьезные повреждения после ДТП?
</div>
<div class="b-13-text-03">Срочно нужен ремонт и покраска?</div>
<div class="container b-13-container">
<div id="car-images-02" class="b-13-car-wrapper">
<div class="b-13-roof-wrapper">
<img class="b-13-roof img-responsive" src="img/car-07.png" alt="Машина">
</div>
<p> <img class="b-13-car-full img-responsive active" src="img/car-09.png" alt="Машина"><br/>
<img class="b-13-car-item img-responsive" src="img/car-10.png" alt="Машина" data-part="parts-02-00"><br/>
<img class="b-13-car-item img-responsive active" src="img/car-11.png" alt="Машина" data-part="parts-02-01"><br/>
<img class="b-13-car-item img-responsive" src="img/car-12.png" alt="Машина" data-part="parts-02-02"><br/>
<img class="b-13-car-item img-responsive" src="img/car-13.png" alt="Машина" data-part="parts-02-03"><br/>
<img class="b-13-car-item img-responsive" src="img/car-14.png" alt="Машина" data-part="parts-02-04"><br/>
<img class="b-13-car-item img-responsive" src="img/car-14.png" alt="Машина" data-part="parts-02-09"><br/>
<img class="b-13-car-item img-responsive" src="img/car-15.png" alt="Машина" data-part="parts-02-05"><br/>
<img class="b-13-car-item img-responsive" src="img/car-16.png" alt="Машина" data-part="parts-02-06"><br/>
<img class="b-13-car-item img-responsive" src="img/car-17.png" alt="Машина" data-part="parts-02-07"><br/>
<img class="b-13-car-item img-responsive" src="img/car-18.png" alt="Машина" data-part="parts-02-08"><br/>
<img class="b-13-car-item img-responsive" src="img/car-18.png" alt="Машина" data-part="parts-02-10">
</div>
</p></div>
<div class="b-13-polygons"></div>
<div class="container parts-list">
<div class="row row-01">
<div class="col-sm-4">
<ul class="b-13-parts list-unstyled">
<li class="b-13-parts-item" data-part="parts-02-00">Капот <span>6040 р.</span></li>
<li class="b-13-parts-item active" data-part="parts-02-01">Бамперы <span>5160 р.</span></li>
<li class="b-13-parts-item" data-part="parts-02-02">Крыло переднее <span>4570 р.</span></li>
<li class="b-13-parts-item" data-part="parts-02-03">Дверь передняя <span>5755 р.</span></li>
<li class="b-13-parts-item" data-part="parts-02-09">Крышка багажника <span>5245 р.</span></li>
<li class="b-13-parts-item" data-part="parts-02-04">Дверь багажника <span>6435 р.</span></li>
</ul></div>
<div class="col-sm-4 b-13-icon-01"></div>
<div class="col-sm-4">
<ul class="b-13-parts list-unstyled">
<li class="b-13-parts-item" data-part="roof">Панель крыши <span>8365 р.</span></li>
<li class="b-13-parts-item" data-part="parts-02-10">Накладка порога <span>2750 р.</span></li>
<li class="b-13-parts-item" data-part="parts-02-05">Крыло заднее <span>5415 р.</span></li>
<li class="b-13-parts-item" data-part="parts-02-06">Дверь задняя <span>5755 р.</span></li>
<li class="b-13-parts-item" data-part="parts-02-07">Зеркало заднего вида <span>1820 р.</span></li>
<li class="b-13-parts-item" data-part="parts-02-08">Порог кузова <span>4820 р.</span></li>
</ul></div>
</p></div>
</p></div>
<div class="b-13-text-04">
В стоимость включены разборка и сборка съемных деталей автомобиля <br/>
и расходные материалы для покраски деталей и кузова.
</div>
</p></div>
<p>  </p>
<p> <a href="#b-14"></a></p>
<div id="b-14" class="b-14">
<div class="container">
<div class="b-14-text-01">
Наше специальное предложение для автовладельцев:
</div>
<div class="b-14-discount">
<div class="b-14-text-02">Скидка &#8212; 25%</div>
<div class="b-14-text-03">
на оригинальные запасные части и смазочные материалы, <br/>
а также на работы по их замене для авто возраста 3+
</div>
<div class="b-14-text-04">До конца акции осталось:</div>
<div id="countdown-02" class="countdown"></div>
<div class="countdown-note">
<div class="countdown-item">Дней</div>
<div class="countdown-item">Часов</div>
<div class="countdown-item">Минут</div>
<div class="countdown-item">Секунд</div>
</p></div>
</p></div>
<div class="btn-wrapper">
<style></style><style>.nform{behavior:url('http://mitsubishi.e-art.bz/wp-content/plugins/eartforms/libraries/pie/PIE.htc');}</style><input type='hidden' class='form_un' value='14030'><a data-target='#fc-fc14030_6' data-toggle='fcmodal' class='fc-btn' style='color: #fff; background-color: #48e'>Получить скидку</a>
<div class='fcmodal fcfade fc-form-modal fc-common' id='fc-fc14030_6' tabindex='-1' role='dialog' aria-hidden='true'>
<div class='fcmodal-dialog' style='width: 440px;'>
<div class='fcmodal-content'>
<div class='fcclose'>×</div>
<div class='fcmodal-body' style='padding: 0px !important'>
<input type='hidden' id='emails_fc14030' value=''>
<form id="fc14030_6" class="a_1236 nform no_submit_hidden no_save_form placeholder noframe ltr none spin check_conflict allow_multi one  block_label star_true vertical fc-common" style="width: 700px; font-family: 'Helvetica Neue', Arial;"><input type="hidden" class="form_id ng-pristine ng-valid" val="6" ng-model="con[0].form_main_id"><input type="hidden" class="getlocation" val="" name="location_hidden__0_0_1000_" value="http://mitsubishi.e-art.bz/wp-admin/admin.php?page=eartforms_admin&amp;id=6"><a id="anchor_10814_anchor"></a><a href="#anchor_10814_anchor" class="anchor_trigger"></a><div id="fe_title" class="nform_li form_title none" ng-style="{fontSize: con[0].ft_px+&quot;px&quot;, borderTopLeftRadius: con[0].fr+&quot;px&quot;, MozBorderTopLeftRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopLeftRadius: con[0].fr+&quot;px&quot;, borderTopRightRadius: con[0].fr+&quot;px&quot;, MozBorderTopRightRadius: con[0].fr+&quot;px&quot;, WebkitBorderTopRightRadius: con[0].fr+&quot;px&quot;, color: con[0].ft_co, backgroundColor: con[0].ft_bg, fontFamily: con[0].tfamily, fontWeight: con[0].tbold, backgroundImage: con[0].bg_image, textAlign: con[0].ftalign}" style="font-size: 32px; font-weight: normal; text-align: left;"></div><ul class="form_ul none" id="form_ul" style="height: auto; opacity: 1; border-top-width: 0px;"> <li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_0_1236" class="nform_li ng-scope inline1 left fe_0 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}" style="margin-bottom: 20px; margin-top: 20px;"><input type="hidden" class="name_holder ng-scope" value=""><span class="custom-text ng-scope" ng-style="{ paddingTop: el.divspa_in, paddingBottom: el.divspa_in, fontSize: el.divfs, color: el.divfc, fontFamily: el.family, background: el.custom_bg_color }" compile="el.customText" style="display: block; position: relative; white-space: pre-line; line-height: 1.2; padding-left: 6px; padding-right: 6px; font-size: 14px; color: rgb(102, 102, 102);"><h4 class="ng-scope"><strong>ЗАПОЛНИТЕ ФОРМУ,</strong>
и мы обязательно свяжемся с Вами</h4></span><input type="hidden" name="_custom__0_0_99999999_field0_" class="field_class text_hidden_class ng-scope" value="" do_what="[]"></div><span class="element_id ng-binding">0</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_1_1236" class="nform_li ng-scope inline1 left fe_1 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите имя"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите имя<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">full name</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите имя" id="name" name="name" class="field_class" style="width: 100%; font-size: 14px;"><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="eartforms-help-circled"></i></span></span><span class="field1 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">1</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_2_1236" class="nform_li ng-scope inline1 left fe_2 required-1" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Введите телефон"><span class="cap_cover cap_width"><span class="cap1 subl" ng-style="{ fontSize: con[0].lfs, color: con[0].lfc}" style="font-size: 11px;">Введите телефон<span class="show_1">*</span></span><span class="cap2 subl" ng-bind="el.cap2" ng-style="{ fontSize: con[0].slfs, color: con[0].slfc }" style="font-size: 11px;">+7 (code) number</span></span><span class="input_cover text_cover ng-scope"><input type="text" placeholder="Введите телефон" name="tel" class="field_class phonenum" style="width: 100%; font-size: 14px;" required><span class="q_cover" style="display: none;"><span class="inst ttip" ng-style="{ fontSize: con[0].ifs, color: con[0].lfc }" data-original-title="" style="position: absolute;"><i class="formcraft-help-circled"></i></span></span><span class="field2 valid_show" style="display: none;"></span></span></div><span class="element_id ng-binding">2</span></li><li ng-repeat="el in build" ng-style="{paddingBottom: con[0].space+&quot;px&quot;, paddingTop: con[0].space+&quot;px&quot;}" id="fe_3_1236" class="nform_li ng-scope inline1 left fe_3 required-0" ng-class="[el.default, el.inline, con[0].field_align, el.li_class, &quot;fe_&quot;+$index, &quot;required-&quot;+el.req]" scale="" style="padding-bottom: 5px; padding-top: 5px;"><div compile="el.el_f" ng-style="{marginBottom: el.divspa, marginTop: el.divspa}"><input type="hidden" class="name_holder ng-scope" value="Оставить заявку"><button type="submit" class="submit_button nform_btn boots" style="font-size: 15px; height: 37px; width: 100%; border-radius: 4px; font-weight: normal; color: rgb(0, 0, 0); background-color: rgb(249, 192, 4);">Оставить заявку</button></div><span class="element_id ng-binding">3</span></li></ul><input type="hidden" class="getreferal" value="нет" name="AFFILIAT_hidden__0_0_1000_"></form>
</div>
</div>
</div>
</div>
</div>
</p></div>
</p></div>
<p>  </p>
<p> <a href="#b-15"></a></p>
<div id="b-15" class="b-15">
<div class="container" name='otzivi' id='otzivi'>
<div class="b-15-text-01">
Отзывы наших клиентов:
</div>
<div class="row row-01">
<div class="col-sm-4">
<img src="img/b-15-01.jpg" alt="Отзыв"></p>
<div class="b-15-text-02">Артем</div>
<div class="b-15-text-03">KIA</div>
<div class="b-15-text-04">
Ребята помогли привести кузов в нормальное состояние после ДТП: пострадали двери и крыло. Предложили разные варианты по ценам, подсказали, на чем можно сэкономить. Запчасти почти все были в наличии. Недостающую мелочевку в течение суток привезли. За несколько дней все сделали.
</div>
</p></div>
<div class="col-sm-4">
<img src="img/b-15-02.jpg" alt="Отзыв"></p>
<div class="b-15-text-02">Сергей</div>
<div class="b-15-text-03">Mitsubishi Lancer X</div>
<div class="b-15-text-04">
У меня Mitsubishi десятка. Решил проверить, намного ли дешевле обслуживание у неофициалов. Не буду называть, на какое СТО поехал на диагностику, но там мне сказали, что пора менять рулевую тягу, а заменить ее надо узлом вместе с рулевой рейкой. Цена, мягко говоря, улет. Сказали, что никаких проблем с рулевой тягой нет. А на том СТО просто хотели «развести» на деньги. Рекомендую «Автостарт», уверен в порядочности.
</div>
</p></div>
<div class="col-sm-4">
<img src="img/b-15-03.jpg" alt="Отзыв"></p>
<div class="b-15-text-02">Александр</div>
<div class="b-15-text-03">Hyundai</div>
<div class="b-15-text-04">
Пришло время избавиться от крупных сколов на капоте и царапин на бампере. Думал, что скажут все перекрашивать. Озвучили цены. Меня устроило. Оставил машину. Все царапины на бампере вообще незаметно убрали, отполировали, не перекрашивая его. Краску для капота подобрали идеально. Доволен.
</div>
</p></div>
</p></div>
</p></div>
</p></div>
<p>  </p>
<p> <a href="#b-16" name='ibottom' id='ibottom'></a></p>
<div id="b-16" class="b-16">

<div class="b-16-text-02" name='icont' id='icont'>Контакты:</div>
<div class="b-16-text-03" name='maps' id='maps'>
Будем рады произвести качественный ремонт или покраску.<br/>
Добро пожаловать!
</div>
</p></div>
<p>  </p>
<p> <a href="#b-17"></a></p>
<div id="b-17" class="b-17">
<script type="text/javascript" charset="utf-8" src="http://api-maps.yandex.ru/services/constructor/1.0/js/?sid=constructor%3AjadeDCKbsHDsQLezytjwGawIzxw2dpI9"></script>
</div>
<p>  </p>
<p> <a href="#b-18"></a></p>
<div id="b-18" class="b-18" align="center">
<div class="container" align="center">
<div class="row" align="center" style='padding-top: 30px; padding-bottom: 30px; vertical-align: middle!important;'>

<div class="col-sm-12 col-md-12 col-lg-6">

<div class="col-sm-6 col-md-6">
<a class='scrollto' href='#top'><img class="logo-niz" style='margin-left: 0px!important; padding-right: 0px;' src='img/logo2.png' align='center' /></a>
</div>


  <div class="col-sm-6 col-md-6">
<div class="niz-tel" style='padding-top: 0px; margin-top: 0px;' align="center">+7 (912) 884-60-22</div>
  </div>

</div>

<div class="col-sm-12 col-md-12 col-lg-6">

  <div class="col-sm-6 col-md-6 niz-text">
г.Пермь, ул. Карпинского, к. 7
  </div>

  <div class="col-sm-6 col-md-6 copyright-block">
<a href="http://cludio.ru" target="_blank">
Разработка и продвижение
<br>
<img class="copyright-niz" src="img/copyright2.png" width="120px">
</a>
  </div>

</div>





</div>
</div>










<script type='text/javascript'>
/* <![CDATA[ */
var EartFormJS = {"ajaxurl":"http:\/\/avto-v-remont.cludo.ru\/response.php"};

/* ]]> */
</script>










</body>
</html>



