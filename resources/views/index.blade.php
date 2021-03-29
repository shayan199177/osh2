@extends('layouts.shop')

@push('styles')
    <link href="{!! asset('assets/libs/owl-carousel/owl.carousel.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/libs/css-zoom/xzoom.css') !!}" media="all" rel="stylesheet">
    <link href="{!! asset('assets/libs/js-zoom/fancybox/source/jquery.fancybox.css') !!}" media="all" rel="stylesheet">
    <script src="{!! asset('assets/libs/jssor.slider-28.1.0.min.js') !!}"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function () {

            var jssor_1_SlideoTransitions = [
                [{b: -1, d: 1, ls: 0.5}, {b: 0, d: 1000, y: 5, e: {y: 6}}],
                [{b: -1, d: 1, ls: 0.5}, {b: 200, d: 1000, y: 25, e: {y: 6}}],
                [{b: -1, d: 1, ls: 0.5}, {b: 400, d: 1000, y: 45, e: {y: 6}}],
                [{b: -1, d: 1, ls: 0.5}, {b: 600, d: 1000, y: 65, e: {y: 6}}],
                [{b: -1, d: 1, ls: 0.5}, {b: 800, d: 1000, y: 85, e: {y: 6}}],
                [{b: -1, d: 1, ls: 0.5}, {b: 500, d: 1000, y: 195, e: {y: 6}}],
                [{b: 0, d: 2000, y: 30, e: {y: 3}}],
                [{b: -1, d: 1, rY: -15, tZ: 100}, {b: 0, d: 1500, y: 30, o: 1, e: {y: 3}}],
                [{b: -1, d: 1, rY: -15, tZ: -100}, {b: 0, d: 1500, y: 100, o: 0.8, e: {y: 3}}],
                [{b: 500, d: 1500, o: 1}],
                [{b: 0, d: 1000, y: 380, e: {y: 6}}],
                [{b: 300, d: 1000, x: 80, e: {x: 6}}],
                [{b: 300, d: 1000, x: 330, e: {x: 6}}],
                [{b: -1, d: 1, r: -110, sX: 5, sY: 5}, {
                    b: 0,
                    d: 2000,
                    o: 1,
                    r: -20,
                    sX: 1,
                    sY: 1,
                    e: {o: 6, r: 6, sX: 6, sY: 6}
                }],
                [{b: 0, d: 600, x: 150, o: 0.5, e: {x: 6}}],
                [{b: 0, d: 600, x: 1140, o: 0.6, e: {x: 6}}],
                [{b: -1, d: 1, sX: 5, sY: 5}, {b: 600, d: 600, o: 1, sX: 1, sY: 1, e: {sX: 3, sY: 3}}]
            ];

            var jssor_1_options = {
                $AutoPlay: 1,
                $LazyLoading: 1,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$,
                    $SpacingX: 20,
                    $SpacingY: 20
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1600;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        .border-none {
            border: none !important;
        }

        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /*jssor slider bullet skin 132 css*/
        .jssorb132 {
            position: absolute;
        }

        .jssorb132 .i {
            position: absolute;
            cursor: pointer;
        }

        .jssorb132 .i .b {
            fill: #fff;
            fill-opacity: 0.8;
            stroke: #000;
            stroke-width: 1600;
            stroke-miterlimit: 10;
            stroke-opacity: 0.7;
        }

        .jssorb132 .i:hover .b {
            fill: #000;
            fill-opacity: .7;
            stroke: #fff;
            stroke-width: 2000;
            stroke-opacity: 0.8;
        }

        .jssorb132 .iav .b {
            fill: #000;
            stroke: #fff;
            stroke-width: 2400;
            fill-opacity: 0.8;
            stroke-opacity: 1;
        }

        .jssorb132 .i.idn {
            opacity: 0.3;
        }

        .jssora051 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora051 .a {
            fill: none;
            stroke: #fff;
            stroke-width: 360;
            stroke-miterlimit: 10;
        }

        .jssora051:hover {
            opacity: .8;
        }

        .jssora051.jssora051dn {
            opacity: .5;
        }

        .jssora051.jssora051ds {
            opacity: .3;
            pointer-events: none;
        }

        .item {
            position: relative;
        }

        .item__overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            transition: transform 300ms;
            transform: translate3d(0, 100%, 0);
        }

        .item__caption-title {
            transition: transform 300ms;
            transform: translate3d(0, -100%, 0);
        }

        .item__overlay a:hover ~ .item__overlay,
        .item__overlay a:focus ~ .item__overlay,
        .item__overlay a:hover ~ .item__overlay .item__caption-title,
        .item__overlay a:focus ~ .item__overlay .item__caption-title {
            transform: translate3d(0, 0, 0);
        }

        .item__body {
            opacity: 0;
            transition: opacity 500ms 100ms;
        }

        .item__overlay a:hover ~ .item__overlay .item__body,
        .item__overlay a:focus ~ .item__overlay .item__body {
            transform: translate3d(0, 0, 0);
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid bg-white">
        <div class="container pt-2 pt-sm-3">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner slider-box" role="listbox">
                    <div class="carousel-item active">
                        <a href="#">
                            <picture>
                                <source srcset="assets/images/sliders/2000D500-4.jpg" media="(min-width: 1400px)">
                                <source srcset="assets/images/sliders/1400D430-2.jpg" media="(min-width: 769px)">
                                <source srcset="assets/images/sliders/800D350-2.jpg" media="(min-width: 577px)">
                                <img srcset="assets/images/sliders/600D300.jpg" alt="responsive image"
                                     class="d-block img-fluid">
                            </picture>
                            {{--                            <div class="carousel-caption">--}}
                            {{--                                <div>--}}
                            {{--                                    <h2>Digital Craftsmanship</h2>--}}
                            {{--                                    <p>We meticously build each site to get results</p>--}}
                            {{--                                    <span class="btn btn-sm btn-outline-secondary">Learn More</span>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item">
                        <a href="#">
                            <picture>
                                <source srcset="assets/images/sliders/2000D500-4.jpg" media="(min-width: 1400px)">
                                <source srcset="assets/images/sliders/1400D430-2.jpg" media="(min-width: 769px)">
                                <source srcset="assets/images/sliders/800D350-2.jpg" media="(min-width: 577px)">
                                <img srcset="assets/images/sliders/600D300.jpg" alt="responsive image"
                                     class="d-block img-fluid">
                            </picture>
                            {{--                            <div class="carousel-caption justify-content-center align-items-center">--}}
                            {{--                                <div>--}}
                            {{--                                    <h2>Every project begins with a sketch</h2>--}}
                            {{--                                    <p>We work as an extension of your business to explore solutions</p>--}}
                            {{--                                    <span class="btn btn-sm btn-outline-secondary">Our Process</span>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item">
                        <a href="#">
                            <picture>
                                <source srcset="assets/images/sliders/2000D500-4.jpg" media="(min-width: 1400px)">
                                <source srcset="assets/images/sliders/1400D430-2.jpg" media="(min-width: 769px)">
                                <source srcset="assets/images/sliders/800D350-2.jpg" media="(min-width: 577px)">
                                <img srcset="assets/images/sliders/600D300.jpg" alt="responsive image"
                                     class="d-block img-fluid">
                            </picture>
                            {{--                            <div class="carousel-caption justify-content-center align-items-center">--}}
                            {{--                                <div>--}}
                            {{--                                    <h2>Performance Optimization</h2>--}}
                            {{--                                    <p>We monitor and optimize your site's long-term performance</p>--}}
                            {{--                                    <span class="btn btn-sm btn-secondary">Learn How</span>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                    <!-- /.carousel-item -->
                    <div class="carousel-item">
                        <a href="#">
                            <picture>
                                <source srcset="assets/images/sliders/2000D500-4.jpg" media="(min-width: 1400px)">
                                <source srcset="assets/images/sliders/1400D430-2.jpg" media="(min-width: 769px)">
                                <source srcset="assets/images/sliders/800D350-2.jpg" media="(min-width: 577px)">
                                <img srcset="assets/images/sliders/600D300.jpg" alt="responsive image"
                                     class="d-block img-fluid">
                            </picture>
                            {{--                            <div class="carousel-caption justify-content-center align-items-center">--}}
                            {{--                                <div>--}}
                            {{--                                    <h2>Every project begins with a sketch</h2>--}}
                            {{--                                    <p>We work as an extension of your business to explore solutions</p>--}}
                            {{--                                    <span class="btn btn-sm btn-outline-secondary">Our Process</span>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </a>
                    </div>
                    <!-- /.carousel-item -->
                </div>
                <!-- /.carousel-inner -->
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- /.carousel -->
        </div>
    </div>

    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row justify-content-around p-1 py-md-3">
                <div class="col-12 col-sm-6 col-lg-4 py-1 pt-sm-3 p-lg-3">
                    <div class="box-3">
                        <a href="#" class="border-10">
                            <img srcset="assets/images/sliders/box-top-cat.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 py-1 pt-sm-3 p-lg-3">
                    <div class="box-3">
                        <a href="#" class="border-10">
                            <img srcset="assets/images/sliders/box-top-off.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 py-1 pt-sm-3 p-lg-3">
                    <div class="box-3">
                        <a href="#" class="border-10 text-center">
                            <img srcset="assets/images/sliders/box-top-sefaresh-1.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10 mx-auto">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white my-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-6 py-2 py-md-1 col-lg-4 col-xl-4 text-center">
                    <a href="#"><img src="temp/index/dog-index.png" class="img-index img-index-c" alt="dog"></a>
                    <h5>سگ ها</h5>
                </div>
                <div class="col-6 py-2 py-md-1 col-lg-4 col-xl-4 text-center">
                    <a href="#"><img src="temp/index/cat-index.png" class="img-index img-index-c" alt="cat"></a>
                    <h5>گربه ها</h5>
                </div>
                <div class="col-6 py-2 py-md-1 col-lg-4 col-xl-4 text-center">
                    <a href="#"><img src="temp/index/fish-index.png" class="img-index img-index-c" alt="dog"></a>
                    <h5>آکواریوم</h5>
                </div>
                <div class="col-6 py-2 py-md-1 col-lg-4 col-xl-4 mt-xl-5 text-center">
                    <a href="#"><img src="temp/index/bird-index.png" class="img-index img-index-c" alt="cat"></a>
                    <h5>پرندگان</h5>
                </div>
                <div class="col-6 py-2 py-md-1 col-lg-4 col-xl-4 mt-xl-5 text-center">
                    <a href="#"><img src="temp/index/rabbit.png" class="img-index img-index-c" alt="dog"></a>
                    <h5>جوندگان و خزندگان</h5>
                </div>
            </div>
        </div>
    </div>


    <div class="w-100" style="height: 8px; background-color: #f1c40f;"></div>
    <div class="container-fluid bg-currentColor">
        <div class="container">
            <div class="col-12 pt-5">
                <div class="text-center">
                    <h6 class="h4 pb-2 w-color font-700">تخفیف های ویژه</h6>
                </div>
            </div>
            <div class="col-12 pb-4">
                <div class="owl-carousel slider-page-index">
                    <div class="px-1 py-3">
                        <div class="category-h240 zoom-items-pageItem border-none">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/fish/7.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235 pb-3">
                                <div class="carousel-item-title text-right px-3">
                                    <a href="#" class="text-decoration-none text-card">
                                        <h4>غذای خشک سگ نوتری</h4>
                                    </a>
                                </div>

                                <div class="text-left px-3 mb-3 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۴۵۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">۲۳٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">۲۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-1 py-3">
                        <div class="category-h240 zoom-items-pageItem border-none">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/fish/8.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235 pb-3">
                                <div class="carousel-item-title text-right px-3">
                                    <a href="#" class="text-decoration-none text-card">
                                        <h4>تانک آکواریوم با پایه چوبی</h4>
                                    </a>
                                </div>

                                <div class="text-left px-3 mb-3 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۵۵۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">۲۳٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">۲۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-1 py-3">
                        <div class="category-h240 zoom-items-pageItem border-none">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/dog/2.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235 pb-3">
                                <div class="carousel-item-title text-right px-3">
                                    <a href="#" class="text-decoration-none text-card">
                                        <h4>غذای خشک سگ نوتری</h4>
                                    </a>
                                </div>

                                <div class="text-left px-3 mb-3 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-1 py-3">
                        <div class="category-h240 zoom-items-pageItem border-none">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/dog/3.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235 pb-3">
                                <div class="carousel-item-title text-right px-3">
                                    <a href="#" class="text-decoration-none text-card">
                                        <h4>غذای خشک سگ نوتری</h4>
                                    </a>
                                </div>

                                <div class="text-left px-3 mb-3 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                    </div>
                                    <div>
                                        <span class="price-font">۷,۹۰۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-1 py-3">
                        <div class="category-h240 zoom-items-pageItem border-none">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/dog/4.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235 pb-3">
                                <div class="carousel-item-title text-right px-3">
                                    <a href="#" class="text-decoration-none text-card">
                                        <h4>غذای خشک سگ نوتری</h4>
                                    </a>
                                </div>

                                <div class="text-left px-3 mb-3 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-1 py-3">
                        <div class="category-h240 zoom-items-pageItem border-none">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235 pb-3">
                                <div class="carousel-item-title text-right px-3">
                                    <a href="#" class="text-decoration-none text-card">
                                        <h4>غذای خشک سگ نوتری</h4>
                                    </a>
                                </div>

                                <div class="text-left px-3 mb-3 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-1 py-3">
                        <div class="category-h240 zoom-items-pageItem border-none">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/cat/2.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
                                </a>
                            </div>
                            <div class="category-w235 pb-3">
                                <div class="carousel-item-title text-right px-3">
                                    <a href="#" class="text-decoration-none text-card">
                                        <h4>غذای خشک سگ نوتری</h4>
                                    </a>
                                </div>

                                <div class="text-left px-3 mb-3 mt-2">
                                    <div class="mb-2" style="height: 24px">
                                        <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                            class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                    </div>
                                    <div>
                                        <span class="price-font">۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100" style="height: 8px; background-color: #f1c40f;"></div>


    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row py-5">
                <div class="col-3 p-3">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="assets/images/sliders/box-tip.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10">
                        </a>
                    </div>
                </div>
                <div class="col-3 p-3">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="assets/images/sliders/box-tip.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10">
                        </a>
                    </div>
                </div>
                <div class="col-3 p-3">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="assets/images/sliders/box-tip.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10">
                        </a>
                    </div>
                </div>
                <div class="col-3 p-3">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="assets/images/sliders/box-tip.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-4">
                    <div class="row justify-content-around">
                        <div class="col-9 text-right">
                            <h6 class="title-index-category">محصولات پرفروش اخیر</h6>
                        </div>
                        <div class="col-3 text-left align-self-end pl-4">
                            <span>
                                <i class="fas fa-angle-right gray-color"></i>
                            </span>
                            <span>
                                <i class="far fa-hand-pointer gray-color"></i>
                            </span>
                            <span>
                                <i class="fas fa-angle-left gray-color"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel slider-page-index-three">
                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/fish/7.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۴۵۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۲۳٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۲۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/fish/8.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>تانک آکواریوم با پایه چوبی</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۵۵۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۲۳٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۲۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/dog/2.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/dog/3.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۹۰۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/dog/4.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/cat/1.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/cat/2.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row pb-5">
                <div class="col-12 pt-4">
                    <div class="row justify-content-around">
                        <div class="col-9 text-right">
                            <h6 class="title-index-category">منتخب جدیدترین محصولات</h6>
                        </div>
                        <div class="col-3 text-left align-self-end pl-4">
                            <span>
                                <i class="fas fa-angle-right gray-color"></i>
                            </span>
                            <span>
                                <i class="far fa-hand-pointer gray-color"></i>
                            </span>
                            <span>
                                <i class="fas fa-angle-left gray-color"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel slider-page-index-three">
                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/fish/7.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۴۵۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۲۳٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۲۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/fish/8.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>تانک آکواریوم با پایه چوبی</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۵۵۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۲۳٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۲۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/dog/2.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/dog/3.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۹۰۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/dog/4.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/cat/1.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1 py-3">
                            <div class="category-h240 zoom-items-pageItem">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="/temp/product/cat/2.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                                <div class="category-w235">
                                    <div class="carousel-item-title text-right px-3">
                                        <a href="#" class="text-decoration-none text-card">
                                            <h4>غذای خشک سگ نوتری</h4>
                                        </a>
                                    </div>

                                    <div class="text-left px-3 mb-3 mt-2">
                                        <div class="mb-2" style="height: 24px">
                                            <span class="toman-price-off align-middle">۷,۸۰۰,۰۰۰</span><span
                                                class="badge badge-danger badge-pill mr-2">۳۰٪</span>
                                        </div>
                                        <div>
                                            <span class="price-font">۷,۰۹۰,۰۰۰</span><span
                                                class="toman-price">تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid bg-main">
        <div class="container">
            <div class="row py-4">
                <div class="col-4 p-3">
                    <div class="box-1">
                        <a href="#">
                            <img srcset="/temp/product/article/rabbit.jpg" alt="responsive image"
                                 class="d-block img-fluid border-top-10">
                            <div class="caption_article">
                                <h5 class="text-right small">
                                    خرگوش مشکی مشکل داره خوبش کن
                                </h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-4 p-3">
                    <div class="box-1">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="col-4 p-3">
                    <div class="box-1">
                        <img src="" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row pt-5">
                <div class="col-3 p-3">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="/temp/product/article/rabbit.jpg" alt="responsive image"
                                 class="d-block img-fluid border-top-10">
                            <div class="badge-video badge-article">مقاله</div>
                            <div class="caption_article">
                                <h5 class="text-right small title-caption">
                                    خرگوش مشکی مشکل داره خوبش کن
                                </h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3 p-3">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="/temp/product/article/dog.jpg" alt="responsive image"
                                 class="d-block img-fluid border-top-10">
                            <div class="badge-video badge-article">مقاله</div>
                            <div class="caption_article">
                                <h5 class="text-right small title-caption">
                                    خرگوش مشکی مشکل داره خوبش کن
                                </h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3 p-3">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="/temp/product/article/cat.jpg" alt="responsive image"
                                 class="d-block img-fluid border-top-10">
                            <div class="badge-video">ویدئو</div>
                            <div class="caption_article">
                                <h5 class="text-right small title-caption">
                                    محیط زندگی خرگوش shangol و بازیگوش خاک تو
                                    سر متن طولانی حوصله میخواد ... برو بابا
                                </h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3 p-3">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="/temp/product/article/rabbit.jpg" alt="responsive image"
                                 class="d-block img-fluid border-top-10">
                            <div class="badge-video">ویدئو</div>
                            <div class="caption_article">
                                <h5 class="text-right small title-caption">
                                    خرگوش مشکی مشکل داره خوبش کن
                                </h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row py-2 pb-4">
                <div class="col-12 p-3">
                    <div class="box-5">
                        <a href="#">
                            <img srcset="assets/images/sliders/box-bozorg.jpg" alt="responsive image"
                                 class="d-block img-fluid mx-auto border-10">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-4">
                    <div class="text-right">
                        <h6 class="h6 pb-1 black-color pr-2">برندهای ویژه</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel logo-slider">
                        <div class="px-1">
                            <div class="category-h240 border-none">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="assets/images/logo/gormet.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="category-h240 border-none">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="assets/images/logo/rodi.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="category-h240 border-none">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="assets/images/logo/belcando-logo.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="category-h240 border-none">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="assets/images/logo/proplan.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="category-h240 border-none">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="assets/images/logo/nutripet.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="category-h240 border-none">
                                <div class="mb-2">
                                    <a href="#">
                                        <img src="assets/images/logo/roya-canin.jpg" alt="shayanPet"
                                             class="img-item mx-auto pt-3">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{!! asset('assets/libs/owl-carousel/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/js-zoom/fancybox/source/jquery.fancybox.js') !!}"></script>
    <script src="{!! asset('assets/libs/js-zoom/xzoom.min.js') !!}"></script>
    <script src="{!! asset('assets/libs/js-zoom/setup.js') !!}"></script>
    <script src="{!! asset('assets/libs/js-zoom/vendor/placeholder.js') !!}"></script>
    <script src="{!! asset('assets/libs/js-zoom/vendor/fastclick.js') !!}"></script>
    <script src="{!! asset('assets/libs/js-zoom/vendor/jquery.cookie.js') !!}"></script>
@endpush

@push('custom-scripts')
    <script src="{!! asset('assets/js/owlCarousel.js') !!}"></script>
    <script> productPage() </script>
@endpush
