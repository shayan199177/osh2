@extends('layouts.shop')

@push('styles')
    <link href="{!! asset('assets/libs/owl-carousel/owl.carousel.min.css') !!}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid bg-white">
        <div class="container pt-2 pb-2 pt-sm-3 pb-sm-3">
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


    {{--    slider-OFF--}}

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
            <div class="row justify-content-around p-1 py-md-3 pt-md-4">
                <div class="col-12 col-sm-6 col-lg-4 py-1 pt-sm-3 p-lg-2">
                    <div class="box-3">
                        <a href="#" class="border-10">
                            <img srcset="assets/images/sliders/box-top-cat.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 py-1 pt-sm-3 p-lg-2">
                    <div class="box-3">
                        <a href="#" class="border-10">
                            <img srcset="assets/images/sliders/box-top-off.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 py-1 pt-sm-3 p-lg-2">
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



    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row py-1">
                <div class="col-12 col-sm-6 col-lg-3 py-1 p-sm-2">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="assets/images/sliders/box-tip.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10 mx-auto">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 py-1 p-sm-2">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="assets/images/sliders/box-tip-2.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10 mx-auto">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 py-1 p-sm-2">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="assets/images/sliders/box-tip-3.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10 mx-auto">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 py-1 p-sm-2">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="assets/images/sliders/box-tip-4.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10 mx-auto">
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
                    <div class="owl-carousel slider-page-index-three bg-main border-article">
                        <div class="px-1 py-3">
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
            <div class="row pb-2">
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
                    <div class="owl-carousel slider-page-index-three bg-main border-article">
                        <div class="px-1 py-3">
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
                            <div class="category-h240 border-none zoom-items-pageItem">
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

                                    <div class="text-left px-3 pb-4 mt-2">
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
            <div class="row justify-content-center py-4">
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
                <div class="col-6 py-2 py-md-1 col-lg-4 col-xl-4 mt-xl-4 text-center">
                    <a href="#"><img src="temp/index/bird-index.png" class="img-index img-index-c" alt="cat"></a>
                    <h5>پرندگان</h5>
                </div>
                <div class="col-6 py-2 py-md-1 col-lg-4 col-xl-4 mt-xl-4 text-center">
                    <a href="#"><img src="temp/index/rabbit.png" class="img-index img-index-c" alt="dog"></a>
                    <h5>جوندگان و خزندگان</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100" style="height: 8px; background-color: #f1c40f;"></div>
    <div class="container-fluid bg-currentColor">
        <div class="container">
            <div class="row py-4 justify-content-center">
                <div class="col-8 col-sm-6 col-lg-3 py-2 py-lg-0">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="/temp/product/article/rabbit.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10 mx-auto">
                        </a>
                    </div>
                </div>
                <div class="col-8 col-sm-6 col-lg-3 py-2 py-lg-0">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="/temp/product/article/rabbit.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10 mx-auto">
                        </a>
                    </div>
                </div>
                <div class="col-8 col-sm-6 col-lg-3 py-2 py-lg-0">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="/temp/product/article/rabbit.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10 mx-auto">
                        </a>
                    </div>
                </div>
                <div class="col-8 col-sm-6 col-lg-3 py-2 py-lg-0">
                    <div class="box-4">
                        <a href="#">
                            <img srcset="/temp/product/article/rabbit.jpg" alt="responsive image"
                                 class="d-block img-fluid border-10 mx-auto">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100" style="height: 8px; background-color: #f1c40f;"></div>

    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row pt-5 justify-content-center">
                <div class="col-8 col-sm-6 col-lg-3 py-2 py-lg-0">
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
                <div class="col-8 col-sm-6 col-lg-3 py-2 py-lg-0">
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
                <div class="col-8 col-sm-6 col-lg-3 py-2 py-lg-0">
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
                <div class="col-8 col-sm-6 col-lg-3 py-2 py-lg-0">
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
                            <picture>
                                <source srcset="assets/images/sliders/2000D500-4.jpg" media="(min-width: 1400px)">
                                <source srcset="assets/images/sliders/1400D430-2.jpg" media="(min-width: 769px)">
                                <source srcset="assets/images/sliders/800D350-2.jpg" media="(min-width: 577px)">
                                <img srcset="assets/images/sliders/600D300.jpg" alt="responsive image"
                                     class="d-block img-fluid">
                            </picture>
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
    <script src="{!! asset('assets/libs/jssor.slider-28.1.0.min.js') !!}"></script>
@endpush

@push('custom-scripts')
    <script src="{!! asset('assets/js/owlCarousel.js') !!}"></script>
    <script> HomePage() </script>
@endpush
