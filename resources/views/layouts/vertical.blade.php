<!DOCTYPE html>
<html lang="en" dir="rtl">

@include('front.head')
<link rel="stylesheet" type="text/css" href='{{url("/panel/assets/css/owlcarousel.css")}}'>
<body main-theme-layout="rtl">
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="whirly-loader"></div>
    </div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper vertical">
@include('front.header')
<!-- vertical menu start-->
@include('front.vertical_menu')
<!-- vertical menu ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Right sidebar Start-->
    @include('panel.rslidebar')
    <!-- Right sidebar Ends-->
        @include('panel.messages')
        <div class="page-body vertical-menu-mt">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            @yield('breadcrumb')
                            <div class="page-header-left">
                                <h3>منوی عمودی</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">گزینههای منو</li>
                                    <li class="breadcrumb-item active">منوی عمودی</li>
                                </ol>
                            </div>
                        </div>
                        <!-- Bookmark Start-->
                    @include('panel.bookmarkStart')
                    <!-- Bookmark Ends-->
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    @include('front.slider')
                    @include('front.descriptCard')
                    @include('front.tashakolha')
                    @include('front.article')
                    @include('front.toturial')
                    @include('front.contactUs')

                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
        @include('front.footer')
    </div>
</div>

<!-- js-->
@include('front.js')
<script src='{{url("/panel/assets/js/owlcarousel/owl.carousel.js")}}'></script>
<script src='{{url("/panel/assets/js/owlcarousel/owl-custom.js")}}'></script>
</body>

</html>
