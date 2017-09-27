<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="js/assets/img/png" href="/js/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Landing Page - Material Kit by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-kit"/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="/js/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/js/assets/css/material-kit.css" rel="stylesheet"/>

</head>

<body class="landing-page">
<nav class="navbar navbar-fixed-top navbar-color-on-scroll navbar-transparent" style="height:60px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="http://www.creative-tim.com">
                <div class="logo-container">
                    <div class="logo">
                        <img src="/js/assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" title="" data-placement="bottom" data-html="true" data-original-title="<b>Material Kit</b> was Designed &amp; Coded with care by the staff from <b>Creative Tim</b>" style="width: 48px;height: 48px;border-radius: 24px;margin-top:-4px;">
                    </div>
                    {{--<a class="brand">
                        Creative Tim
                    </a>
--}}

                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="example-navbar-primary">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/artical" target="_blank">
                        <i class="material-icons">dashboard</i> 文章
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="scrollToDownload()">
                        <i class="material-icons">cloud_download</i> Download
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon" data-original-title="Follow us on Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon" data-original-title="Like us on Facebook">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-white btn-simple btn-just-icon" data-original-title="Follow us on Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a rel="tooltip" title="" data-placement="bottom" href="/LoginOut" target="_self" class="btn btn-white btn-simple btn-just-icon" data-original-title="LoginOut">
                        <i class="fa fa-sign-out"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="http://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="http://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; 2016, made with <i class="fa fa-heart heart"></i> by Creative Tim
        </div>
    </div>
</footer>

</body>

<!--   Core JS Files   -->
<script src="/js/assets/js/jquery.min.js"></script>

{{--<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>--}}

<script src="/js/assets/js/bootstrap.min.js"></script>



<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/js/assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="/js/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="js/assets/js/material.min.js"></script>
<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="/js/assets/js/material-kit.js" type="text/javascript"></script>

<script>
    $(window).scroll(function () {
        var clientH = parseInt(document.documentElement.clientHeight);
        var scrollT = parseInt($(document).scrollTop());
        if(clientH < scrollT+100)
            $('.navbar').removeClass('navbar-transparent');
        else
            $('.navbar').addClass('navbar-transparent');
    });
</script>
</html>