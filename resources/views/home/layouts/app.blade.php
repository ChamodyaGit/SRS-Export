<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="To deliver the finest quality Ceylon cinnamon to global markets while promoting sustainable and ethical farming practices.">
    <title>SRS EXPORTS HOLDINGS</title>

    @include('home.libraries.styles')

</head>

<body>

    <!-- Start Header Area -->
    @include('home.components.header')
    <!-- end Header Area -->

    <!-- main wrapper start -->
    @yield('content')
    <!-- main wrapper end -->

    <!--== Start Footer Area Wrapper ==-->
    @include('home.components.footer')
    <!--== End Footer Area Wrapper ==-->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    @include('home.libraries.scripts')
</body>

</html>
