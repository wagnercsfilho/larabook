<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        Larabook
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="/assets/img/favicon.ico" />
    <link rel="icon" type="image/gif" href="/assets/img/favicon.gif">

    <!-- BEGIN STYLE CODES -->

    <link href="/assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/social-jquery-ui-1.10.0.custom.css" rel="stylesheet">
    <link href="/assets/css/social.css" rel="stylesheet">
    <link href="/assets/css/social.plugins.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.css" rel="stylesheet">
    <link href="/assets/css/social-coloredicons-buttons.css" rel="stylesheet">



    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="/templates/social/assets/css/social-jquery.ui.1.10.0.ie.css"/>
    <![endif]-->

    <!-- BEGIN STYLE CODE FOR THE CURRENT PAGE -->
    <!-- END STYLE CODE FOR THE CURRENT PAGE -->

    <link href="/assets/css/demo.css" rel="stylesheet">
    <link href="/assets/plugins/jquery.uipro/style.css" rel="stylesheet">
    <link href="/assets/plugins/jquery.simplecolorpicker/jquery.simplecolorpicker.css" rel="stylesheet">
    <link href="/assets/css/themes/social.theme-blue.css" rel="stylesheet" id="theme">
    <link href="/assets/css/twitter-bootstrap/bootstrap-responsive.css" rel="stylesheet">

    <!-- BEGIN STYLE CODE FOR THE CURRENT PAGE -->
    <link href="/assets/css/pages/facebook-timeline.css" rel="stylesheet">
    <!-- END STYLE CODE FOR THE CURRENT PAGE -->

    <link href="/css/main.css" rel="stylesheet">


    <style>
        .wraper #main{
            margin-top: 40px;
        }
    </style>
    <!-- END STYLE CODES -->
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="/templates/social/assets/plugins/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<!-- BEGIN WRAPER -->
<div class="wraper sidebar-full">
@if ($signedIn)
<!-- BEGIN SIDEBAR -->
@include('layouts/partials/sidebar')
@endif
<!-- END SIDEBAR -->
@include('layouts/partials/headers')
<!-- BEGIN MAIN CONTAINER -->
<div id="main">
<!-- BEGIN CONTENT CONTANER -->


<div class="container-fluid">
    @include('flash::message')

    @yield('content')
</div>


<!-- END CONTENT CONTAINER -->
<!-- BEGIN PAGE FOOTER -->
<footer id="footer">
    <div class="container-fluid">
        2013 © <em>Social - Premium Responsive Admin Template</em> by  <a href="http://cesarlab.com/" target="_blank">CesarLab.com</a>.
    </div>
</footer>
<!-- END PAGE FOOTER -->
</div>
<!-- END MAIN CONTAINER -->
</div>
<!-- END WRAPER -->

<!-- BEGIN SIDEBAR PANEL -->
<div style="display: none;">
    <ul class="rightPanel">
        <li>
            <a href="basic-user-profile.html">
                <i class="icon-user"></i><span>My Profile</span>
            </a>
        </li>
        <li>
            <a href="chat-inbox.html">
                <i class="icon-envelope"></i><span>Messages</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="icon-tasks"></i><span>Taks</span>
            </a>
        </li>
    </ul>
</div>
<!-- END SIDEBAR PANEL -->

<!-- BEGIN JAVASCRIPT CODES -->
<!-- BEGIN GENERAL JAVASCRIPT CODE -->
<script src="//../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>window.jQuery || document.write('<script src="/assets/plugins/jquery/jquery.min.js"><\/script>')</script>
<script src="/assets/plugins/jquery.ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="/assets/plugins/jquery.ui.touch-punch/jquery.ui.touch-punch.js"></script>
<script src="/assets/plugins/twitter-bootstrap/bootstrap.js"></script>

<script src="/assets/plugins/jquery.slimscroll/jquery.slimscroll.min.js"></script>
<script src="/assets/plugins/jquery.cookie/jquery.cookie.js"></script>
<script src="/assets/plugins/jquery.simplecolorpicker/jquery.simplecolorpicker.js"></script>

<script src="/assets/plugins/jquery.uipro/uipro.min.js"></script>

<script src="/assets/plugins/jquery.ui.chatbox/jquery.ui.chatbox.js"></script>

<script src="/assets/plugins/jquery.livefilter/jquery.liveFilter.js"></script>

<script src="/assets/js/chatboxManager.js"></script>

<script src="/assets/js/extents.js"></script>
<script src="/assets/js/app.js"></script>
<script src="/assets/js/demo-settings.js"></script>
<script src="/assets/js/sidebar.js"></script>



<script>
    /*<![CDATA[*/
    $(function() {
        App.init();
        DemoSettings.init({
            urlThemes: '/templates/social/assets/css/themes/social.theme-'
        });
        SideBar.init({
            shortenOnClickOutside: false
        });
    });
    /*]]>*/
</script>
<!-- END GENERAL JAVASCRIPT CODE -->

<script>
    $('#flash-overlay-modal').modal();

    $('.comments__create-form').on('keydown', function(e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            $(this).submit();
        }
    });
</script>

</body>


</html>