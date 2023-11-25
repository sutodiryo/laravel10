<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<head>
    <meta charset="utf-8" />

    <title>Metronic | Login Page - 3</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->


    <!--begin::Base Styles -->
    <link href="{{ asset('/') }}vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <!--RTL version:<link href="{{ asset('/') }}vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->


    <link href="{{ asset('/') }}demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--RTL version:<link href="{{ asset('/') }}demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->


    <!--end::Base Styles -->

    <link rel="shortcut icon" href="{{ asset('/') }}demo/default/media/img/logo/favicon.ico" />
</head>
<!-- end::Head -->


<!-- begin::Body -->

<body
    class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">


    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        {{ $slot }}
    </div>
    <!-- end:: Page -->

</body>
<!-- end::Body -->

</html>
