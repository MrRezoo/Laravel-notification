<!DOCTYPE html>
<html lang="en" dir="rtl">

@include('layouts.head')
<link rel="stylesheet" type="text/css" href='{{asset("/assets/css/owlcarousel.css")}}'>
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
@include('layouts.header')
<!-- vertical menu start-->
@include('layouts.vertical_menu')
<!-- vertical menu ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Right sidebar Start-->

    <!-- Right sidebar Ends-->
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

                    <!-- Bookmark Ends-->
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
        @yield('Portfolio')
        <!-- Container-fluid Ends-->

        </div>
        @include('layouts.footer')
    </div>
</div>

<!-- js-->
@include('layouts.js')
<script src='{{asset("/assets/js/owlcarousel/owl.carousel.js")}}'></script>
<script src='{{asset("/assets/js/owlcarousel/owl-custom.js")}}'></script>
</body>

</html>
