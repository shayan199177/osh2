@extends('layouts.shop')

@push('styles')
    <link href="{!! asset('assets/libs/owl-carousel/owl.carousel.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/libs/css-zoom/xzoom.css') !!}" media="all" rel="stylesheet">
    <link href="{!! asset('assets/libs/js-zoom/fancybox/source/jquery.fancybox.css') !!}" media="all" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="container mt-4 mb-5">
            <div class="row">
                <div class="col-8">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner height-slider">
                            <div class="carousel-item active">
                                <img class="d-block" src="temp/index/slider/Untitled-2.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="temp/index/slider/Untitled-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="temp/index/slider/Untitled-2.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="col">
                        <div>
                            <img class="box-index-2 w-100" src="temp/index/slider/Untitled-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div>
                            <img class="box-index-2 w-100" src="temp/index/slider/Untitled-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid bg-main">
        <div class="container">
            <div class="row d-flex">
                <div class="col my-5 box-index-1 mx-lg-2">
                    <img src="temp/index/dog.jpg" class="w-100 img-index" alt="dog">
                </div>
                <div class="col my-5 box-index-1 mx-lg-2">
                    <h2 class="text-right h5 pt-3 font-700">غذای سگ</h2>
                </div>
                <div class="col my-5 box-index-1 mx-lg-2">
                    <img src="temp/index/cat.jpg" class="w-100 img-index" alt="cat">
                </div>
                <div class="col my-5 box-index-1 mx-lg-2">
                    <h2 class="text-right h5 pt-3 font-700">غذای گربه</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white">
        <div class="container bg-white">
            <div class="col-12 pt-5">
                <div class="text-center border-bottom">
                    <h6 class="h4 pb-2">تخفیف های ویژه</h6>
                </div>
            </div>
            <div class="col-12">
                <div class="owl-carousel slider-page-item py-3">
                    <div class="card-category p-2">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/fish/7.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
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
                                        <span class="price-font">۲۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-category p-2">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/fish/8.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
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
                                        <span class="price-font">۲۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-category p-2">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/dog/2.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
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
                                        <span class="price-font">۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-category p-2">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/dog/3.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
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
                                        <span class="price-font">۷,۹۰۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-category p-2">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/dog/4.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
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
                                        <span class="price-font">۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-category p-2">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/cat/1.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
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
                                        <span class="price-font">۷,۰۹۰,۰۰۰</span><span class="toman-price">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-category p-2">
                        <div class="category-h240 zoom-items-pageItem">
                            <div class="mb-2">
                                <a href="#">
                                    <img src="/temp/product/cat/2.jpg" alt="shayanPet" class="img-item mx-auto pt-3">
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

    <div class="container-fluid bg-black">
        <div class="container height-slider">

        </div>
    </div>

    <div class="container-fluid bg-main">
        <div class="container height-slider">

        </div>
    </div>

    <div class="container-fluid">
        <div class="container">

        </div>
    </div>

    <div class="container-fluid">
        <div class="container">

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
